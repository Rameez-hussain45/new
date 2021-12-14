<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\user;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function Index()
    {
$all=user::join('departments','d_id','=','users.dept_id')
->get(['departments.d_name','users.id','users.name','users.email']);
return view('frontend.index',compact('all'));
    }
    public function Createdepartment()
    {

        return view('frontend.createdepartment');
    }
    public function Storedepartment(Request $request)
    {

        $request->validate([
            'name' => 'required',

        ]);
        $depart = new department();
        $depart->d_name = $request->input('name');
        $data = $depart->save();
        //    $data= department::create($request->all());

        if ($data) {
            return back()->with('success', 'Data Inserted Successfully');
        } else {
            return back() - with('fail', 'Something Went Wrong');
        }
    }
    public function createUser()
    {
$user=department::all();
        return view('frontend.createuser',compact('user'));
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
'email'=>'required|unique:users',
'password'=>'required',
'department'=>'required'

        ]);
$user=new user();
$user->name=$request->input('name');
$user->email=$request->input('email');
$user->password=$request->input('password');
$user->dept_id=$request->input('department');
$data=$user->save();
if ($data) {
    return back()->with('success', 'Data Inserted Successfully');
} else {
    return back() - with('fail', 'Something Went Wrong');
}
    }
}
