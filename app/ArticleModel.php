<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    //memberi tahu bahwa table yang digunakan adalah article
    protected $table = 'article';

    protected $fillable = [
        'judul', 'penulis', 'deskripsi',
    ];

    //memberi tahu bahwa id merupakan PK
    protected $primaryKey = 'id';

}
