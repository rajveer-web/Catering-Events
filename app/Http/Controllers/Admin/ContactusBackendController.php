<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Controllers\Controller;

class ContactusBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contact.index',compact('contacts'));
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('backend.contact.show',compact('contact'));
    }

   
    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->back()->with('successMsg','Message Successfully Delete');
    }
}
