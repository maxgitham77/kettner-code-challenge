<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('apply');
    }

    public function store(StoreApplicationRequest $request)
    {
        Application::create($request->validated());

        return redirect()->route('apply.thankyou');
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}
