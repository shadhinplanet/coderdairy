@extends('layouts.dashboard')

@section('content')

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">


        <x-admin.report-card />
        <x-admin.report-card />
        <x-admin.report-card />
        <x-admin.report-card />

    </div>
    <!-- End General Report -->

@endsection
