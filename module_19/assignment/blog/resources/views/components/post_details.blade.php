 @extends('app')
@section('content')
<div class="container my-5">
    <div class="row">
      <div class="col-md-10 offset-1">
        <article>
          <h1>{{ $post->title }}</h1>
          <p class="text-muted">Published on July 10, 2023</p>
          <img src="{{ $post->image }}" alt="Blog Post Image" class="img-fluid mb-3 " width="100%">
          <p>{{ $post->content }}</p>
        </article>
        <hr>

        <form action="{{ route('comment') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="content" class="form-label">Comment</label>
             <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
                <input type="hidden"  value="{{ $post->id }}" name="post_id">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

    </div>
  </div>

@endsection



