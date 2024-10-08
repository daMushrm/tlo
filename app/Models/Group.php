<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'time'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

}
