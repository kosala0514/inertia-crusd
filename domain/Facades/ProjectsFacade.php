<?php

namespace domain\Facades;

use domain\Services\ProjectsService;
use Illuminate\Support\Facades\Facade;

class ProjectsFacade extends Facade
{
    protected static function getFacadeAccessor(){
        return ProjectsService::class;
    }
}
