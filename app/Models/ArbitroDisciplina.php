<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArbitroDisciplina extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'arbitros_disciplinas';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function disciplinas(){
        return $this->hasOne(Disciplina::class, 'id', 'disciplina_id');
    }
    public function arbitros(){
        return $this->hasOne(Arbitro::class, 'id', 'arbitro_id');
    }
}
