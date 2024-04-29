<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 w-full h-full overflow-hidden">
  
      <div class=" max-w-[500px] mx-auto mt-[200px] text-center">
        
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Boost your productivity.<br>Start using our app today.</h2>
        <p class="mt-6 text-lg leading-8 text-white">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start max-w-[300px] mx-auto">
          <a href="{{route('login')}}" class="rounded-md bg-white w-[250px] px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-800 hover:text-white duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Login</a>
          <a href="{{route('register')}}" class="rounded-md bg-white px-3.5 w-[250px] py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-800 focus-visible:outline duration-300focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white hover:text-white">Register</a>
        </div>
      </div>

</body>
</html>