@foreach ($categories as $category)
    <div class="category">
        <h2 class="category-title">{{ $category->name }}</h2>
        @if ($category->latestPost)
            <div class="post">
                <h3 class="post-title">{{ $category->latestPost->name }}</h3>

            </div>
        @else
            <p>No posts found for this category.</p>
        @endif
    </div>
@endforeach
