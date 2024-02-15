<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'lesson_id', 'mark'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    // This is a local scope. It is a method that you can use to filter the query results. In this case, we are using it to filter the marks by lesson. We can use it like this:
        // $marks = Mark::byLesson($lessonId)->get();
    // This will return all the marks for the lesson with the given ID.
    public function scopeByLesson($query, $lessonId)
    {
        return $query->where('lesson_id', $lessonId);
    }
}
