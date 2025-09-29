<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
class Cours extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $fillable = [
        'title',
        'code',
        'description'
    ];
      protected static function booted()
    {
        static::creating(function ($cours) {
            do {
                $code = 'CRS' . strtoupper(Str::random(6));
            } while (self::where('code', $code)->exists());

            $cours->code = $code;
        });
    }
    //
}
