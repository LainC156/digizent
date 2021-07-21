<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function getEmployeeDataByTeam($team_name)
    {
        $team = Team::where('team_name', $team_name)->first();
        $employees = $team->employees()->get();
        foreach ($employees as $e) {
            $e->address = $e->address()->first();
        }
        return $employees;
    }
}
