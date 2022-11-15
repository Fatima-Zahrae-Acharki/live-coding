<?php

namespace App\Http\Controllers;

use App\Http\Controllers\crudController as ControllersCrudController;
use Illuminate\Http\Request;
use App\Models\promotion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class crudController extends Controller
{
    public function insert(Request $request){
        $promo = new promotion;
        $promo->name = $request->name;
        $promo->save();
        redirect('/test');
        
    }
    public function show(){
        $data = promotion::All();
        return view('test', compact('data'));
    }

    public function edit_promotion($id){


        $student = DB::table('apprentices')
        ->join('promotions','promotions.id','=','apprentices.promotion_id')
        ->select('apprentices.*')
        ->where('promotions.id',$id)
        ->get();
         $promotion = Promotion::where('id', $id)->get();
         return view('edit',compact('promotion','student'));
    }
    public function update(Request $request, $id){
        $promotion = Promotion::where('id', $id)->update(['name'=>$request->name]);
        return redirect('test');
    }


    public function delete(Request $request, $id){
        $promotion = Promotion::where('id', $id)->delete(['name'=>$request->name]);
        promotion::where('id', $id)->delete();
        return redirect("test");
        // promotion::where('id', $request->id)->delete();
        // return redirect("test");

    }

    public function search($searchResult = null){
        if($searchResult == null){
                $data = promotion::all();
                return $data;
            }
        else{
            $data = Promotion::where('name', 'like', '%' . $searchResult . '%')->get();
            return $data;
        }
    }

    public function deletePromo($id){
        promotion::where('id',$id)->delete();
        return redirect('test');
    }
}
