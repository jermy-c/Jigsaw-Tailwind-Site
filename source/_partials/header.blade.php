<header class="text-center bg-gradient-to-tr from-green-700 to-green-300 lg:py-20 lg:px-24 md:py-12 md:px-16 py-8 px-4">
    <h1 class="mt-0 mb-1 lg:text-6xl md:text-4xl text-3xl text-white font-bold">{{ $page->title }}</h1>
    <h2 class="mb-8 font-normal opacity-70 lg:text-xl md:text-lg text-base text-white">{{ $page->description }}</h2>
    <a href="{{ $page->repository }}" class="btn lg:inline-block md:inline-block mb-4 lg:py-3 lg:px-4 md:py-2 md:px-3 block lg:auto md:w-auto w-full p-3 text-sm mt-4 ml-0">View on GitHub</a>
    <button class="btn lg:inline-block md:inline-block mb-4 lg:py-3 lg:px-4 md:py-2 md:px-3 block lg:auto md:w-auto w-full p-3 text-sm mt-4 lg:ml-4 md:ml-4 ml-0" id="download">Download</button>
</header>