<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\transfers;
use Illuminate\Http\Request;
use app\Models\office;

class TransfersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfers = transfers::all();
        return response()->json(['transfers' => $transfers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                'sender_office_id' => 'required|exists:offices,id',
                'receiver_office_id' => 'required|exists:offices,id',
                'amount_transferred' => 'required|numeric',
                'transfer_date' => 'required|date',
            ]);
            
            
            // $balanceSend=office::find($request->sender_office_id)->balance_now;
            // $balanceReceive=office::find($request->receiver_office_id)->balance_now;
            // $amount=$request->amount_transferred;
            // if($balanceSend>=$amount){

            //     $office_send=office::find($request->sender_office_id);
            //     $office_send->update([
            //         'balance_now'=>$balanceSend - $amount 
            //     ]);

            //     $office_receive=office::find($request->receiver_office_id);
            //     $office_receive->update([
            //         'balance_now'=>$balanceReceive + $amount 
            //     ]);

                $transfers=transfers::create($request->all());
                // return redirect()->route('transfers.index',compact('transfers'));
                return response()->json(['message' => 'تم اضافة عملية الحوالة بنجاح', 'transfers' => $transfers]);
            }

            // else{ return response()->json(['message' => 'لا يمكن التحويل الرصيد غير كافي']); }}
    
    



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transfers  $transfers
     * @return \Illuminate\Http\Response
     */
    public function show(transfers $transfers)
    {
       return 6;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transfers  $transfers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transfers $transfers,$id)
    {
        $validatedData = $request->validate([
            'sender_office_id' => 'required|exists:offices,id',
            'receiver_office_id' => 'required|exists:offices,id',
            'amount_transferred' => 'required|numeric',
            'transfer_date' => 'required|date',
        ]);

        $transfers = transfers::findOrFail($id);
        $transfers->update($validatedData);

        return response()->json(['message' => 'تم تحديث عملية الحوالة بنجاح', 'transfers' => $transfers]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transfers  $transfers
     * @return \Illuminate\Http\Response
     */
    public function destroy(transfers $transfers,$id)
    {
        $transfer = transfers::findOrFail($id);
        $transfer->delete();

        return response()->json(['message' => 'تم حذف عملية الحوالة بنجاح']);
    }
}
