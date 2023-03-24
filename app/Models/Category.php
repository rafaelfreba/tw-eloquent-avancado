<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    /**
     * Libera definição de dados em massa
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Mapeia o relacionamento com a tabela de posts
     *
     * @return void
     */
    public function posts()
    {
        return $this->belongsTomany('App\Post', 'category_post', 'category_id', 'post_id')
                    ->using('App\CategoryPost')
                    ->withTimestamps();
                    //->as('relacao')
                    //->wherePivot('active', 1);
                    //->withPivot('username');
    }
}
