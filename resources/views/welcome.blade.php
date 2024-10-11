<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 w-[100vw]">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 h-full w-full flex justify-center flex-col items-center">
                <header class="grid grid-cols-1 items-center place-items-end w-full h-[6rem] fixed top-0 left-0 z-50">
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-center w-[30%]">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>
         

                    <main class="w-full h-full flex justify-center items-center flex-col">
                        <section class="w-full h-[100vh] flex relative">
                            <div class="absolute bottom-[20px] text-white left-[60px] bg-gray-700 grid grid-cols-2 gap-6">
                                <div class="w-full h-full px-6 py-6">Location</div>
                                <div class="bg-[#fac656] w-full h-full  px-6 py-6">Inquire</div>
                            </div>
                        </section>
                        <section class="w-full h-[100vh] flex relative"></section>
                        <section></section>
                    </main>

                    <footer class="py-8 text-center text-sm text-black dark:text-white/70">
                        This here is footer contact
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
