<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class office extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'location', 'balance_now'];

    public function transfersSent()
    {
        return $this->hasMany(office_transfer_records::class, 'sender_office_id');
    }

    public function transfersReceived()
    {
        return $this->hasMany(office_transfer_records::class, 'receiver_office_id');
    }

    public function transferRecordsReceived()
    {
        return $this->hasMany(office_transfer_records::class, 'receiver_office_id');
    }
    
}
