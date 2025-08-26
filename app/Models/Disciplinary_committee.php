<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Disciplinary_committee extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'code',
        'motif',
        'decisions',
        'student_id'
    ];

    //
}
