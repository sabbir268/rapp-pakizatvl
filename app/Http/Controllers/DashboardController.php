<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queary;
class DashboardController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public function queary()
    {
    	$quearys = Queary::all();
    	return view('admin.queary',compact('quearys'));
    }
}
