@extends('admin.layouts.master')

@section('title')
    Create product
@endsection

@section('css-settings')
@endsection

@section('content')
    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                                    <input class="form-control" id="short_description" name="short_description"
                                        type="text">
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label" for="content">content:</label>
                                    <textarea name="content" id="tiny"></textarea>
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
                                    <label class="form-label" for="image">image</label>
                                    <input class="form-control" id="image" name="image" type="file">
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
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        @else
                                            <option value=""></option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">published</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="published" id="flexRadioDefault1"
                                        value="true">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="published" id="flexRadioDefault2"
                                        value="false" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        no
                                    </label>
                                </div>
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
    <script src="{{ asset('theme/admin/vendor/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#tiny',
        });
    </script>
@endsection
