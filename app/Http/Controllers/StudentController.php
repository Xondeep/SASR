<?php

namespace App\Http\Controllers;

use App\Models\Temps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function create(Request $request)
    {
        
       
        Temps::create([
            'name' => $request->input('name'),
            'parent_email' => $request->input('parent_email'),
            'class' => $request->input('class'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'rfid_card'=>'999'
            
         ]);
         return response()->json([
            'error' => 'false',
            'message' => "Success",
            'details' => $request->all()
        ], 200);
        }
}
