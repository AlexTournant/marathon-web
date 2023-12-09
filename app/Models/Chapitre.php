<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;

    public function histoire() {
        return $this->belongsTo(Histoire::class);
    }

    public function suites() {
        return $this->belongsToMany(Chapitre::class, "suite", "chapitre_source_id", "chapitre_destination_id")->withPivot('reponse');;
    }

    public function pere() {
        return Chapitre::whereRaw("id in (SELECT chapitre_source_id from suite WHERE chapitre_destination_id=$this->id)")->first();
    }
}
