<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function AllContact()
    {
    	$contact_table = DB::table('contacts')->get();
    	return view('page.allcontact')->with('contact', $contact_table);
    }

    public function addcontact()
    {
    	return view('page.add');
    }

    public function InsertContact(Request $request)
    {
    	$data= array();
    	$data['name']  =$request->name;
    	$data['email'] =$request->email;
    	$data['phone'] =$request->phone;
    	$data['description']=$request->description;

    	$insert = DB::table('contacts')->insert($data);
    	// Set message
        \Session::flash('status','Data successfuly added.');
    	return Redirect()->route('all.contact');
    }

    public function DeleteContact($id)
    {
    	$delete = DB::table('contacts')->where('id',$id)->delete();
    	return Redirect()->route('all.contact');
    }

    public function EditContact($id)
    {
    	$contact_table = DB::table('contacts')->where('id',$id)->get();
    	return view('page.edit')->with('contact', $contact_table);
    }

    public function UpdateController(Request $request,$id)
    {
    	$data= array();
    	$data['name']  =$request->name;
    	$data['email'] =$request->email;
    	$data['phone'] =$request->phone;
    	$data['description']=$request->description;

    	$update = DB::table('contacts')->where('id', $id)->update($data);
    	// Set message
        \Session::flash('status','Data Updated.');
        return Redirect()->route('all.contact');

    }

    public function details($id)
    {
    	$contactdata = DB::table('contacts')->where('id',$id)->first();
    	return view('page.details',compact('contactdata'));
    }
}
