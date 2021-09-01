<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $response = [];
        $request->validate(
            [
                'name'    => 'required',
                'email'   => 'required|email',
                'message' => 'required',
            ]
        );
        $contact = Contact::create([
            'name'    => ucwords($request->name),
            'email'   => $request->email,
            'phone'   => $request->phone,
            'message' => $request->message,
            'subject' => $request->subject,

        ]);
        if (!empty($contact)) {
            $response ['message'] = 'success';
            Mail::to($request->email)
                ->send(new ContactMessage($request->subject));

        }
        else {
            $response ['message'] = 'message could not be received';
        }
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
