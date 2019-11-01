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
    @foreach($pages as $page)
        <h3>{{$page->title}}</h3>
        <div>
            {{$page->excerpt}}
        </div>
        <div>
            {{$page->body}}
        </div>
        <img src="<?php echo asset("storage/$page->image")?>" class="d-block w-100" alt="...">

        <div>
            {{$page->slug}}
        </div>
        <div>
            {{$page->author_id}}
        </div>
        <div>
            {{$page->created_at}}
        </div>

    @endforeach
@endsection

