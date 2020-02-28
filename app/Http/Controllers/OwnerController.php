<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Pet;

class OwnerController extends Controller
{
 public function index(){

     $owners = Owner::orderBy('first_name', 'asc')->limit(100)->get();
     $pets = Pet::all();
     

     return view('index', compact('owners', 'pets'));
    }
   
}
