@extends('layouts.app')

@section('form')
<div class="container">
    <h1>Добавление поста</h1>

<form method="POST" action="/add_post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Категория</label>
      <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Название</label>
      <input type="text" name="title" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Текст</label>
        <textarea type="text" name="subject" class="form-control" id="exampleInputPassword1" style="resize: none"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{ route('home') }}">Назад</a>
  </form>
</div>
@endsection
