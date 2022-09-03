<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ProjectController extends ParentController
{
    public function index(){
        return Inertia::render('Projects/index');
    }
}
