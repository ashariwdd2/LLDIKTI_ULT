<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feedback;

class Rekap extends Model
{
    use HasFactory;
    protected $table = 'rekaps';
    protected $primaryKey = 'is';
    protected $guarded = [];
    public $timestamps = true;
    protected $fillable = [
      'name', 'email', 'address', 'notelp', 'noktp', 'instansi', 'loket', 'keperluan'
    ];

    public function blog(){
      return $this->hasOne(Blog::class, 'id');
    }

    public function feedback(){
      return $this->hasOne(Feedback::class, 'id');
    }

}
