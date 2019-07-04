<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'course';
    protected $primaryKey = 'id';
    protected $fillable = ['subject', 'lec_id'];
    public function lecturer()
    {
        return $this->hasOne('App\Lecturers');
    }
}
