<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Grade;
use DateTime;


class CalenderController extends Controller
{
    public function index()
    {
        $current_DateTime = new DateTime();
        // Adding 2 hours to the time so it will be in Egypt's timezone
        $current_DateTime->modify('+2 hours');
        $today = $current_DateTime->format('l');
        
        $target_groups = [];
        $user_id = auth()->user()->id;
        $grades = Grade::where('user_id', $user_id)->get();
        
        if (!$grades->isEmpty()) {
            foreach ($grades as $grade) {
                $groups = $grade->groups;
                foreach ($groups as $group) {
                    if ($group->day == $today) {
                        $target_groups[] = $group;
                    }
                }
            }
        }

        return view('calendar', ['target_groups' => $target_groups]);
    }
}
