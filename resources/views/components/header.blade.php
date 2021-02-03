<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 @isset($actions) flex items-center justify-between @endisset">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>

        @isset($actions)
            <span class="shadow-sm rounded-md">
                {{ $actions }}
            </span>
        @endisset

    </div>
</header>
