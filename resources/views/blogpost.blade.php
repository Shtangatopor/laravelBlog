@extends('welcome')

@section('title', 'Blogpost')

@section('navigation')
    @parent
    <?php $pagelist = \Illuminate\Support\Facades\DB::table('pages')->get('slug'); ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blogpost</li>
            @foreach($posts as $post)
                <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
            @endforeach
        </ol>
    </nav>
@endsection

@section('content')

    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <img src="<?php echo asset("storage/$post->image")?>" class="d-block w-100" alt="...">
        {{$post->excerpt}} {!!$post->body!!}
    @endforeach

    <div class="mx-auto" style="width: 200px;">
        {{$posts->links()}}
    </div>

@endsection

