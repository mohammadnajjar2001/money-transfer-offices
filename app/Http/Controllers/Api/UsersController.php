<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\transfers;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json(['data' => $users], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transfers  $transfers
     * @return \Illuminate\Http\Response
     */
    public function show(transfers $transfers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transfers  $transfers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transfers $transfers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transfers  $transfers
     * @return \Illuminate\Http\Response
     */
    public function destroy(transfers $transfers)
    {
        //
    }
}
