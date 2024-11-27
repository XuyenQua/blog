<div class="aside-block">
    <h3 class="aside-title">Categories</h3>
    <ul class="aside-links list-unstyled">
        @php
            $categories = \App\Models\Category::all();
        @endphp
        @foreach ($categories as $item)
            <li><a href="{{ route('client.category', ['slug' => $item->slug]) }}"><i
                        class="bi bi-chevron-right"></i>{{ $item->name }}</a></li>
        @endforeach

    </ul>
</div>