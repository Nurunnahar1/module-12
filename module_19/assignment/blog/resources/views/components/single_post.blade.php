<div class="container my-5">
    <div class="row">
        <div class="col-md-10 offset-1">
            <article id="single-post">
                <h1>{{ $posts->title }}</h1>

                <img src="{{ $posts->image }}" alt="Blog Post Image" class="img-fluid mb-3 " width="100%">
                <p>{{ $posts->content }}</p>
            </article>

        </div>

    </div>
</div>




