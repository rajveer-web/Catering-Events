<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Feedback;
use App\Http\Controllers\Controller;

class FeedbackBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::all();
        return view('backend.feedback.index',compact('feedback'));
    }
   


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback  = Feedback::find($id);
        return view('backend.feedback.show',compact('feedback'));
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Feedback::find($id)->delete();
        return redirect()->back()->with('successMsg','Message Successfully Delete');
    }
}
