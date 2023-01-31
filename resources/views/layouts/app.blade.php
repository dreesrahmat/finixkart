<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @stack('css')
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FBFBFB]">
    <div class="flex justify-between px-6 md:px-20 mt-4 pb-3 bg-white shadow py-2 items-center">
        <a href="/">
            <div class="flex bg-gray-200 shadow w-60 p-2 max-sm:w-12 rounded-md">
                <img src="{{asset('/dd4you/dpanel/images/logo.jpg')}}" alt="" class="w-16 rounded-full drop-shadow-xl">
                <h1 class="text-3xl ml-4 my-auto d-none max-sm:hidden">Ganti<span class="text-red-700 font-bold">Baju</span></h1>
            </div>
        </a>
        <div class="text-xl relative">
            <i class="bi bi-heart"></i>
            <i class="bi bi-person"></i>
            <i class="bi bi-cart"></i>
            <span
                class="absolute -top-1 -right-2.5 bg-amber-500 rounded-full w-4 h-4 text-xs text-white text-center">0</span>
        </div>
    </div>

    <main>@yield('body_content')</main>

    <footer class="px-8 md:px-20 mt-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div>
                <div class="flex bg-gray-200 shadow w-44 p-2 rounded-md">
                    <img src="{{asset('/dd4you/dpanel/images/logo.jpg')}}" alt="" class="w-10 rounded-full">
                    <p class="my-auto ml-3 text-xl">Ganti<span class="text-red-700 font-bold">Baju</span></p>
                </div>

                <ul class="mt-3 text-gray-800">
                    <li><i class="bi bi-geo-alt"></i> NH 28, Railway Colony</li>
                    <li><i class="bi bi-telephone"></i> +91 700791</li>
                    <li><i class="bi bi-envelope-at"></i> dedy@gmail.com</li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-medium text-gray-800">Categories</h2>
                <ul class="mt-1 text-gray-800">
                    <li>Category 1</li>
                    <li>Category 2</li>
                    <li>Category 3</li>
                    <li>Category 4</li>
                    <li>Category 5</li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-medium text-gray-800">Further Info</h2>
                <ul class="mt-1 text-gray-800">
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Contact Us</li>
                    <li>Privacy Policy</li>
                    <li>Terms of Use</li>
                </ul>
            </div>
        </div>
        <p class="text-gray-400 text-center my-3">Copyright &copy; {{date('Y')}} JajanKuy | Design by <a href="#">DD4You.in</a></p>
    </footer>


    <script src="{{asset('/js/jquery-3.6.3.min.js')}}"></script>

    @stack('scripts')
</body>

</html>
