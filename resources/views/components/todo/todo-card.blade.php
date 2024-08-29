<li class="flex justify-between items-center bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                                    <div class="flex items-center space-x-3">
                                    <a href="{{ route('TodoShow', $todo->id) }}" class="block text-lg font-medium text-gray-800">{{ $todo->title }}</a>
                                    </div>
                                    <div class="flex space-x-2">
                                        <a href="{{ route('TodoEdit', $todo->id) }}" class="py-2 px-4 bg-yellow-500 font-medium rounded-md shadow hover:bg-yellow-600 transition duration-300">Edit</a>
                                        <form action="{{ route('TodoDestroy', $todo->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this todo?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="py-2 px-4 bg-red-500  font-medium rounded-md shadow hover:bg-red-600 transition duration-300">Delete</button>
                                        </form>
                                    </div>
                                </li>

                                