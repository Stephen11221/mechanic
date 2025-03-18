@extends('dashboard-front.lay-out')

@section('content')
<div class="container">
    <h2 class="text-center ">Create About Us</h2>

    <form action="{{ route('createabout.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Content:</label>
            <textarea name="content" class="w-full p-2 text-black border rounded" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Upload Image:</label>
            <input type="file" name="image" class="w-full p-2 text-black border rounded" accept="image/*" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
