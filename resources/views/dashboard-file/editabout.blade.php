@extends('dashboard-front.lay-out')
@section('content')

<form action="{{ route('aboutus.update', $aboutUs->id ?? '') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Important for updates -->

    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">About Us Content:</label>
        <textarea name="content" class="w-full p-2 border rounded">{{ $aboutUs->content ?? '' }}</textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2">Upload Image:</label>
        <input type="file" name="image" class="p-2 border rounded">
        @if($aboutUs && $aboutUs->image)
            <img src="{{ asset('storage/' . $aboutUs->image) }}" alt="Current Image" class="mt-4 w-32 h-32 object-cover">
        @endif
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
</form>

@endsection
