<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\brief;


use Illuminate\Http\Request;


class taskController extends Controller
{
    public function viewTask($id){
        return view('addTask',compact("id"));
    }

    public function allTasks(){
        return view('showTasks');
    }

    public function addTask(Request $req){
        $id = $req->id_briefs;
        $task = new task();
        $task->name = $req->tName;
        $task->start_date = $req->start_date;
        $task->end_date = $req->end_date;
        $task->description = $req->description;
        $task->briefs()->associate($id);
        $task->save();
        return redirect('showTasks');
    }

    public function showTasks(){
        $data = task::All();
        return view('showTasks',compact('data'));
    }

    public function editTask($id){
        $myTask = task::Where('id', $id)->get();
        return view('editTask',compact('myTask'));
    }

    public function viewUpdt(){
        return view('updateTask');
    }

    public function updateTask(Request $req, $id){
        $myTask = task::Where('id',$id)->update(["name"=> $req->tName,"start_date"=> $req->start_date , "end_date"=> $req->end_date, "description"=> $req->description]);
        $querry = task::where('id',$id)->first();
        return redirect('/editBrief/' .$querry->id_briefs );
    }
    public function deleteTask($id){
        $myTask = task::Where('id',$id)->first();
        task::where('id',$id)->delete();
        return redirect('/editBrief/' .$myTask->id_briefs);
      }
}
