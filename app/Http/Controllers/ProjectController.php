<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Projects;
use domain\Facades\ProjectsFacade;

class ProjectController extends ParentController
{
    public function index(){
        return Inertia::render('Projects/index');
    }
    public function add(){
        return Inertia::render('Projects/add');
    }
    public function create(Request $request)
    {
        // dd($request);
        return ProjectsFacade::store($request->all());
    }
    public function all(){
        return ProjectsFacade::all();
    }
    public function edit($id){
        $response['project'] = ProjectsFacade::get($id);
        return Inertia::render('Projects/edit', $response);
    }
    public function delete($id){
        return ProjectsFacade::delete($id);
    }
    public function update(Request $data, $project_id){
        return ProjectsFacade::update($data, $project_id);
    }
}
