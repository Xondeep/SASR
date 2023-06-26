<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Temps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class espController extends Controller
{
    public function reg(Request $request)
    {
        $rfid_card=  $request->input('rfid_card');
        $tempRow = Temps::where('id',1)->first();
        // $tempRow=null;
        if($tempRow != null){
            Student::create([
                'name' => $tempRow->name,
                'parent_email' => $tempRow->parent_email,
                'class' => $tempRow->class,
                'phone_number' => $tempRow->phone_number,
                'address' => $tempRow->address,
                'rfid_card'=>$rfid_card
                
             ]);
             DB::table('temps')->where('id', 1)->delete();
        }
        else{
            
        }
        // DB::table('temps')->insert([
        //     'name' => $request->input('name'),
        //     'parent_email' => $request->input('parent_email'),
        //     'class' => $request->input('class'),
        //     'phone_number' => $request->input('phone_number'),
        //     'address' => $request->input('address'),
            
            
        //  ]); 
        return response()->json([
            'error' => 'false',
            'message' => "Success",
            'details' => $rfid_card
        ], 200);
   
    }

}
