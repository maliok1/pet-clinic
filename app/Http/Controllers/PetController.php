<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Pet;

class PetController extends Controller
{
    
       public function show($pet_id)
       {
           $pet = Pet::findOrFail($pet_id);
           $owner = $pet->owner;
           
          return view('pet.show', compact('pet', 'owner'));
       }
      
}
