<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $submissions = Submission::all();
        return view('admin_dashboard', compact('submissions'));
    }
}
