@extends('front-web.lay-out')
@section('content')


<section class="p-12 bg-gray-100">
    <h2 class="text-center text-3xl font-bold text-gray-800">Contact Us</h2>
    <form class="max-w-lg mx-auto mt-6 bg-white p-8 rounded-lg shadow-lg">
        <label for="">Name</label>
        <input type="text" placeholder="Your Name" class="w-full p-3 mb-4 border rounded-lg focus:ring-2 focus:ring-yellow-500">
        <label for="">email</label>
        <input type="email" placeholder="Your Email" class="w-full p-3 mb-4 border rounded-lg focus:ring-2 focus:ring-yellow-500">
        <label for="">Message                   </label>
        <textarea placeholder="Your Message" class="w-full p-3 mb-4 border rounded-lg focus:ring-2 focus:ring-yellow-500"></textarea>
        <button class="w-full bg-yellow-500 text-gray-900 p-3 rounded-lg font-bold shadow-lg hover:bg-yellow-600 transition">Send Message</button>
    </form>
</section>


@endsection