<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\deptt;


class DepartmentController extends Controller
{
    public function add() {

        return view('admin/add-department');
    }

    public function save(Request $request) {

        $request->validate([
            'name'         => 'required' ,
            'hod'    => 'required',

        ]);

        $data = [
            'name' => $request->name,
            'hod' => $request->hod,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email
        ];

        try {
        $deptt = deptt::create($data);
        return back()->with([
            'status' => 'success',
            'message' => 'Record Saved Successfully.'
            ]);
        } catch (Exception $e) {
            throw_exception($e);
        }
        // echo"Record Save succesfully";

        return back()->with([
            'status' => 'danger',
            'message' => 'Oops! Something went wrong.'
        ]);

    }
}
