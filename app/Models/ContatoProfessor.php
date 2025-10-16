<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactoProfessor extends Model
{
    //
    protected $table = 'contato_professor';
    protected $fillable = ['nome','disciplina'];
    public $timestamps = false;

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
