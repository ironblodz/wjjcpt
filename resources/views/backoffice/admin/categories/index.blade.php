<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-3">
                        <a href="{{ route('backoffice.admin.categories.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add New Category</a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200 mt-4">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Photos</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $category->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $category->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $category->slug }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $category->photos->count() }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('backoffice.admin.categories.edit', $category) }}" class="px-3 py-1 bg-blue-500 text-white rounded text-sm hover:bg-blue-600">Edit</a>
                                        <form action="{{ route('backoffice.admin.categories.destroy', $category) }}" method="POST" class="inline-block ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded text-sm hover:bg-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>