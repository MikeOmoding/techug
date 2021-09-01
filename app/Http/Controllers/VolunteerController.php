<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
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
        $volunteer = Volunteer::create([
            'name'    => ucwords($request->name),
            'email'   => $request->email,
            'message' => $request->message,
            'address' => $request->address,

        ]);
        if (!empty($volunteer)) {
            $response ['message'] = 'success';
            Mail::to($request->email)->send(new \App\Mail\Volunteer());
        }
        else {
            $response ['message'] = 'message could not be received';
        }
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }
}
