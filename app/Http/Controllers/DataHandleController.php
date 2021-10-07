<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHandleController extends Controller
{
    public function handlePathVariable($id)
    {
        echo "Tham so truyen vao la " . $id;
    }

    public function handleQueryString(Request $request)
    {
        $firstname = $request->get("firstName");
        $lastName = $request->get("lastName");
        $email = $request->get("email");
        return view('datahandle', [
            'firstName' => $firstname,
            'lastName'=> $lastName,
            'email'=> $email
        ]);
    }

    public function handleForm()
    {
        return view('form-data');
    }

    public function processForm(Request $request)
    {
        $data = $request->all();
        return view('form-succcess', $data);
    }
}
