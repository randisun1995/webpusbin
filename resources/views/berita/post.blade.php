@extends('layout.main')

@section('container')

<div class="container py-5 px-lg-5">
<article>

    <h2>{{$post->title}}</h2>
    <p>By. Randi Sunardi in <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}} </p></a>

    <div class="text-center" >
    <img src="/img/{{$post->foto}}" width="1000px">
    </div>
    <br>
    <div style="text-align:justify;text-justify: " >
    {!! $post->body !!}
    </div>
    </article>
</div>

<div class="text-center">
    <a href="/blog"><u>Kembali</u></a>
</div>

@endsection
