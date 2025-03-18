@extends('front-web.lay-out' )

@section('content')
 <div class="text-center p-16 bg-cover bg-center text-white" >
 <div class="flex items-center justify-center p-6">
        <img src="{{ asset('images/download.jpeg') }}" alt="Service 2" class="rounded-lg shadow-lg w-full h-auto">
    </div>
 </div>
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">

        <h2 class="text-2xl font-semibold text-gray-700 text-center">Book an Appointment</h2>

        <form action="{{ route('appointments.store') }}" method="POST" class="mt-6">
            @csrf <!-- Laravel CSRF Protection -->

            <!-- Name -->
            <div class="mb-4">
                <label class="block text-gray-700">Your Name</label>
                <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>

            <!-- Date -->
            <div class="mb-4">
                <label class="block text-gray-700">Select Date</label>
                <input type="date" name="date" class="w-full p-2 border  text-black-900 border-gray-300 rounded-lg" required>
            </div>

            <!-- Time -->
            <div class="mb-4">
                <label class="block text-gray-700">Select Time</label>
                <input type="time" name="time" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
                Book Appointment
            </button>
        </form>
    </div>

    @endsection
