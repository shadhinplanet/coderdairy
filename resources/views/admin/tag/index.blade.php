@extends('layouts.dashboard')

@section('content')

<div class="wp_categories_page_content">

    <div class="wp_categories_form">
        <h1>Add New Tag</h1>
        <form action="{{ route('tags.store') }}" method="POST">
            @csrf
            <div class="single_form_field name_field">
                <label for="tag_name">Name</label>
                <input type="text" name="tag_name" id="tag_name">
                <small>The name is how it appears on your site.</small>
            </div>
            <div class="single_form_field slug_field">
                <label for="tag_slug">Slug</label>
                <input type="text" name="tag_slug" id="tag_slug">
                <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only
                    letters, numbers, and
                    hyphens.</small>
            </div>
            <div class="single_form_field slug_field">
                <label for="tag_description">Description</label>
                <textarea name="tag_description" id="tag_description" rows="3"></textarea>
                <small>The description is not prominent by default; however, some themes may show it.</small>
            </div>
            <div class="single_form_field slug_field">
                <button type="submit" class="btn btn_primary">Add New Tag</button>
            </div>
        </form>
    </div>
    <div class="wp_categories_table">
        <h1>All Tags</h1>
        <div class="posts_table">
            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r">Name</th>
                        <th class="px-4 py-2 border-r">Slug</th>
                        <th class="px-4 py-2 border-r">Description</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($tags as $tag)
                        <tr class="single_table_item">
                            <td class="post_title_column border border-l-0 px-4 py-2"><a href="#">{{ $tag->name }}</a>
                                <ul>
                                    <li><a href="{{ route('tags.edit', $tag) }}">Edit</a></li>
                                    <li>
                                        <form action="{{ route('tags.destroy', $tag) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Trash</button>
                                        </form>

                                    </li>
                                    <li><a href="#">View</a></li>
                                </ul>
                            </td>
                            <td class="border border-l-0 px-4 py-2 lowercase"><a href="#">{{ $tag->slug }}</a></td>
                            <td class="border border-l-0 px-4 py-2">
                                @if ($tag->description)
                                    {{ $tag->description }}
                                @else
                                    ---
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" style="text-align: center">No Tag Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <div class="p-5">
                {{ $tags->links() }}
            </div>
        </div>
    </div>

</div>

@endsection
