<?php

namespace domain\Services;

use App\Models\Projects;
use infrastructure\Facades\ImagesFacade;

class ProjectsService{
    protected $project;

    public function __construct(){
        $this->project = new Projects();
    }
    public function get($project_id){
        // dd($project_id);
        return $this->project->find($project_id);
    }
    public function all(){
        return $this->project->all();
    }

    public function store(array $data)
    {
        return $this->project->create($data);
    }

    public function delete($project_id){
        $project = $this->project->find($project_id);
        // dd($project);
        $project->delete();
    }
    public function status($project_id){
        $project = $this->project->find($project_id);
        if($project->status==0){
            $project->status = 1;
        }else{
            $project->status = 0;
        }
        $project->update();
    }
    public function update($data, $project_id){
        $project = $this->project->find($project_id);
        $project->project_name=$data->project_name;
        $project->agent=$data->agent;
        $project->est_budget=$data->est_budget;
        $project->start_date=$data->start_date;
        $project->due_date=$data->due_date;
        $project->description=$data->description;

        $project->save();
    }
    public function allActive(){
        return $this->project->allActive();
    }
}
