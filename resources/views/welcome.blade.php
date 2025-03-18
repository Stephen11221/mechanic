@extends('front-web.lay-out')
@section('content')

<!-- Hero Section with Background Image -->
<section class="text-center p-16 bg-cover bg-center text-white" style="background-image: url('{{ asset('images/Doctor Car Repair Service.jpeg') }}');">
    <div class="bg-gray-800 bg-opacity-75 p-10 rounded-lg">
        <h2 class="text-5xl font-extrabold text-yellow-400">Your Trusted Motor Service Provider</h2>
        <p class="mt-3 text-xl text-gray-300">Expert car repair, maintenance, and diagnostics at your service.</p>
        <a href="{{ route('appointments.store') }}" class="mt-6 inline-block px-8 py-3 bg-yellow-500 text-gray-900 font-bold rounded-lg shadow-lg hover:bg-yellow-600 transition">
            Book an Appointment
        </a>
    </div>
</section>

<!-- Services Section -->
 <h1 class="text-center">Our services</h1>
<section class="p-12 grid grid-cols-1 md:grid-cols-2 gap-6  text-black-300">
    <div class="bg-gray-100 p-6 rounded-lg shadow-lg  hover:bg-yellow-500 transition">
        <h3 class="text-2xl font-bold">Booking inspection</h3>
        <p class="mt-2">Before you buy, let our seasoned professionals give your potential new vehicle a thorough inspection and diagnosis. We check everything from under the hood to the tiniest electrical components, and we recommend any parts that may need changing. With a detailed report in hand, you can make your purchase decision with absolute certainty. Book youcr inspection now and be fully informed

        </p>
    </div><div class="flex items-center justify-center p-6">
        <img src="{{ asset('images/download.jpeg') }}" alt="Service 2" class="rounded-lg shadow-lg w-full h-auto">
    </div>

    <div class="bg--800 p-6 rounded-lg shadow-lg text-center hover:bg-yellow-500 transition">
        <h3 class="text-2xl font-bold">Service 3</h3>
        
    </div>
</section>

<!-- Contact Form -->
@endsection