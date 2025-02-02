<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Group;

class UserGroupsController extends Controller
{
    public function index()
    {

    	$this->data ['groups'] = Group::all();
    	return view('group.groups',$this->data);
    }

    public function create()
    {
    	return view('group.creategroup');
    }

      public function store(Request $request)
    {
    	$formData = $request->all();
    	if (Group::create($formData)) {
    	Session::flash('message','Group Created Successfully');
    	}
    	
    	return redirect()->to('groups');
    }

    public function destroy($id)
    {
    	
    	
    	if (Group::find($id)->delete()) {
    	Session::flash('message','Group Deleted Successfully');
    	}
    	
    	return redirect()->to('groups');

    }
}
