<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller {
    function FormValidation(Request $request){
        $validetData = $request->validate(array(
            'name'     => 'required|string|min:2',
            'email'    => 'required|email',
            'password' => 'required|string|min:8',
        ));
        if ($validetData) {
            return Response()->json($validetData);
        }else{
            return redirect()->back();
        }
    }


}
