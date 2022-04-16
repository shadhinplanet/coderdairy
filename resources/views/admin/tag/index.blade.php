@extends('layouts.dashboard')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Recent Sales -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h2>Tags</h2>
                <a href="{{ route('tag.create') }}" class="btn-shadow">Add New</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r text-center flex-1">Name</th>
                        <th class="px-4 py-2 border-r text-center flex-1">Slug</th>
                        <th class="px-4 py-2 border-r text-center flex-1">Problem</th>
                        <th class="px-4 py-2 border-r text-center flex-1">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">

                    @forelse ($tags as $tag)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 flex-1">{{ $tag->name }}</td>
                            <td class="border border-l-0 px-4 py-2 flex-1 lowercase">{{ $tag->slug }}</td>
                            <td class="border border-l-0 px-4 py-2 flex-1 capitalize"></td>
                            <td class="border border-l-0 px-4 py-2 flex-1">
                                <div class="capitalize flex space-x-2 text-xs justify-center">
                                    <a href="{{ route('tag.edit', $tag) }}" class="btn-bs-primary">Edit</a>
                                    <form action="{{ route('tag.destroy', $tag) }}" method="POST"
                                        onsubmit="return confirm('Do you want to delete?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-bs-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="5">No Tag Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

            <div class="p-5">
                {{ $tags->links() }}
            </div>


        </div>
        <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->
@endsection
