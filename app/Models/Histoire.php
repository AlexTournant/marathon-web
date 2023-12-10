<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histoire extends Model
{
    use HasFactory;


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function chapitres() {
        return $this->hasMany(Chapitre::class);
    }

    public function premier() {
        return $this->chapitres()->where("premier", 1)->first();
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function avis() {
        return $this->belongsToMany(User::class, "avis", "histoire_id", "user_id");
    }

    public function terminees() {
        return $this->belongsToMany(User::class, "terminee", "histoire_id", "user_id")->withPivot("nombre");
    }
}
