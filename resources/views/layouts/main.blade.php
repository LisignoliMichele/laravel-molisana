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
      {{-- diamo un placeholder anche al titolo: --}}
      <title>@yield('pageTitle')</title>
   </head>
   <body>
      {{-- inclusa la struttura --}}
      @include('partials.header')
      <main> 
         {{-- aggiunto lo yeld(come placeholder) del contenuto della struttura --}}
         @yield('content')
      </main>
      @include('partials.footer')
   </body>
</html>
