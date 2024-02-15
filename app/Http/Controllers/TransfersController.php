<?php

namespace App\Http\Controllers;
use App\Models\transfers;
use App\Models\office;
use Illuminate\Http\Request;

class TransfersController extends Controller
{
    public function index()
    {
        $transfers = transfers::all();
        return view('auth.transfers.index',compact('transfers'));   
     }
    
     public function create(Request $request) {
        return view('auth.transfers.create');
         }

    public function store(Request $request) {
        $request->validate([
            'sender_office_id' => 'required|exists:offices,id',
            'receiver_office_id' => 'required|exists:offices,id',
            'amount_transferred' => 'required|numeric',
            'transfer_date' => 'required|date',
        ]);
        
        $tran = transfers::all();
        $balanceSend=office::find($request->sender_office_id)->balance_now;
        $balanceReceive=office::find($request->receiver_office_id)->balance_now;
        $amount=$request->amount_transferred;
        if($balanceSend>=$amount){

            $office_send=office::find($request->sender_office_id);
            $office_send->update([
                'balance_now'=>$balanceSend - $amount 
            ]);

            $office_receive=office::find($request->receiver_office_id);
            $office_receive->update([
                'balance_now'=>$balanceReceive + $amount 
            ]);

            $transfers=transfers::create($request->all());
            return redirect()->route('transfers.index',compact('transfers'));
        }

        else{return(redirect()->route('transfers.false')); }
        
    }

    public function edit($id) {
        
        $transfer=transfers::findOrFail($id);
        return view('auth.transfers.edit', compact('transfer'));
        }

        public function update(Request $request, $id)
        {
            $validatedData=$request->validate([
            'sender_office_id' => 'required|exists:offices,id',
            'receiver_office_id' => 'required|exists:offices,id',
            'amount_transferred' => 'required|numeric',
            'transfer_date' => 'required|date',
            ]);
    
        $transfers=transfers::findOrFail($id);
        $transfers->update($validatedData);
        return redirect()->route('transfers.index');
        }

        public function destroy($id) {
        $transfer = transfers::findOrFail($id);
        $transfer->delete();
        return redirect()->route('transfers.index')->with('success', 'تم حذف الحوالة بنجاح');
        }
}
