@extends('layouts.main')

@section('container')
<article class="mb-5">
    <h2>{{ $article->title }}</h2>
    <h4><a href="../authors/{{ $article->user->username }}" class="text-decoration-none">{{ $article->user->name }}</a> </h4>

    <h5> <a href="/categories/{{ $article->category->slug }}" style=text-decoration:none;color:darkskyblue;> ({{ $article->category->name }})</a></h5>
    <br>
    <p>{{  $article->body }}</p>
</article>

<a href="/articles" class="d-block mt-3"style=text-decoration:none;color:red;>Back to Articles</a>
@endsection
