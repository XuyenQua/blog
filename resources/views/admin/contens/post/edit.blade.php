@extends('admin.layouts.master')

@section('title')
    edit post : {{ $post->title }}
@endsection

@section('css-settings')
@endsection

@section('content')
    <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="content">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-2 mb-md-0">Edit post : {{ $post->title }}</h5>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-outline-secondary me-2" href="{{ route('admin.post.index') }}">List</a>
                            {{-- <button class="btn btn-outline-secondary me-2" role="button">Discard</button> --}}
                            <button class="btn btn-primary" type="submit">Edit post</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-8 pe-lg-2">
                    <div class="card mb-3">
                        <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Basic information</h6>
                        </div>
                        <div class="card-body">
                            <div class="row gx-2">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="title">Title:</label>
                                    <input class="form-control" id="title" name="title" type="text"
                                        value="{{ $post->title }}">
                                    @error('title')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="short_description">short_description</label>
                                    <input class="form-control" id="short_description" name="short_description"
                                        type="text" value="{{ $post->short_description }}">
                                    @error('short_description')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label" for="content">content:</label>
                                    <textarea name="content" id="tiny">{{ $post->content }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card mb-3">
                    <div class="card-header bg-body-tertiary">
                        <h6 class="mb-0">Add images</h6>
                    </div>
                    <div class="card-body">
                       
                    </div>
                </div> --}}

                </div>
                <div class="col-lg-4 ps-lg-2">
                    <div class="sticky-sidebar">
                        <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">image</h6>
                            </div>
                            <div class="card-body">
                                <div class="col-12 mb-3">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="" width="400">
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">image</h6>
                            </div>
                            <div class="card-body">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="image">image</label>
                                    <input class="form-control" id="image" name="image" type="file">
                                    @error('image')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">Category</h6>
                            </div>
                            <div class="card-body">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="category_id">Category:</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        @if ($categories)
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"@if ($category->id == $post->category_id) selected @endif>{{ $category->name }}</option>
                                            @endforeach
                                        @else
                                            Không có danh mục nào
                                        @endif
                                    </select>
                                    @error('category_id')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">published</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="is_published">Publish</label>
                                    <select name="is_published" id="is_published" class="form-control">
                                        <option value="1"@if ($post->is_published == 1) selected @endif>Publish</option>
                                        <option value="0"@if ($post->is_published == 0) selected @endif>Unpublish</option>
                                    </select>
                                </div>
                                @error('is_published')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="card mt-3">
            <div class="card-body">
                
            </div>
        </div> --}}
        </div>
    </form>
@endsection

@section('js-setting')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        </script>
    @endif
    <script src="{{ asset('theme/admin/vendor/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#tiny',
            license_key: 'gpl',
            height: 1000,
        });
    </script>
@endsection
