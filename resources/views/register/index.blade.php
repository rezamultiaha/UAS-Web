@extends('layouts.main')

@section('main')
    <div class="h-screen w-screen bg-cover px-20 py-25 sm:px-25 sm:py-30 lg:py-40" style="background-image: url(img/bg.jpg)">
      <form action="/register" class="" method="POST">
        @csrf
        <div class="w-full shadow-sm shadow-white backdrop-blur-sm rounded-md py-4 m-auto sm:w-2/4 md:w-1/4 lg:w-1/3 border">
          <h1 class="text-2xl font-semibold text-center mb-6">Registration</h1>
          <div class="w-full px-4">
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Name"
              class="w-full bg-transparent border-b p-3 border-sky-600 text-dark placeholder:text-base placeholder:text-slate-900 focus:border-cyan-400 focus:outline-none focus:ring-1 focus:ring-cyan-400
              @error('name')
                  text-red-500 focus:border-red-500 border-red-500 focus:ring-1 focus:ring-red-500
              @enderror" required value="{{ old('name') }}"
            />
            @error('name')
                <p class="text-red-500 text-sm">
                {{ $message }}
                </p>
            @enderror
          </div>
          <div class=" w-full px-4">
            <input
              type="text"
              name="username"
              id="username"
              placeholder="Username"
              class="w-full bg-transparent border-b p-3 border-sky-600 text-dark placeholder:text-base placeholder:text-slate-900 focus:border-cyan-400 focus:outline-none focus:ring-1 focus:ring-cyan-400
              @error('username')
                  text-red-500 focus:border-red-500 border-red-500 focus:ring-1 focus:ring-red-500
              @enderror" required value="{{ old('username') }}"
            />
            @error('username')
                <p class="text-red-500 text-sm">
                {{ $message }}
                </p>
            @enderror
          </div>
          <div class=" w-full px-4">
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Email"
              class="w-full bg-transparent border-b p-3 border-sky-600 text-dark placeholder:text-base placeholder:text-slate-900 focus:border-cyan-400 focus:outline-none focus:ring-1 focus:ring-cyan-400
              @error('email')
                  text-red-500 focus:border-red-500 border-red-500 focus:ring-1 focus:ring-red-500
              @enderror" required value="{{ old('email') }}"
            />
            @error('email')
                <p class="text-red-500 text-sm">
                {{ $message }}
                </p>
            @enderror
          </div>
          <div class="mb-8 w-full px-4">
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
              class="peer w-full bg-transparent border-b border-sky-600 p-3 text-dark placeholder:text-base placeholder:text-slate-900 invalid:text-red-700 focus:border-cyan-400 focus:outline-none focus:ring-1 focus:ring-cyan-400
              @error('password')
                  text-red-500 focus:border-red-500 border-red-500 focus:ring-1 focus:ring-red-500
              @enderror" required value="{{ old('password') }}"
            />
            @error('password')
                <p class="text-red-500 text-sm">
                {{ $message }}
                </p>
            @enderror
          </div>

          <div class="text-center w-full mb-2">
            <button class="rounded-full bg-sky-500 mx-auto py-2 px-8 text-base font-semibold text-white transition duration-300 hover:opacity-80 hover:shadow-lg">Register</button>
          </div>
          <p class="text-base block text-center">Already registered?<a href="/login" class="text-base text-sky-600">Login</a></p>
        </div>
      </form>
    </div>
@endsection
