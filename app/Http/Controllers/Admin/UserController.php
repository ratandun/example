<?php

namespace App\Http\Controllers\Admin;

use App\deptt;
use App\Office_master;
use App\Department_users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

	public function list() {

		$users = Department_users::with('deptt')->get();
		// print_r($users->toArray());
		return view('admin/user-list', compact('users'));
	}
    
    public function add() {
        // $user = collect('name' => '', 'password'=> '', 'deptt_id'=> '', 'office_master_id'=> '', 'user_type'=> ''));
        $user = [];
        $deptts = deptt::get();
        $user_type = config('constant.user_type');
      	$offices = Office_master::get();
        return view('admin/add-user', compact('user_type', 'deptts', 'offices', 'user'));
    }

    public function save(Request $request) {

        //  $request->validate([
        //     'name'         => 'required' ,
        //     'password'    => 'required|min:8',

        // ]);

        $data = [
            'name' => $request->name,
            'password' => $request->password,
            'deptt_id' => $request->deptt_id,
            'office_master_id' => $request->office_id,
            'user_type' => $request->user_type,
        ];

             
        try {
        $users = Department_users::create($data);
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

    public function edit($id) {

        $user = Department_users::where('id', $id)->first();
        $deptts = deptt::get();
        $user_type = config('constant.user_type');
        $offices = Office_master::get();
        return view('admin/add-user', compact('user_type', 'deptts', 'offices', 'user'));
    }

    public function update(Request $request, $id) {
       
        $data = [
            'name' => $request->name,
            'password' => $request->password,
            'deptt_id' => $request->deptt_id,
            'office_master_id' => $request->office_id,
            'user_type' => $request->user_type,
        ];

             
        try {
        $users = Department_users::where('id', $id)->update($data);
        return back()->with([
            'status' => 'success',
            'message' => 'Record Updated Successfully.'
            ]);
        } catch (Exception $e) {
            throw_exception($e);
        }
     

        return back()->with([
            'status' => 'danger',
            'message' => 'Oops! Something went wrong.'
        ]);

    }

    public function delete($id) {

    }

}
