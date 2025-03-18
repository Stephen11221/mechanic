@extends('dashboard-front.lay-out')

@section('content')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>

    <div class="p-6 text-gray-900 dark:text-gray-100">
        {{ __("You're logged in!") }}
    </div>

    <div class="bg-blue-600 text-white p-4 rounded-lg shadow-md">
    <h2 class="text-lg font-bold">Total Appointments</h2>
    <p class="text-2xl font-semibold"></p>
</div>




@endsection
