<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;
use App\Models\Services;
use App\Models\Clients;
use App\Models\Testimonials;
use App\Models\FunFacts;
use App\Models\Resumes;
use App\Models\Skills;

class IndexController extends Controller
{
    public function index() {
        
        $socialMedias = SocialMedia::whereNull('deleted_at')->get();
        $services = Services::whereNull('deleted_at')->orderBy('orderBy', 'asc')->get();
        $clients = Clients::whereNull('deleted_at')->orderBy('orderBy', 'asc')->get();
        $testimonials = Testimonials::whereNull('deleted_at')->orderBy('orderBy', 'asc')->get();
        $funFacts = FunFacts::whereNull('deleted_at')->orderBy('orderBy', 'asc')->get();
        $resumesEducations = Resumes::whereNull('deleted_at')->where('type', 'Education')->orderBy('orderBy', 'asc')->get();
        $resumesExperiences = Resumes::whereNull('deleted_at')->where('type', 'Experience')->orderBy('orderBy', 'asc')->get();
        $designSkills = Skills::whereNull('deleted_at')->where('type', 'Design Skills')->orderBy('orderBy', 'asc')->get();
        $codingSkills = Skills::whereNull('deleted_at')->where('type', 'Coding Skills')->orderBy('orderBy', 'asc')->get();
        
        return  view('index', compact('socialMedias', 'services', 'clients', 'testimonials', 'funFacts', 'resumesEducations', 'resumesExperiences', 'designSkills', 'codingSkills'));
    }
}
