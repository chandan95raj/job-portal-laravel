<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //index
    public function indexView()
    {
        echo view('admin.common.top');
        echo view('admin.index');
        echo view('admin.common.bottom');
    }

    //add-job
    public function addJobView()
    {
        echo view('admin.common.top');
        echo view('admin.add-job');
        echo view('admin.common.bottom');
    }

    //change-password
    public function changePasswordView()
    {
        echo view('admin.common.top');
        echo view('admin.change-password');
        echo view('admin.common.bottom');
    }

    //create-company
    public function createCompanyView()
    {
        echo view('admin.common.top');
        echo view('admin.create-company');
        echo view('admin.common.bottom');
    }

    //create-resume
    public function createResumeView()
    {
        echo view('admin.common.top');
        echo view('admin.create-resume');
        echo view('admin.common.bottom');
    }

    //manage-job
    public function manageJobView()
    {
        echo view('admin.common.top');
        echo view('admin.manage-job');
        echo view('admin.common.bottom');
    }
    //manage-resume
    public function manageResumeView()
    {
        echo view('admin.common.top');
        echo view('admin.manage-resume');
        echo view('admin.common.bottom');
    }
    //profile-settings
    public function profileSettingsView()
    {
        echo view('admin.common.top');
        echo view('admin.profile-settings');
        echo view('admin.common.bottom');
    }
}