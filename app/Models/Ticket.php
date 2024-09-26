<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'status',
        'closed_by',
        'closed_reason'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
