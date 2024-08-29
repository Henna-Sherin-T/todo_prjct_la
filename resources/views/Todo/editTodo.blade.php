@extends('layout.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-10 flex flex-col justify-center sm:py-12">
    <div class="relative sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <!-- Form Header -->
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Update Todo</h1>
                
                <!-- Todo Form -->
                <form action="{{ route('TodoUpdate', $todo->id) }}" method="POST">
                 @csrf
                 @method('PUT')
                    <!-- Title Field -->
                    <div class="mb-5">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        
                        <input type="text" name="title" id="title" value="{{ old('title', $todo->title) }}"
                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                            </div>
                    
                    <!-- Description Field -->
                    <div class="mb-5">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4" 
                                  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('description', $todo->description) }}</textarea>
                    @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                                </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" 
                                class="py-2 px-4 bg-blue-500  text-white font-semibold rounded-md shadow hover:bg-blue-600 transition duration-300">
                            Update Todo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

