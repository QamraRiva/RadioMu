@extends('layouts/main')

@section('container')

    <h1 class="mb-5">{{ $title }}</h1>


    @foreach ($datas as $data)
        <article class="mb-5 pb-4 border-bottom">
            <h2>
            <a href="/{{ $page }}/{{ $data->$address }}" class="text-decoration-none" style="color: brown;">{{ $data->name }}</a>
            </h2>
        </article>
    @endforeach

<a href="/articles" class="d-block mt-3"style=text-decoration:none;color:red;>Back to Articles</a>

@endsection
