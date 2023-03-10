<section class="relative h-72 bg-black flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    style="background-image: url('images/laravel-logo.png')"></div>

  <div class="z-10">
    <h1  class="text-6xl text-center break-words font-bold uppercase text-white">
      PROGRAMMING<span class="text-yellow-500">MEMES</span>
    </h1>
    <p class="text-2xl text-gray-200 font-bold my-4">
     Find all the programming Memes you dream of
    </p>
    <div>
      @auth
      @else
      <a href="/register"
        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-yellow-600 hover:border-yellow-600">Sign
        Up to Post Memes</a>
      @endauth
    </div>
  </div>
</section>
