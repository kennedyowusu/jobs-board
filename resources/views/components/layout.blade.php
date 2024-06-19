<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs Board</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-roboto pb-20">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10  max-w-[986px] mx-auto">
            <div>
                <a href="/">
                    Jobs <span
                        class="
                        bg-gradient-to-r from-blue-400 to-green-400
                        bg-clip-text text-transparent font-bold transition-all duration-300
                        ">Board</span>
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create"
                    class="bg-blue-500 px-4 py-2 rounded-md hover:bg-blue-600 transition-all duration-300"
                    >Post Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button
                        class="bg-red-500 px-4 py-2 rounded-md hover:bg-red-600 transition-all duration-300"
                        >Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>

        <main class="mt-5 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
