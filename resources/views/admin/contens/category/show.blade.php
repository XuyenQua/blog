@extends('admin.layouts.master')

@section('title')
    show Category
@endsection

@section('content')
    
        <div class="content">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-2 mb-md-0">show category</h5>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('admin.category.index') }}" class="btn btn-outline-secondary me-2"
                                role="button">List</a>
                            {{-- <button class="btn btn-outline-secondary me-2" role="button">Discard</button> --}}
                            {{-- <button class="btn btn-primary" role="button">show category</button> --}}
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
                                    <input class="form-control" id="category_name" type="text" name="category_name"
                                        value="{{ $category->name }}" readonly>
                                    @error('category_name')
                                        <div class="alert alert-danger  mt-1" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="category_description">Description</label>
                                    <textarea class="form-control" id="category_description" name="category_description" cols="100" rows="5" readonly>{{ $category->description }}</textarea>
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
                                <img src="{{ asset('storage/' . $category->image) }}" alt="" width="200">

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
@endsection

