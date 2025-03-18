<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class DashboardController extends Controller
{

public function index()
{
    $appointmentCount = Appointment::count(); // Count total appointments
    return view('dashboard-file.dashboard', compact('appointmentCount'));
}


}
                    