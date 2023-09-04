@extends('layouts/main')

@section('container')

    <h1 class="mb-5">{{ $title }}</h1>

    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>

    @foreach ($articles as $article)
        <article class="mb-5 pb-4 border-bottom">
            <h2>
                <a href="/articles/{{ $article->slug }}" class="text-decoration-none" style="color: brown;">{{ $article->title }}</a>
            </h2>

            <h5>By: <a href="/authors/{{ $article->user->username }}" class="text-decoration-none">{{ $article->user->name }}</a> in <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none" style="color: rgb(128, 26, 165)">{{ $article->category->name }}</a></h5>
            <p>{{ $article->excerpt }}</p>

            <a href="/articles/{{ $article->slug }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach

@endsection
