<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Pet;

class OwnerController extends Controller
{
 public function index()
 {
     $owners = Owner::orderBy('first_name', 'asc')->limit(100)->get();
     $pets = Pet::all();
     
     return view('owner.index', compact('owners', 'pets'));
    }

public function show($id)
{  
    $owner = Owner::findOrFail($id);
    $pets = $owner->pets;
    
    return view('owner.show' ,compact('owner', 'pets'));
   }
   
}
