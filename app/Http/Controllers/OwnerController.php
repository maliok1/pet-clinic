<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
 public function index(){

     $owners = Owner::orderBy('first_name', 'asc')->get();

     return view('layout' ,compact('owners'));
    }
   
}
