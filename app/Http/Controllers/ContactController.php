<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function submit(ContactRequest $request)
    {   
        $contact = Contact::create($request->all());

        return response()->json([
            'message' => 'success',
            'contact' => $contact
        ]);
    }
}
