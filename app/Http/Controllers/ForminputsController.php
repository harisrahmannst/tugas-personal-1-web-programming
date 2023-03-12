<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\forminputs;
use Illuminate\Support\Facades\Validator;

class ForminputsController extends Controller
{
        /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    
    public function store(Request $request) {
       $forminput = Validator::make ($request->all(), [
        'name' => 'required|max:255',
        'email' => 'required|email:dns',
        'telp' => 'required|max:15',
        'pesan' => 'required'
       ]);

       if ($forminput->fails()) {
        return redirect('/#contact')
                    ->withErrors($forminput)
                    ->withInput();
    }
    
        forminputs::create($request->all());

       $request->session()->flash('success', 'Message Was Sent');

       return redirect('/#contact');

    }
    }


