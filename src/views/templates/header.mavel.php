<header
    class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] dark:border-b-[#2a3441] bg-white dark:bg-[#101922] px-6 py-3 lg:px-40">
    <div class="flex items-center gap-4">
        <div class="bg-primary/10 p-2 rounded-lg text-primary">
            <span class="material-symbols-outlined text-3xl">local_library</span>
        </div>
        <span class="text-xl font-bold tracking-tight hidden sm:block">LibPortal</span>
    </div>
    <!-- Desktop Navigation Links -->
    <div class="hidden md:flex items-center gap-8">
        <a class="text-primary font-semibold text-sm" href="@route('home')">Home</a>
        <a class="text-text-main dark:text-gray-300 hover:text-primary font-medium text-sm transition-colors"
            href="@route('books')">Browse Books</a>
        @auth
            @if (auth()->user()->role === 'reader')
                <a class="text-text-main dark:text-gray-300 hover:text-primary font-medium text-sm transition-colors"
                    href="@route('myBorrows', ['user' => auth()->user()->id])">My Borrows</a>
            @endif
        @endauth
    </div>
    <div class="hidden md:flex flex-1 max-w-[400px] mx-8">
        <div class="relative w-full">
            <span
                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#617589]">search</span>
            <input
                class="w-full h-10 rounded-lg bg-[#f0f2f4] dark:bg-[#22303e] border-none pl-10 pr-4 text-sm text-[#111418] dark:text-white placeholder-[#617589] focus:ring-2 focus:ring-primary outline-none"
                placeholder="Search books, authors..." type="text" />
        </div>
    </div>
    <div class="flex items-center gap-2">
        @guest
            <a href="@route('login')">
                <button
                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary/10 dark:bg-primary/20 text-primary hover:bg-primary/20 dark:hover:bg-primary/30 transition-colors text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Login</span>
                </button>
            </a>
            <a href="@route('register')">
                <button
                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white hover:bg-blue-600 transition-colors text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Sign Up</span>
                </button>
            </a>
        @endguest

        @auth
            @if (auth()->user()->role === 'admin')
                <div class="mx-5">
                    <a class="text-primary font-semibold text-sm" href="@route('admin.dashboard')">dashboard</a>
                </div>
            @else 
                <div class="mx-5">
                    <a class="text-primary font-semibold text-sm" href="@route('profile', ['user' => auth()->user()->id])">profile</a>
                </div>
            @endif
            <form action="@route('logout')" method="post">
                <button type="submit"
                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-red-300 dark:bg-primary/20 text-red-600 hover:bg-primary/20 dark:hover:bg-primary/30 transition-colors text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Logout</span>
                </button>
            </form>
        @endauth
    </div>
</header>