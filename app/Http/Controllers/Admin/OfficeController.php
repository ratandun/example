<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\deptt;
use App\Office_master;

class OfficeController extends Controller
{
    public function add() {
        $deptts = deptt::get();
       
        return view('admin/add-office', compact('deptts') );
    }

    public function save(Request $request) {

        // $request->validate([
        //     'name'         => 'required' ,
        //     'hod'    => 'required',

        // ]);

        $data = [
            'deptt_id' => $request->deptt_id,
            'office_name' => $request->office_name,
            'hod' => $request->hod,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'distt_id' => 1
        ];

             
        try {
        $office = Office_master::create($data);
        return back()->with([
            'status' => 'success',
            'message' => 'Record Saved Successfully.'
            ]);
        } catch (Exception $e) {
            throw_exception($e);
        }
     

        return back()->with([
            'status' => 'danger',
            'message' => 'Oops! Something went wrong.'
        ]);

    }
}
