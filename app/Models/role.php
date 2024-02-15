<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    public function user()
    {
        return $this->hasOne(User::class, 'role_id');
    }
}
