@extends('app')
@section('content')
<div class="container my-5">
    <div class="row mt-5 ">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <article>


                <img src="{{ $post['image'] }}" alt="Blog Post Image" class="img-fluid mb-3">


                <h1>{{ $post['title'] }}</h1>
                {{-- <p>{{ $post['content'] }}</p> --}}
                <p >{{  Str::limit($post['content'], 20) }}</p>

                <div class="text-center">
                    <a href="{{ route('blog_details',$post['id']) }}" class="btn btn-primary ">Read More</a>
                </div>
        </div>
        @endforeach


    </div>


</div>


@endsection





