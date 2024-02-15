<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\office;
use Illuminate\Http\Request;
use App\Models\transfers;
use App\Models\office_transfer_records;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $offices = Office::all();
    return response()->json($offices);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'balance_now' => 'required|numeric',
        ]);
    
        $office = Office::create($validatedData);
    
        return response()->json(['message' => 'Office created successfully', 'office' => $office]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(office $office)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, office $office, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'balance_now' => 'required|numeric',
        ]);
    
        $office = Office::findOrFail($id);
        $office->update($validatedData);
    
        return response()->json(['message' => 'Office updated successfully', 'office' => $office]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(office $office,$id)
    {
        $office = Office::findOrFail($id);
     $office->delete();

         office_transfer_records::where('receiver_office_id', $id)
        ->orWhere('sender_office_id', $id)
        ->delete();

         transfers::where('receiver_office_id', $id)
        ->orWhere('sender_office_id', $id)
        ->delete();

    return response()->json(['message' => 'Office deleted successfully']);
    }
}
