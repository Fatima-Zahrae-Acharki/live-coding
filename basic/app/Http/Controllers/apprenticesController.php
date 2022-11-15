<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use Illuminate\Http\Request;

class apprenticesController extends Controller
{
    public function insert_student(Request $request){

        $student = new apprentice();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->promotion_id = $request->promoid;
        $student->save();
        return redirect('/test');
    }
    public function addStudent($id){
        return view('addStudent',compact('id'));
    }
    public function edt_S($id){
        $students = apprentice::Where('id',$id)->get();
        return view('updateStudent',compact('students'));
    }
    public function updateS(Request $req,$id){
        $student = apprentice::Where('id',$id)->update(["first_name"=> $req->first_name,"last_name"=> $req->last_name , "email"=> $req->email]);
        $querry = apprentice::where('id',$id)->first();
        return redirect('edit/'.$querry->promotion_id);
  
    }
    public function delete($id){
        $student = apprentice::Where('id',$id)->first();
        $querry = $student->promotion_id;
        apprentice::where('id',$id)->delete();
        return redirect('edit/'. $querry);
    }
}
