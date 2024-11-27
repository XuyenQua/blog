@extends('admin.layouts.master')

@section('title')
    Create Category
@endsection

@section('content')
    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-2 mb-md-0">Add a category</h5>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('admin.category.index') }}" class="btn btn-outline-secondary me-2" role="button">List</a>
                            {{-- <button class="btn btn-outline-secondary me-2" role="button">Discard</button> --}}
                            <button class="btn btn-primary" role="button">Add category</button>
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
                                    <label class="form-label" for="category_name">Name:</label>
                                    <input class="form-control" id="category_name" type="text" name="category_name">
                                    @error('category_name')
                                        <div class="alert alert-danger  mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="category_description">Description</label>
                                    <textarea class="form-control" id="category_description" name="category_description" cols="100" rows="5"></textarea>
                                    @error('category_description')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-2">
                    <div class="sticky-sidebar">
                        <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">Image</h6>
                            </div>
                            <div class="card-body">
                                <label class="form-label" for="category_image">Select file</label>
                                <input type="file" class="form-control" name="category_image" id="category_image">
                                @error('category_image')
                                    <div class="alert alert-danger  mt-1" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">Slug</h6>
                            </div>
                            <div class="card-body">
                                <label class="form-label" for="category_slug">slug:</label>
                                <input class="form-control" id="category_slug" type="text" name="category_slug">
                                @error('category_image')
                                <div class="alert alert-danger  mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div> --}}
                        {{-- <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">Pricing</h6>
                            </div>
                            <div class="card-body">
                                
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
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
@endsection
