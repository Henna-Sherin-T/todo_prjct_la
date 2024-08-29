@extends('layout.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-10 flex flex-col justify-center sm:py-12">
    <div class="relative sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <!-- Header Section -->
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">
                        Todo List
                    </h1>
                    @if(session('success'))
                    <alert class="text-green-500 border-green-300">
                        {{ session('success') }}
</alert>
                    @endif
                    <a href="{{route('TodoCreate')}}" class="p-2 font-semibold rounded-md shadow ">Add New</a>
                </div>
                <!-- Divider -->
                <div class="divide-y divide-gray-200">
                    <!-- Todo List Section -->
                    <div class="py-6 space-y-6 text-gray-700">
                        <div class="max-h-96 overflow-y-auto">
                            <ul class="space-y-4">
                                @foreach ($todo_table as $todo)
                                <li class="flex justify-between items-center bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                                    <div class="flex items-center space-x-3">
                                        <span class="block text-lg font-medium text-gray-800">{{ $todo->title }}</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <a href="" class="py-2 px-4 bg-yellow-500 font-medium rounded-md shadow hover:bg-yellow-600 transition duration-300">Edit</a>
                                        <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this todo?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="py-2 px-4 bg-red-500  font-medium rounded-md shadow hover:bg-red-600 transition duration-300">Delete</button>
                                        </form>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
