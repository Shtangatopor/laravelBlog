@extends('welcome')

@section('title', 'Pages')

@section('navigation')
    @parent
    <?php $pagelist = \Illuminate\Support\Facades\DB::table('pages')->get('slug'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pages</li>
            @foreach($pages ?? '' as $page)
                <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
            @endforeach
        </ol>
    </nav>
@endsection

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    @endif

    @foreach($pages ?? '' as $page)
        <h3 class="text-center">{{$page->title}}</h3>
        {{$page->excerpt}}
        {!! $page->body !!}
        <img src="<?php echo asset("storage/$page->image")?>" class="d-block w-100" alt="...">
        {{$page->slug}}
        {{$page->author_id}}
        {{$page->created_at}}
    @endforeach

@endsection

