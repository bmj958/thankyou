<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        return View('pages.home');
    }
    function about() {
        return View('pages.about');
    }
    function contact() {
        return View('pages.contact');
    }
    function store(Request $request) {

        $name = $request ->name;

        return redirect()->route('thanks',['name' => $name]);
    }
    function thanks($name, Request $request) {

        return view('pages.thankyou') ->with(compact('name'));
    }
}