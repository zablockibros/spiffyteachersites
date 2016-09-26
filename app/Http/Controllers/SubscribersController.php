<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Subscriber;
use Validator;

class SubscribersController extends Controller
{
    /**
     * Susbcribe to the newsletter
     *
     * @param Request $request
     * @return mixed
     */
    public function newsletter(Request $request)
    {
        $validator = Validator::make($request->only('email'), [
            'email' => 'required|email'
        ], [
        ]);

        if ($validator->fails()) {
            $request->session()->flash('subscriber-error', 'Invalid email address.');

            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Subscriber::where('email', $request->input('email'))->count() > 0) {
            $request->session()->flash('subscriber-error', 'That email address is already a subscriber.');

            return redirect()->back();
        }
        
        $subscriber = new Subscriber();
        $subscriber->email = $request->input('email');
        $subscriber->user_id = ($request->user()) ? $request->user()->id : null;
        $subscriber->type = Subscriber::NEWSLETTER_TYPE;

        $subscriber->save();
        
        $request->session()->flash('subscriber-success', 'Your are now subscribed to our newsletter!');

        return redirect()->back();
    }
}
