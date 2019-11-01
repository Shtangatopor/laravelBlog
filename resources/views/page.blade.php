@extends('welcome')

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

@endsection
<?php //var_dump($pages); ?>
