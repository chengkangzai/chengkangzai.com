<?php


namespace App\Console\Services;


use App\Models\User;

class CalendarService
{
    public function addEvent($schedule, User $user)
    {
        $this->format($schedule, $user);
    }

    private function format($schedule, User $user)
    {
        $collection = collect();
        foreach ($schedule as $key => $value) {
        //TODO
        }
    }
}
