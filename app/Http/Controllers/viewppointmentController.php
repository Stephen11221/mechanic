<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment; // Ensure the model is imported

class ViewppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all(); // Fetch all appointments
return view('dashboard-file.viewappointments', compact('appointments'));
    }
}
