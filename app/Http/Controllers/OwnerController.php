<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Task;
class OwnerController extends Controller
{
  public function getAll(){
//    return Owner::all();
return Owner::find(1)->tasks;
  }
}
