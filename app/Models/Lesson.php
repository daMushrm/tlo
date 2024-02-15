<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'name',
        'date',
        'time',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
