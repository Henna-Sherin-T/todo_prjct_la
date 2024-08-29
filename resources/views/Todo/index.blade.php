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
                    <a href="{{route('TodoCreate')}}" class="p-2 font-semibold rounded-md shadow ">Add New</a>
                </div>
                @if(session('success'))
                    <alert class="text-green-500 border-green-300">
                        {{ session('success') }}
                    </alert>
                    @endif
                <!-- Divider -->
                <div class="divide-y divide-gray-200">
                    <!-- Todo List Section -->
                    <div class="py-6 space-y-6 text-gray-700">
                        <div class="max-h-96 overflow-y-auto">
                            <ul class="space-y-4">
                                @foreach ($todo_table as $todo)
                                <x-todo.todo-card :todo="$todo"/>
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
