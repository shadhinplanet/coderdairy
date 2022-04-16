@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

       <!-- Start Recent Sales -->
    <div class="card col-span-4 xl:col-span-1">
        <div class="card-header flex justify-between items-center">
            <h2>Categories</h2>
            <a href="{{ route('category.create') }}" class="btn-shadow">Add New</a>
        </div>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                     <th class="px-4 py-2 border-r text-center">Name</th>
                     <th class="px-4 py-2 border-r text-center">Slug</th>
                     <th class="px-4 py-2 border-r text-center">Problem</th>
                    <th class="px-4 py-2 border-r text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">

                @forelse ($categories as $category)
                <tr>
                    <td class="border border-l-0 px-4 py-2">{{ $category->name }}</td>
                    <td class="border border-l-0 px-4 py-2 lowercase">{{ $category->slug }}</td>
                    <td class="border border-l-0 px-4 py-2 capitalize"></td>
                    <td class="border border-l-0 px-4 py-2 ">
                       <div class="capitalize flex space-x-2 text-xs">
                        <a href="#" class="btn-bs-primary">Edit</a>
                        <a href="#" class="btn-bs-danger">Delete</a>
                       </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="5">No Category Found</td>
                </tr>
                @endforelse

            </tbody>
        </table>

        <div class="p-5">
            {{ $categories->links() }}
        </div>


    </div>
    <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->

@endsection
