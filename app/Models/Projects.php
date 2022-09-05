<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'agent',
        'est_budget',
        'start_date',
        'due_date',
        'description',
    ];
}
