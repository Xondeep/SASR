<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function login(Request $request)
    {
        $admin = admin::where('name', $request->input('name'))
            ->orwhere('email', $request->input('email'))
            ->first();
        if ($admin != null) {
            $pass = Hash::check($request->input('password'), $admin->password);

        } else {
            $error = 'email doesn\'t exist';
            return response()->json([
                'error' => 'true',
                'message' => "failure",
                'details' => $error
            ], 422);
        }
        if ($pass) {
            return response()->json([
                'error' => 'false',
                'message' => "Success",
                'details' => $admin
            ], 200);
        } else {
            $error = 'wrong password';
            return response()->json([
                'error' => 'true',
                'message' => "failure",
                'details' => $error
            ], 422);
        }





    }
}