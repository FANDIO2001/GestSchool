<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;


class Student extends Model
{
     use HasFactory, SoftDeletes, Notifiable;
    protected $fillable = ['user_id', 'fathersName', 'mothersName', 'parentsphone', 'matricule', 'phone_number','stus'];

      protected static function booted()
    {
        static::creating(function ($student) {
            do {
                $matricule = 'LTB-ELV' . strtoupper(Str::random(6));
            } while (self::where('matricule', $matricule)->exists());

            $student->matricule = $matricule;
        });
    }
    
    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
