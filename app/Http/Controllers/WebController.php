<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //index
    public function indexView()
    {
        echo view('web.common.top');
        echo view('web.index');
        echo view('web.common.bottom');
    }

    //job-detail
    public function jobDetailView()
    {
        echo view('web.common.top');
        echo view('web.job-detail');
        echo view('web.common.bottom');
    }
    //jobs
    public function jobsView()
    {
        echo view('web.common.top');
        echo view('web.jobs');
        echo view('web.common.bottom');
    }
    

    //browse-category
    public function browseCategoryView()
    {
        echo view('web.common.top');
        echo view('web.browse-category');
        echo view('web.common.bottom');
    }
    //browse-job
    public function browseJobView()
    {
        echo view('web.common.top');
        echo view('web.browse-job');
        echo view('web.common.bottom');
    }
    //candidate
    public function candidateView()
    {
        echo view('web.common.top');
        echo view('web.candidate');
        echo view('web.common.bottom');
    }

  
    //contact
    public function contactView()
    {
        echo view('web.common.top');
        echo view('web.contact');
        echo view('web.common.bottom');
    }
 
    //employer
    public function employerView()
    {
        echo view('web.common.top');
        echo view('web.employer');
        echo view('web.common.bottom');
    }
    //employer-detail
    public function employerDetailView()
    {
        echo view('web.common.top');
        echo view('web.employer-detail');
        echo view('web.common.bottom');
    }

    

    //resume-detail
    public function resumeDetailView()
    {
        echo view('web.common.top');
        echo view('web.resume-detail');
        echo view('web.common.bottom');
    }
    //signup
    public function signupView()
    {
        echo view('web.common.top');
        echo view('web.signup');
        echo view('web.common.bottom');
    }
}
