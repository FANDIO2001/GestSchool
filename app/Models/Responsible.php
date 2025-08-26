<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Responsible extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $fillable = [
        'responsability',
        'user_id'
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    //
}
