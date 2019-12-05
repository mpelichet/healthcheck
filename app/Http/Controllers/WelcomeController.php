<?php

namespace App\Http\Controllers;

use DB;
use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class WelcomeController extends Controller
{

public function view()
{
	return view('home');
}

  public function viewData()
  {

    //$report = DB::table('table1')
    //		->get();
    $query = "SELECT * FROM healthdata.dbo.aggregated_data WHERE display = 1 ORDER BY disp_order DESC";
    $report = DB::select(DB::raw($query));

    return view('welcome', compact('report'));
  }
}
