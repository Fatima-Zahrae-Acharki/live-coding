<?php

namespace App\Http\Controllers;

use App\Models\brief;
use App\Models\task;
use Illuminate\Http\Request;

class briefController extends Controller
{
    public function viewBrief(){
        return view('addBrief');
    }
    public function allbriefs(){
        return view('showBrief');
    }
    public function addBrief(Request $req){
        $brief = new brief();
        $brief->name = $req->bName;
        $brief->start_date = $req->start_date;
        $brief->end_date = $req->end_date;
        $brief->description = $req->description;
        $brief->save();
        return redirect('showBrief');
    }
    public function showBriefs(){
        $data = brief::All();
        return view('showBrief',compact('data'));
    }
    public function editBrief($id){
        $brief = brief::Where('id', $id)->get();
        $tasks = task::Where('id_briefs', $id)->get();
        return view('updateBrief',compact('brief', 'tasks'));
    }
    public function viewUpd(){
        return view('updateBrief');
    }
    public function updateBrief(Request $req,$id){
        $brief = brief::Where('id',$id)->update(["name"=> $req->bName,"start_date"=> $req->start_date , "end_date"=> $req->end_date, "description"=> $req->description]);
        return redirect('showBrief');
    }
    public function deleteBrief($id){
        brief::where('id', $id)->delete();
        return redirect('showBrief');
    }
}
