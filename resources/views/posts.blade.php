@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'fuck' : 'shit' }}">
           <h1>
               <a href="/posts/{{ $post->id }}">
                    {!! $post->title !!} 
               </a>
           </h1>
           <p> {{ $post->date }} </p>
           <p> {{ $post->excerpt }} </p>
           
        </article>
    @endforeach   
@endsection