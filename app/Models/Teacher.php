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
        'department_id',
        'statut',
    ];
    
     protected static function booted()
    {
        static::creating(function ($enseignant) {
            do {
                $matricule = 'LTB-ENG' . strtoupper(Str::random(6));
            } while (self::where('matricule', $matricule)->exists());

            $enseignant->matricule = $matricule;
        });
    }
    
    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // Relation avec le département
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    // Relation avec les horaires (Time_Maging)
    public function timeMagings()
    {
        return $this->hasMany(Time_Maging::class);
    }
}
