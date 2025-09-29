<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Teacher extends Model
{
     use HasFactory, Notifiable, SoftDeletes;
     protected $fillable = [
        'user_id',
        'matricule',
       //s 'responsible_id',
        // 'departement_id',
    ];
    //
     protected static function booted()
    {
        static::creating(function ($enseignant) {
            do {
                $matricule = 'LTB-ENG' . strtoupper(Str::random(6));
            } while (self::where('matricule', $matricule)->exists());

            $enseignant->matricule = $matricule;
        });
    }
}
