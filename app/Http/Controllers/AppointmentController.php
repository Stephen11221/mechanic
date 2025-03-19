<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the appointments.
     */
    public function index()
    {
        $appointments = Appointment::where('user_id', Auth::id())->get();
        return view('appointments', compact('appointments')); // Ensure it's a file, not a folder
    }

    /**
     * Show the form for creating a new appointment.
     */
    public function create()
    {
         return view('appointments-create'); // Change from 'appointments.create' to 'appointments-create'
    }

    /**
     * Store a newly created appointment in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
            'date'  => 'required|date|after_or_equal:today',
            'time'  => 'required',
        ]);

        Appointment::create([
            'user_id' => Auth::id(),
            'name'    => $request->name,
            'email'   => $request->email,
            'date'    => $request->date,
            'time'    => $request->time,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Appointment booked successfully!');
    }

    /**
     * Display the   appointment.
     */
    public function show(Appointment $appointment)
    {
        return view('appointment-show', compact('appointment')); // Use single file instead of 'appointments.show'
    }

    /**
     * Show the form for editing an appointment.
     */
    public function edit(Appointment $appointment)
    {
        return view('appointment-edit', compact('appointment')); // Use single file instead of 'appointments.edit'
    }

    /**
     * Update the specified appointment.
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
            'date'  => 'required|date|after_or_equal:today',
            'time'  => 'required',
        ]);

        $appointment->update($request->all());

        return redirect()->route('appointments')->with('success', 'Appointment updated successfully!');
    }

    /**
     * Remove the specified appointment from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments')->with('success', 'Appointment deleted successfully!');
    }
}
