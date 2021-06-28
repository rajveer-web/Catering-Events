<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|alpha',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $feedback = new Feedback();
        $feedback ->name = $request->name;
        $feedback ->email = $request->email;
        $feedback ->subject = $request->subject;
        $feedback ->message = $request->message;
        $feedback ->save();
        $feedback = Feedback ::all();
        ?>
          <script>
        alert("Thank you for Review");
        </script>
        <?php
        return view('frontend.feedback',compact('feedback'))->with('successMsg',' Message sent successfully');
        return redirect()->back();
    }

    public function index()
    {
        $feedback = Feedback ::all();
        return view('frontend.feedback',compact('feedback'));
    }

}
