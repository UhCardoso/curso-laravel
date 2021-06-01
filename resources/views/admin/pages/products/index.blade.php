@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')
    <h1>Exibindo produtos</h1>

    @if($teste === '123')
        É igual
    @elseif($teste == 123)
        não é do msm tipo
    @else
        não é igual
    @endif


    @unless($teste == 123)
        fdsdf
    @else
        sdfdsf
    @endunless


    @isset($teste2)
        {{$teste2}}
    @else
        vazio
    @endisset



    @empty($teste3)
        vazio
    @else
        nao vazio
    @endempty


    @auth
        Autenticado
    @else
        não autenticado
    @endauth


    @guest
        não autenticado
    @endguest


    @switch($type)
        @case(1)

            @break
        @case(2)

            @break
        @default

    @endswitch
@endsection
