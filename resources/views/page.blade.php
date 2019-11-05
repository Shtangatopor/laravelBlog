@extends('welcome')

@section('title', 'Pages')

@section('navigation')
    @parent
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pages</li>
        </ol>
    </nav>
@endsection

@section('content')

        <h3 class="text-center">{{$pages->title}}</h3>
        excetpt:{{$pages->excerpt}}
        bodY{{$pages->body}}
        <img src="<?php echo asset("storage/$pages->image")?>" class="d-block w-100" alt="...">
        {{$pages->slug}}
        {{$pages->author_id}}
        {{$pages->created_at}}

    ololo
@endsection

