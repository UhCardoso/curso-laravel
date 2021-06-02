@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')
    <h1>Exibindo produtos</h1>

    <h2>Estruturas de repetição</h2>

    @if(isset($teste3))
        @foreach ( $products as $product)
            <p class="@if($loop->last) last @endif">{{$product}}</p>
        @endforeach
    @endif

    <hr>

    @forelse($products as $product)
    <p class="@if($loop->first) last @endif">{{$product}}</p>
    @empty
        <p>Não existem produtos cadastrados</p>
    @endforelse

    <hr>

    <h2>Estruturas de controle</h2>
    @if($teste === '123')
        <p>É igual</p>
    @elseif($teste == 123)
        <p>não é do msm tipo</p>
    @else
        <p>não é igual</p>
    @endif


    @unless($teste == 123)
        <p>fdsdf</p>
    @else
        <p>sdfdsf</p>
    @endunless


    @isset($teste2)
        <p>{{$teste2}}</p>
    @else
        <p>vazio</p>
    @endisset



    @empty($teste3)
        <p>vazio</p>
    @else
        <p>nao vazio</p>
    @endempty


    @auth
        <p>Autenticado</p>
    @else
        <p>não autenticado</p>
    @endauth


    @guest
        <p>não autenticado</p>
    @endguest


    @switch($teste)
        @case(1)

            @break
        @case(2)

            @break
        @default

    @endswitch
@endsection


<style>
    .last {background: red;}
</style>
