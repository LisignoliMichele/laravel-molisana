{{-- importo la struttura --}}
@extends('layouts.main')
{{-- titolo pagina --}}
@section('pageTitle')
    La molisana HOME-PAGE - Michele
@endsection
{{-- contenuto homepage --}}
@section('content')
<div class="homepage">
   <div class="container">
      <section class="lunghe">
         <h2>le lunghe</h2>
         <div class="cards">
            {{-- ciclo le paste divise in arrray di paste lunghe cote e corissime --}}
            @foreach ($pastalunga as $pasta)
            <div class="card">
               <a href="{{route('product', ['id' => $pasta['id'] ])}}">
                  <img src="{{$pasta['src']}}" alt="{{$pasta["titolo"]}}">
               </a>
            </div>
            @endforeach
         </div>
      </section>
      <section class="corte">
         <h2>le corte</h2>
         <div class="cards">
            @foreach ($pastacorta as $pasta)
               <div class="card">
                  <a href="{{route('product', ['id' => $pasta['id'] ])}}">
                     <img src="{{$pasta['src']}}" alt="{{$pasta["titolo"]}}">
                  </a>
               </div>
            @endforeach
         </div>
      </section>
      <section class="cortisime">
         <h2>le cortissime</h2>
         <div class="cards">
            @foreach ($pastacortissima as $pasta)
               <div class="card">
                  <a href="{{route('product', ['id' => $pasta['id'] ])}}">
                     <img src="{{$pasta['src']}}" alt="{{$pasta["titolo"]}}">
                  </a>
               </div>
            @endforeach
         </div>
      </section>
   </div> 
</div>
@endsection
         
  