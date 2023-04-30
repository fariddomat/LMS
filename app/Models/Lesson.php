<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
