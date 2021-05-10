<header>
   <div class="logo">
      <img src="{{asset("images/marchio-sito-test.png")}}" alt="logo la molisana">
   </div>
   <nav>
      <ul>
         <li class="{{Route::getCurrentRoute()->getName() == 'home-page' ? 'active' : ''}}"><a href="{{route('home-page')}}">Home</a></li>
         <li class="{{Route::getCurrentRoute()->getName() == 'product' ? 'active' : ''}}"><a href="{{route('product', ['id' => 0])}}">Prodotti</a></li>
         <li class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : ''}}"><a href="{{route('news')}}">News</a></li>
      </ul>
   </nav>
</header>