<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="">
      {{-- google font --}}
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
      {{-- /google font --}}
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <title>LA MOLISANA - MICHELE</title>
   </head>
   <body>
      @include('partials.header')
      <main>
         <div class="container">
            <section class="lunghe">
               <h2>le lunghe</h2>
               <div class="cards">
                  @foreach ($pastalunga as $pasta)
                     <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta["titolo"]}}">
                     </div>
                  @endforeach
               </div>
            </section>
            <section class="corte">
               <h2>le corte</h2>
               <div class="cards">
                  @foreach ($pastacorta as $pasta)
                     <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta["titolo"]}}">
                     </div>
                  @endforeach
               </div>
            </section>
            <section class="cortisime">
               <h2>le cortissime</h2>
               <div class="cards">
                  @foreach ($pastacortissima as $pasta)
                     <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta["titolo"]}}">
                     </div>
                  @endforeach
               </div>
            </section>
         </div>
      </main>
      @include('partials.footer')
   </body>
</html>
