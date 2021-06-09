@extends('admin.layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nome:"/>
        <input type="text" name="description" placeholder="Descrição:" />
        <input type="file" name="photo" />
        <button type="submit">SALVAR</button>
    </form>
@endsection
