<section id="artikel">
    <div class="text-center">
      <h1 class="text-2xl font-bold mb-4">Artikel</h1>
      <p class="text-sm font-medium text-slate-700 mb-10 max-w-lg mx-auto">Kami menyediakan beberapa artikel dari kegiatan - kegiatan pembelajaran maupun lorem ipsum donot saas</p>
    </div>
    <div class="container w-full flex flex-wrap justify-evenly p-4 gap-4">
        @foreach ($posts as $post )

        <div class="w-full shadow-md md:w-5/12 rounded-lg overflow-hidden">
          <div class="mb-4">
            <img src="https://source.unsplash.com/360x200?programing" alt="" class="w-full bg-cover" />
          </div>
          <div class="p-6">
            <h1 class="text-xl font-semibold mb-2">
                <a href="">{{ $post->title }}</a>
            </h1>
            <p class="text-base mb-2">
              {{ $post->excerpt }}
            </p>
            <p class="text-sm text-secondary mb-4">date 03 january 2023</p>
            <a href="/{{ $post->slug }}" class="text-sm rounded-full bg-primary py-2 px-4">Read more</a>
          </div>
        </div>
        @endforeach
    </div>
  </section>
