@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase pt-6 px-4 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Create Problem</h2>
                <a href="{{ route('problem.create') }}" class="btn-bs-primary">Back</a>
            </div>



            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-0 bg-white border-b border-gray-200">

                    <form action="{{ route('problem.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="name" class="formLabel">Problem Title</label>
                                <input type="text" name="name" id="name" placeholder="Problem Title" class="formInput"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-red-700"></p>
                                @enderror
                            </div>

                        </div>

                        <div class="mt-6 flex">
                            <div class="flex-1 mr-2">
                                <label for="country" class="formLabel">Category</label>

                                <select name="country" id="country" class="formInput">
                                    <option value="none">Select Category</option>

                                </select>
                                @error('country')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-1 ml-2">
                                <label for="status" class="formLabel">Visibility</label>
                                <select name="status" id="status" class="formInput">
                                    <option value="none" {{ old('status') == 'none' ? 'selected' : '' }}>Select
                                        Visibility
                                    </option>
                                    <option value="active" {{ old('status') == 'private' ? 'selected' : '' }}>Private
                                    </option>
                                    <option value="inactive {{ old('status') == 'public' ? 'selected' : '' }}">
                                        Public
                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="country" class="formLabel">Description</label>

                                <textarea name="description" id="description" class="formInput">
                                    </textarea>
                                @error('description')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="country" class="formLabel">Tags</label>
                                <input type="checkbox" id="html" name="tag[]" value="Bike">
                                <label for="html" class="mr-2 cursor-pointer"> HTML</label>
                                <input type="checkbox" id="css" name="tag[]" value="Car">
                                <label for="css" class="mr-2 cursor-pointer"> CSS</label>
                                <input type="checkbox" id="laravel" name="tag[]" value="Boat">
                                <label for="laravel" class="mr-2 cursor-pointer"> Laravel</label>
                                <input type="checkbox" id="php" name="tag[]" value="Boat">
                                <label for="php" class="mr-2 cursor-pointer"> OOP php</label>

                                @error('country')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="flex-1 ml-1 mr-1">
                                <label for="thumbnail" class="formLabel">Thumbnails</label>
                                {{-- <label for="thumbnail"
                                    class="formLabel border-2 border-dashed border-teal-600 py-10 text-center rounded-md">Click
                                    to upload image <br> <span class="text-sm">Multiple image supported</span></label> --}}
                                <input type="file" name="thumbnail[]" multiple id="thumbnail" class="w-full border-2 border-dashed border-teal-600 py-20 text-center rounded-md">
                                @error('thumbnail')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="upload_image_preview flex"></div>

                        <div class="mb-6">
                            <button type="submit"
                                class="px-10 py-2 bg-teal-600 text-white rounded mt-3 uppercase text-base">Create</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- End General Report -->

@endsection


@section('scripts')
    <script>
        jQuery(document).ready(function($){
            CKEDITOR.replace("description");



        });



        $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img class="m-5" style="width:150px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#thumbnail').on('change', function() {
        imagesPreview(this, 'div.upload_image_preview');
    });
});


    </script>
@endsection
