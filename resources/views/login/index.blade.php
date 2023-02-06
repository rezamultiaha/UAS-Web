@extends('layouts.main')

@section('main')
    <div class="h-screen w-screen bg-cover px-20 py-25 sm:px-25 sm:py-30 lg:py-40" style="background-image: url(img/bg.jpg)">
      <form action="" class="">
        <div class="w-full shadow-sm shadow-white backdrop-blur-sm rounded-md py-4 m-auto sm:w-2/4 lg:w-1/4 border">
          <h1 class="text-2xl font-semibold text-center mb-6">Login</h1>
          <div class="mb-4 w-full px-4">
            <label for="name" class="text-base font-semibold">Username</label>
            <input
              type="name"
              id="name"
              placeholder="Masukan Username"
              class="w-full bg-transparent border-b-2 p-3 border-sky-600 text-dark placeholder:text-sm placeholder:text-slate-600 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500"
            />
          </div>
          <div class="mb-8 w-full px-4">
            <label for="password" class="text-base font-semibold">Password</label>
            <input
              type="password"
              id="password"
              placeholder="Masukan Password"
              class="peer w-full bg-transparent border-b-2 border-sky-600 p-3 text-dark placeholder:text-sm placeholder:text-slate-600 invalid:text-red-700 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 "
            />
          </div>

          <div class="text-center w-full mb-2">
            <button class="rounded-full bg-sky-500 mx-auto py-2 px-8 text-base font-semibold text-white transition duration-300 hover:opacity-80 hover:shadow-lg">login</button>
          </div>
          <p class="text-base block text-center">not registered? <a href="/register" class="text-base text-sky-600">Register Now!</a></p>
        </div>
      </form>
    </div>
@endsection
