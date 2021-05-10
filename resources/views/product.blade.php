{{-- importo la struttura --}}
@extends('layouts.main')

{{-- titolo pagina --}}
@section('pageTitle')
    PRODUCT- Michele
@endsection
{{-- contenuto prodotto --}}
@section('content')
<div class="product">
    <h1>{{$pasta['titolo']}}</h1>
    <img src="{{$pasta['src-h']}}">
    <img src="{{$pasta['src-p']}}">
    <div class="container">
        <p><{{$pasta['descrizione']}}></p>
    </div> 
</div>
@endsection