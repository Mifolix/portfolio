<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExperienceResource;
use App\Http\Resources\ProjectResource;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::with('technologies')->get();
        return ExperienceResource::collection($experiences);
    }

    public function show(Experience $experience)
    {
        return new ExperienceResource($experience);
    }

}
