@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

       <!-- Start Recent Sales -->
    <div class="card col-span-4 xl:col-span-1">
        <div class="card-header flex justify-between items-center">
            <h2>Activities</h2>
        </div>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r text-center">Message</th>
                    <th class="px-4 py-2 border-r text-center">Model</th>
                    <th class="px-4 py-2 border-r text-center">Timestamp</th>
                    <th class="px-4 py-2 border-r text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">

                @forelse ($activities as $activity)
                <tr>
                    <td class="border border-l-0 px-4 py-2">{{ $activity->message }}</td>
                    <td class="border border-l-0 px-4 py-2">{{ $activity->model }}</td>
                    <td class="border border-l-0 px-4 py-2 capitalize">{{ $activity->created_at->diffForHumans() }}</td>
                    <td class="border border-l-0 px-4 py-2 text-center">
                       <div class="capitalize flex space-x-2 text-xs">
                        <a href="#" class="btn-bs-primary">Edit</a>
                        <a href="#" class="btn-bs-danger">Delete</a>
                       </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="5">No Activity Found</td>
                </tr>
                @endforelse

            </tbody>
        </table>

        <div class="p-5">
            {{ $activities->links() }}
        </div>


    </div>
    <!-- End Recent Sales -->

    </div>
    <!-- End General Report -->

@endsection
