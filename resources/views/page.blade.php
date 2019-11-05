@extends('welcome')

@section('title', 'Pages')

@section('navigation')
    @parent
    @foreach($pages as $page)
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pages</li>
            <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
        </ol>
    </nav>
    @endforeach
@endsection

@section('content')

     @foreach($pages as $page)
        <h3 class="text-center">{{$page->title}}</h3>
        {{$page->excerpt}}
        {{$page->body}}
        <img src="<?php echo asset("storage/$page->image")?>" class="d-block w-100" alt="...">
        {{$page->slug}}
        {{$page->author_id}}
        {{$page->created_at}}
    @endforeach

@endsection

