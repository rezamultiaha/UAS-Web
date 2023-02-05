<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/output.css">
    @vite('resources/css/app.css')
    <title>Login</title>
  </head>
  <body>
    <div class="h-screen w-screen bg-cover px-20 py-25 sm:px-25 sm:py-30 lg:py-40" style="background-image: url(img/bg.jpg)">
      <form action="" class="">
        <div class="w-full shadow-sm shadow-white backdrop-blur-sm rounded-md py-4 m-auto sm:w-2/4 lg:w-1/4 border">
          <h1 class="text-xl font-semibold text-center mb-6">Login</h1>
          <div class="mb-8 w-full px-4">
            <label for="name" class="text-base font-semibold">Username</label>
            <input
              type="name"
              id="name"
              placeholder="Masukan Username"
              class="w-full bg-transparent border-b-2 p-3 border-sky-600 text-dark placeholder:text-sm placeholder:text-slate-600 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"
            />
          </div>
          <div class="mb-8 w-full px-4">
            <label for="email" class="text-base font-semibold text-primary">Password</label>
            <input
              type="email"
              id="email"
              placeholder="Masukan Password"
              class="peer w-full bg-transparent border-b-2 border-sky-600 p-3 text-dark placeholder:text-sm placeholder:text-slate-600 invalid:text-red-700 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary invalid:focus:border-red-700 invalid:focus:ring-red-700"
            />
            <p class="invisible m-1 text-xs text-red-700 peer-invalid:visible">Email yang anda masukan salah</p>
          </div>

          <div class="text-center w-full">
            <button class="rounded-full bg-sky-500 mx-auto py-2 px-8 text-base font-semibold text-white transition duration-300 hover:opacity-80 hover:shadow-lg">login</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
