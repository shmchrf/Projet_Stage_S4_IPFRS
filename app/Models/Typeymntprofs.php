<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeymntprofs extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    // public function professeurs()
    // {
    //     return $this->hasMany(Professeur::class, 'typeymntprof_id');
    // }
}