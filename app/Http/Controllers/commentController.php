<?php

namespace App\Http\Controllers;

use App\Events\NewNotification;
use Illuminate\Http\Request;
use App\Models\comment;
use Auth;

class commentController extends Controller
{
    public function save(request $request)
    {

        comment::create([
            'post_id' => $request->post_id,
            'user_id' => Auth::id(),
            'comment' => $request->post_content,
        ]);

        $data = [
            'user_id' => Auth::id(),
            'user_name'  => Auth::user()->name,
            'comment' => $request->post_content,
            'post_id' => $request->post_id,
        ];

        ///   save  notify in database table ////

        event(new NewNotification ($data));

        return redirect()->back()->with(['success' => 'تم اضافه تعليقك بنجاح ']);
    }
}
