<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Classe extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'title',
        'speciality_id',
        'classe_code'
    ];
  protected static function booted()
    {
        static::creating(function ($classe) {
            do {
                $classe_code = 'CL-' . strtoupper(Str::random(6));
            } while (self::where('classe_code', $classe_code)->exists());

            $classe->classe_code = $classe_code;
        });
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
    //
}
