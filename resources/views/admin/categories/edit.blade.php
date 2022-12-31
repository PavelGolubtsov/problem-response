@extends('layouts.admin')

@section('content')
<h2 class="ms-3">Редактирование темы</h2>

@include('mini.success')

<form method="post" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="name" class="col-md-2 col-form-label text-md-end">
                Название <span class="text-danger">*</span>
            </label>
            <div class="col-md-6">
                <input
                    id="name"
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name"
                    value="{{ $category->name }}"
                    placeholder="Введите название"
                    autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="description" class="col-md-2 col-form-label text-md-end">
                Описание
            </label>
            <div class="col-md-6">
                <input
                    id="description"
                    type="text"
                    class="form-control @error('description') is-invalid @enderror"
                    name="description"
                    value="{{ $category->description }}"
                    placeholder="Введите описание">

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-md-2 col-form-label text-md-end"></label>
            <div class="col-md-6 col-form-label">
                <span class="text-danger"><b>*</b></span> Обязательное поле для заполнения!
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-2 col-form-label text-md-end">
                <button type="submit" class="btn btn-success">Сохранить</button>
            </div>
        </div>
</form>
@endsection
