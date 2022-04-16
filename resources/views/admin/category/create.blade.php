@extends('layouts.dashboard')

@section('content')
<h2>Add New Category</h2>
<form action="{{ route('category.store') }}" method="POST" class="w-5/12 mt-6">
    @csrf
    <div class="">
        <label for="name" class="cursor-pointer block text-sm text-gray-600 mb-1">Name</label>
        <input type="text" name="name" id="name" class="w-full px-2 py-2 rounded-sm bg-white border border-teal-300"
            value="{{ old('name') }}" autocomplete="off">

        @error('name')
        <div class="alert alert-error my-1 p-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mt-4">
        <label for="slug" class="cursor-pointer block text-sm text-gray-600 mb-1">Slug</label>
        <input type="text" name="slug" id="slug" class="w-full px-2 py-2 rounded-sm bg-white border border-teal-300"
            value="{{ old('slug') }}">
        @error('slug')
        <div class="alert alert-error my-1 p-2">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mt-5">
        <button type="submit" class="btn-bs-primary">Create</button>
    </div>
</form>
@endsection

@section('scripts')
<script>
    jQuery(document).ready(function() {
            $("input#slug").val("");
            // Permalink Generation
            jQuery("input#name").keyup(function() {
                var text = $("#name").val();
                if (text != "") {
                    $("input#slug").val(slugify(text));
                } else {
                    $("input#slug").val("");
                }
            });
        });
</script>
@endsection
