{{-- importo la struttura --}}
@extends('layouts.main')
{{-- importo fontawesome --}}
@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection
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
        <p>{!!$pasta['descrizione']!!}</p>
    </div> 
    <div class="arrows">
        <a href="{{$prev}}" class="arrowLeft"><i class="far fa-arrow-alt-circle-left"></i></div>
        <a href="{{$next}}" class="arrowRight"><i class="far fa-arrow-alt-circle-right"></i></div>
    </div>
</div>
@endsection