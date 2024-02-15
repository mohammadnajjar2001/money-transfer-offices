<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class office_transfer_records extends Model
{
    use HasFactory;
    protected $table = 'office_transfer_records';

    public function senderOffice()
    {
        return $this->belongsTo(Office::class, 'sender_office_id');
    }

    public function receiverOffice()
    {
        return $this->belongsTo(Office::class, 'receiver_office_id');
    }
    
}
