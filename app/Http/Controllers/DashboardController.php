<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard(Request $request)
    {
        if (session()->has('admin_nama')) {
            $statusChart = app(\App\Charts\StatusChart::class);
            return app(TracerStudyController::class)->index($request,$statusChart);
        }elseif(session()->has('tracer_study_name')){
            return view('tracer-study/dashboard/alumni/index');
        }else{
            return redirect('/tracer-study#login');
        }
    }
}
