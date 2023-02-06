@extends('layouts.main')


@section('main')
    <!-- Hero Start -->
    <section id="home" class="py-40 bg-cover" style="background-image: url(img/hero.png)">
        <div class="container">
          <h1 class="font-bold text-4xl text-white md:max-w-lg lg:text-6xl">Buku - Buku yang dapat membuat anda Termotivasi</h1>
          <p class="font-thin text-xs text-slate-200 my-6 lg:text-sm">September 6, 2022</p>
          <p class="font-thin text-sm text-slate-200 mb-8 lg:w-1/2">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap andropatologi.</p>
          <button type="button" class="button-primary">Read more</button>
        </div>
      </section>
      <!-- Hero End -->

      <!-- Visi Start -->
      @include('partials.visi')
      {{-- visi End --}}

      <!-- Pembuka Start -->
      <section class="flex flex-wrap items-center bg-slate-100">
        <div class="w-full lg:w-1/2">
          <img src="img/Frame.png" alt="" class="w-full" />
        </div>
        <div class="w-full py-4 px-4 lg:w-1/2">
          <p class="font-medium text-sm text-primary">Pembukaan Kepala Sekolah</p>
          <h2 class="font-bold text-xl text-three mt-4 mb-6 max-w-md md:text-2xl">Ucapan Kepala Sekolah HIGHT SCHOOL</h2>
          <p class="font-medium text-sm text-slate-600 mb-6 max-w-md">“ Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror. Karriärcoach pyjuskap andropatologi. “</p>
          <div class="flex w-full">
            <img src="img/image 34.png" alt="Kepala sekolah" class="rounded-full mr-2" />
            <h4>
              <span class="block font-semibold text-sm text-three">Bpk. Robert stent</span>
              <span class="block font-normal text-sm text-slate-600">Kepala Sekolah</span>
            </h4>
          </div>
        </div>
      </section>
      <!-- Pembuka End -->

      <!-- Main Start -->
      <main class="py-32">
        <div class="container">
          <!-- jurusan Start -->
          @include('partials.study')
          <!-- jurusan End -->

          <!-- prestasi Start -->
          <section id="prestasi">
            <div class="container mb-28">
              <div class="flex flex-wrap w-full justify-between items-end mb-4">
                <div class="w-full md:w-1/2">
                  <h3 class="font-bold text-xl text-three mb-4 lg:text-2xl">Prestasi Siswa - Siswi</h3>
                  <p class="font-medium text-sm text-slate-500 mb-4">Prestasi dari Siswa - Siswi SMA PGRI CICURUG</p>
                </div>
                <button type="button" class="button-primary">See all prestation</button>
              </div>
              <div class="flex flex-wrap w-full justify-center">
                <div class="rounded-xl p-4 overflow-hidden w-full md:w-1/2 lg:w-1/3">
                  <img src="img/bola.png" alt="bola" class="w-full" />
                </div>
                <div class="rounded-xl p-4 overflow-hidden w-full md:w-1/2 lg:w-1/3">
                  <img src="img/batminton.png" alt="bola" class="w-full" />
                </div>
                <div class="rounded-xl p-4 overflow-hidden w-full md:w-1/2 lg:w-1/3">
                  <img src="img/tenis.png" alt="bola" class="w-full" />
                </div>
              </div>
            </div>
          </section>
          <!-- prestasi End -->

          <!-- Artikel Start -->
          @include('partials.artikel')
          <!-- Artikel End -->
        </div>
      </main>
      <!-- Main End -->

      <!-- Galeri Start -->
      @include('partials.galery')
      <!-- Galeri End -->

@endsection
