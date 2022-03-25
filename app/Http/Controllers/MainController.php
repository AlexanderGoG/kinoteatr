<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Models\films;
use App\Models\zakaz;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function film()
    {
        return view('home', ['img' => films::all()]);

    }

    public function about()
    {
        return view('about');
    }


    public function rules()
    {
        return view('rules');
    }

    public function reviews()
    {
        $reviews = new ContactModel();
        return view('reviews', ['reviews' => $reviews->all()]);
    }

    public function reviews_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:4|max:500',

        ]);
        $review = new ContactModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();
        return redirect('/reviews');

    }

    public function home_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100'
        ]);
        $review = new zakaz();
        $review->email = $request->input('email');
        $review->row = $request->input('row',null);
        $review->place = $request->input('place',null);

        $review->save();
        return redirect('/');

    }

}
