<?php

namespace App\Http\Controllers;
use App\Models\office;
use App\Models\transfers;
use App\Models\office_transfer_records;
use Illuminate\Http\Request;

class OfficeController extends Controller
{    
    
     public function index()
     {
        
     $offices = Office::all();
     return view('auth.offices.index',compact('offices')) ;
     }


     public function create(Request $request) {
        return view('auth.offices.create');
         }



         public function store(Request $request) {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'balance_now' => 'required|numeric',
            ]);
        
            Office::create($validatedData);
            
            return redirect()->route('offices.index');
        }


     public function edit($id) {
        
        $office = Office::findOrFail($id);
        return view('auth.offices.edit', compact('office'));
        }


        public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'balance_now' => 'required|numeric',
        ]);
    
        $offices=office::findOrFail($id);
        $offices->update($validatedData);
        return redirect()->route('offices.index');
    }

    public function destroy( $id)
    {
       
        
        office::destroy($id);

        office_transfer_records::where('receiver_office_id', $id)
        ->orWhere('sender_office_id', $id)
        ->delete();
   

        transfers::where('receiver_office_id', $id)
        ->orWhere('sender_office_id', $id)
        ->delete();
      
        return redirect()->route('offices.index');
    }
}
