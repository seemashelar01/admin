<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Users;
use DB;

class HomeController extends Controller
{
    public function welcome() {
        return view('admin.welcome');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

}
