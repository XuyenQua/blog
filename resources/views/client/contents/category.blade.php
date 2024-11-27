@extends('client.layouts.master')

@section('title')
    Category - {{ $category->name }}
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-9" data-aos="fade-up">
                    <h3 class="category-title">Category: {{ $category->name }}</h3>
                    @foreach ($posts as $post)
                        <div class="d-md-flex post-entry-2 half">
                            <a href="{{ route('client.post', ['slug' => $post->slug]) }}" class="me-4 thumbnail">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta">
                                    {{-- <span class="date">Culture</span> 
                                    <span
                                        class="mx-1">&bullet;</span> --}}
                                    <span>{{ $post->created_at->format('d M Y') }}</span>
                                </div>
                                <h3>
                                    <a href="{{ route('client.post', ['slug' => $post->slug]) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p>
                                    {{ $post->short_description }}
                                </p>
                                {{-- <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Wade Warren</h3>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach




                    <div class="text-start py-4">
                        <div class="custom-pagination">
                            {{-- <a href="#" class="prev">Prevous</a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#" class="next">Next</a> --}}
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{ $posts->links('pagination::bootstrap-5') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- ======= Sidebar ======= -->
                    @include('client.contents.component.sidebar')
                </div>

            </div>
        </div>
    </section>
@endsection
