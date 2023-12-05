<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books'; // Tabela Livros
    protected $fillable = ['name', 'author', 'publish_date']; // Alguns campos, preenchiveis ?

}
