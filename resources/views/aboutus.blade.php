@extends('front-web.lay-out')

@section('content')
<div class="container mx-auto">
    <h2 class="text-center">About Us</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 text-center rounded">
            {{ session('success') }}
        </div>
    @endif

    @if(isset($aboutus) && $aboutus)
        <div class="mt-4 border p-4 container rounded shadow">
            <p class="text-gray-700">{{ $aboutus->content }}</p>
            
            @if($aboutus->image)
                <div class="flex justify-center">
                    <p id="loadingText" class="text-gray-500 text-sm">Loading image...</p>

                    <img id="aboutUsImage" 
                         src="{{ asset('storage/' . $aboutus->image) }}" 
                         class="w-full max-w-md mt-2 rounded hidden"
                         onload="document.getElementById('loadingText').style.display='none'; this.classList.remove('hidden');">
                </div>
            @endif
        </div>
    @else
        <p class="text-center text-gray-500">No About Us information available.</p>
    @endif
</div>
@endsection
