<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
public function  addTask(Request $req){
 $task=new Task();
 $task->titre=$req->titre;
 $task->owner_id=$req->owner_id;
 $task->save();
}
}
