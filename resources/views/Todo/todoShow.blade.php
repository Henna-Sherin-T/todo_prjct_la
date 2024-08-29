@extends('layout.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-10 flex flex-col justify-center sm:py-12">
    <div class="relative sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <!-- Todo Details Header -->
                <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $todo->title }}</h1>
                
                <!-- Todo Description -->
                <div class="text-lg text-gray-700 mb-6">
                    {{ $todo->description }}
                </div>
                
                <!-- Back Button -->
                <div class="flex justify-end">
                    <a href="{{ route('TodoList') }}" 
                       class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600 transition duration-300">
                        Back to Todo List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
