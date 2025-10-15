<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_code', 'name', 'program_id', 'instructor_id', 'year_level', 'semester', 'credits'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
