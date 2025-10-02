<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time_Maging extends Model
{
    protected $fillable = [
        'teacher_id',
        'day_id',
        'classe_id',
        'beginning',
        'end',
    ];
    
    // Relation avec l'enseignant
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
    // Relation avec le jour
    public function day()
    {
        return $this->belongsTo(Day::class);
    }
    
    // Relation avec la classe
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}
