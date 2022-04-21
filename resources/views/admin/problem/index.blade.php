@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Recent Sales -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-header flex justify-between items-center">
                <h2>Problems</h2>
                <a href="{{ route('problem.create') }}" class="btn-indigo">Add New</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r text-center"></th>
                        <th class="px-4 py-2 border-r text-center">Name</th>
                        <th class="px-4 py-2 border-r text-center">Category</th>
                        <th class="px-4 py-2 border-r text-center">Tags</th>
                        <th class="px-4 py-2 border-r text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">

                    @forelse ($problems as $problem)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center">
                                <i class="fa {{ $problem->visibility == 'public' ? 'fa-eye' : 'fa-eye-slash' }}"></i>
                            </td>
                            <td class="border border-l-0 px-4 py-2"><a href="{{ route('problem.show', $problem) }}"
                                    class="hover:text-teal-600">{{ $problem->name }}</a></td>
                            <td class="border border-l-0 px-4 py-2 capitalize text-xs">{{ $problem->category->name }}</td>
                            <td class="border border-l-0 px-4 py-2 capitalize">
                               @foreach ($problem->tags as $tag)
                                <a href="#" class="text-xs bg-teal-600 text-white rounded-sm px-2 py-1">{{ $tag->name }}</a>
                               @endforeach

                            </td>
                            <td class="border border-l-0 px-4 py-2 ">
                                <div class="capitalize flex space-x-2 text-xs">
                                    <a href="{{ route('problem.edit', $problem) }}" class="btn-bs-primary">Edit</a>
                                    <form action="{{ route('problem.destroy', $problem) }}" method="POST"
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
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="5">No Problem Found
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

            <div class="p-5">
                {{ $problems->links() }}
            </div>

        </div>
        <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->
@endsection
