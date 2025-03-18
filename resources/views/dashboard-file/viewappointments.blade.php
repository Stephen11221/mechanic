@extends('dashboard-front.lay-out')

@section('content')
<div class=" rounded-lg shadow-lg mt-10">
    <h2 class="text-2xl font-semibold  text-black text-center">Appointments</h2>

    <table class="w-full  border-collapse border border-black ">
        <thead>
            <tr class="bg-black">
                <th class="border border-black p-2">Name</th>
                <th class="border border-black p-2">Email</th>
                <th class="border border-black p-2">Date</th>
                <th class="border border-black p-2">Time</th>
            </tr>
        </thead>
        <tbody class="text-black  bg-white">
            @foreach($appointments as $appointment)
            <tr>
                <td class="border border-black-300 p-2">{{ $appointment->name }}</td>
                <td class="border border-gray-300 p-2">{{ $appointment->email }}</td>
                <td class="border border-gray-300 p-2">{{ $appointment->date }}</td>
                <td class="border border-gray-300 p-2">{{ $appointment->time }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
