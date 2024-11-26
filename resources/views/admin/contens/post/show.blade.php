@extends('admin.layouts.master')

@section('title')
    Create product
@endsection

@section('content')
    <div class="content">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row flex-between-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">Add a product</h5>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-secondary me-2" role="button">Discard</button>
                        <button class="btn btn-primary" role="button">Add product</button>
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
                                <input class="form-control" id="title" name="title" type="text">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label" for="short_description">short_description</label>
                                <input class="form-control" id="short_description" name="short_description" type="text">
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label class="form-label" for="content">content:</label>
                                <input class="form-control" id="content" name="content" type="text">
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
                            <h6 class="mb-0">Type</h6>
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Tags</h6>
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Pricing</h6>
                        </div>
                        <div class="card-body">
                           
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
@endsection
