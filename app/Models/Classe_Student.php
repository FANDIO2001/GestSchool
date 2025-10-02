<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Classe_Student extends Model
{
    use HasFactory,Notifiable,SoftDeletes;
    protected $fillable = [
    'student_id',
    'classe_id',
    'annee'
    ];
    
    // Relation avec la classe
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
    
    // Relation avec l'élève
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
