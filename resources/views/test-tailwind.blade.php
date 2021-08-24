<!DOCTYPE html>
<title>sh8</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="/app.css">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">



{{--<body class="max-w-4xl mx-auto">--}}
{{--<body  class="mx-auto ">--}}
{{--<body>--}}
<body style="font-family: ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;" >

<main class="h-full flex items-center px-6 lg:px-32 bg-purple-900 text-white relative">
    <header class="w-full absolute left-0 top-0 p-6 lg:p-32">
        <div class="flex justify-between">
            <div>
                <h1 class="text-3xl font-bold">{Logo}</h1>
                <span>Design is everything...</span>
            </div>

            <div>
                <ul class="flex">
                    <li class="ml-24">
                        <a href="">
                            <div class="flex items-center justify-end">
                                <div class="w-10 border-b border-solid border-white"></div>
                                <h1 class="ml-3 text-3xl font-bold">1</h1>
                            </div>
                            <div class="text-right">TailWind CSS</div>
                        </a>
                    </li>
                    <li class="ml-24">
                        <a href="">
                            <div class="flex items-center justify-end">
                                <div class="w-10 border-b border-solid border-white"></div>
                                <h1 class="ml-3 text-3xl font-bold">2</h1>
                            </div>
                            <div class="text-right">Components</div>
                        </a>
                    </li>
                    <li class="ml-24">
                        <a href="">
                            <div class="flex items-center justify-end">
                                <div class="w-10 border-b border-solid border-white"></div>
                                <h1 class="ml-3 text-3xl font-bold">3</h1>
                            </div>
                            <div class="text-right">CSS Modules</div>
                        </a>
                    </li>

                    <li class="ml-24">
                        <a href="">
                            <div class="flex items-center justify-end">
                                <div class="w-10 border-b border-solid border-white"></div>
                                <h1 class="ml-3 text-3xl font-bold">4</h1>
                            </div>
                            <div class="text-right">Build & Deploy</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section class="w-full md:w-9/12 xl:w-8/12">
        <span class="font-bold uppercase tracking-widest">Atomic</span>
        <h1 class="text-3xl lg:text-5xl font-bold text-pink-500">
            Tail<br/>Design
        </h1>
        <p class="font-bold mb-1">The Design is in the de{Tail}s...</p>
        <p>Lorem ipsum dolor sit amet...</p>
    </section>
    <footer class="absolute right-0 bottom-0 p-6 lg:p-32">
        <p class="font-bold mb-1">Yours Truly</p>
        <p>Chigozie Orunta (Full Stack Engineer)</p>
    </footer>
</main>

</body>
