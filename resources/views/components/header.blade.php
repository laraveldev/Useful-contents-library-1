<header class="bg-[#0f0f0fcc] backdrop-blur-[48px] fixed top-0 w-full z-10 text-white shadow">
    <div class="flex items-center justify-between px-4 h-16">
        <div class="flex items-center space-x-4">
            <a href="/" class="flex items-center space-x-1 text-white font-bold text-2xl tracking-tight">
                Content Hub
            </a>

        </div>
        <div class="hidden md:flex flex-1 mx-4 max-w-2xl">
            <div class="flex w-full bg-[#0f0f0f] border border-[#303030] rounded-full overflow-hidden">
                <input type="text" placeholder="Введите запрос"
                    class="flex-1 px-4 py-2 bg-[#0f0f0f] rounded-l-full text-sm text-white placeholder:text-[#aaa] focus:outline-none" />
                <button class="flex items-center justify-center w-14 bg-[#222] hover:bg-[#333]">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 2a8 8 0 105.293 14.293l4.707 4.707-1.414 1.414-4.707-4.707A8 8 0 0010 2z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex items-center space-x-4">
            @guest
            <a href="/login" class="px-4 py-1 bg-red-600 hover:bg-red-700 text-white rounded-full">
                Login
            </a>
            @endguest
            @auth
            <a href="/dashboard" class="px-4 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded-full">
                Dashboard
            </a>
            @endauth
        </div>
    </div>
    <div class="container">
        <div class="flex space-x-3 px-4 py-2 overflow-x-auto scrollbar-hide">
            <a href="{{ url()->current() }}?category=all" class="whitespace-nowrap px-4 py-1 rounded-full text-sm font-medium bg-[#272727] hover:bg-[#ffffff40] hover:text-[#272727] transition
                    {{ request('category') === "all" ? 'bg-white text-black' : 'bg-[#272727] text-white hover:text-black' }}
                    ">
                All
            </a>
            @foreach ($categories as $cat)
                <a href="{{ url()->current() }}?category={{ $cat->name }}"
                    class="whitespace-nowrap px-4 py-1 rounded-full text-sm font-medium bg-[#272727] hover:bg-[#ffffff40] hover:text-[#272727] transition
                    {{ request('category') === $cat->name ? 'bg-white text-black' : 'bg-[#272727] text-white hover:text-black' }}
                    ">
                    {{ $cat->name }}
                </a>
            @endforeach
        </div>
    </div>
</header>
