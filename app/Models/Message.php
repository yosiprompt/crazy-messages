<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user_id',
        'crazy_votes',
        'not_crazy_votes',
    ];


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
