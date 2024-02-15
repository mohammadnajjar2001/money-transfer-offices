<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transfers extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_office_id',
        'receiver_office_id',
        'amount_transferred',
        'transfer_date',
        
    ];
    public function senderOffice()
    {
        return $this->belongsTo(Office::class, 'sender_office_id');
    }
    public function receiverOffice()
    {
        return $this->belongsTo(Office::class, 'receiver_office_id');
    }
}
