<?php

namespace App\Http\Controllers\Dashboard;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomController extends Controller
{
    public function index(){


            $tasks_count = Task::count();
            
    
            return view('dashboard.welcom', compact('tasks_count'));
    
        }// end of index
    
}//end of controller
    
