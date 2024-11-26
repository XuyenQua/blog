@extends('admin.layouts.master')

@section('title')
    Create Category
@endsection

@section('content')
    <div class="content">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row flex-between-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">Add a category</h5>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-secondary me-2" role="button">Discard</button>
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
                                <label class="form-label" for="category-name">Name:</label>
                                <input class="form-control" id="category-name" type="text" name="category-name">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="category-description">Description</label>
                                <textarea class="form-control" id="category-description" name="category-description" cols="100" rows="5"></textarea>
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
                            <label class="form-label" for="category-image">Select file</label>
                            <input type="file" class="form-control" name="category-image" id="category-image">
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Slug</h6>
                        </div>
                        <div class="card-body">
                            <label class="form-label" for="category-slug">slug:</label>
                            <input class="form-control" id="category-slug" type="text" name="category-slug">
                        </div>
                    </div>
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
        {{-- <div class="card mt-3">
            <div class="card-body">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">Add a category</h5>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-secondary me-2" role="button">Discard</button>
                        <button class="btn btn-primary" role="button">Add category</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
