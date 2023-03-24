<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Details extends Model
{
    use HasFactory;
    /**
     * Libera definição de dados em massa
     *
     * @var array
     */
    protected $fillable = ['status', 'visibility'];

    /**
     * Mapeia o relacionamento com o model post
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id', 'id');
    }
}
