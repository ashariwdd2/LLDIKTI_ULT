<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'instansi',
        'no_urut',
        'deskripsi',
        'date'
    ];
    public function blog(){
        return $this->hasOne(Blog::class, 'id');
    }

}
