<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Grade;
// use App\Models\Group;

class CalenderController extends Controller
{
    public function index()
    {
        $target_day = 'Sunday';
        $target_groups = [];
        $user_id = auth()->user()->id;
        $grades = Grade::where('user_id', $user_id)->get();
        // @dd(Group::all());

        if (!$grades->isEmpty()) {
            foreach ($grades as $grade) {
                $groups = $grade->groups;
                foreach ($groups as $group) {
                    if ($group->day == $target_day) {
                        $target_groups[] = $group;
                    }
                }
            }
        }

        return view('calendar', ['target_groups' => $target_groups]);
    }
}
