@extends('layouts.admin')
@section('content')
<h2>Список удаленных категорий</h2>
<table class="table table-striped">
    <thead class="table-striped">
        <tr>
            <th style="width: auto">№</th>
            <th style="width: auto">Имя категории</th>
            <th style="width: auto">Название категории</th>
            <th style="width: auto">Удален</th>
            <th style="width: auto">Восстановить</th>
            <th style="width: 140px"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td><span class="text-danger">{{$category->deleted_at}}</span></td>
                <td>
                    <form method="post" action="{{ route('categories.unDelete', $category->id) }}">
                        @csrf
                        <input type="" name="id" value="{{$category->id}}" hidden>
                        <button class="btn btn-primary">Восстановить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection