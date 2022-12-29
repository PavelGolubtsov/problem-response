@extends('layouts.app')

@section('content')
<h2 class="ms-3 mb-3">Задай и получи ответ</h2>
@foreach($categories as $category)
<div class="mb-3">
    <div class="col-md-6 ms-3">{{$category->name}}</div>
    <div class="col-md-6 ms-3">{{$category->description}}</div>
</div>
@endforeach
@endsection
