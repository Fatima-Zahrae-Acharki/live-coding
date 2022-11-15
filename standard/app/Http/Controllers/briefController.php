<?php

namespace App\Http\Controllers;

use App\Models\brief;
use App\Models\task;
use App\Models\apprentice;
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





    //assign brief to apprentices(attach/detach)
    //to display apprentices
    public function displayApprentices($id)
    {
        $data = apprentice::all();
        $briefId = $id;
        return view('briefAssignement', compact('data', 'briefId'));
    }

    //to attach brief
    public function attachBrief($briefId, $id)
    {
        $apprentice = apprentice::where('id', $id)->first();
        $apprentice->assignedBrief()->attach($briefId);
        return redirect('briefAssignement/' . $briefId);
    }

    //to detach brief
    public function detachBrief($briefId, $id)
    {
        $apprentice = apprentice::where('id', $id)->first();
        $apprentice->assignedBrief()->detach($briefId);
        return redirect('briefAssignement/' . $briefId);
    }


    //to assign for the whole class
    public function assignClass($briefId)
    {
        $apprentice = apprentice::all();
        foreach ($apprentice as $app) {
            $app->assignedBrief()->attach($briefId);
        }
        return redirect('briefAssignement/' . $briefId);
    }
}
