@layout('templates.layout')
<div
    class="font-display bg-background-light dark:bg-background-dark min-h-screen flex flex-col text-[#111418] dark:text-white overflow-x-hidden relative">
    <main class="flex-1 w-full max-w-[1280px] mx-auto px-4 lg:px-10 py-8">
        <nav
            class="flex items-center gap-2 text-sm text-[#617589] dark:text-gray-400 mb-8 overflow-x-auto whitespace-nowrap">
            <a class="hover:text-primary hover:underline transition-colors" href="#">Home</a>
            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            <a class="hover:text-primary hover:underline transition-colors" href="#">Catalog</a>
            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            <a class="hover:text-primary hover:underline transition-colors" href="#">Fiction</a>
            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            <span class="text-[#111418] dark:text-white font-medium truncate">The Great Gatsby</span>
        </nav>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-16 items-start">
            <div class="md:col-span-4 lg:col-span-4 flex flex-col gap-6 sticky top-24">
                <div class="w-full relative group">
                    <div
                        class="aspect-[2/3] w-full rounded-xl shadow-xl overflow-hidden bg-gray-200 dark:bg-gray-800 relative z-10">
                        <div class="w-full h-full bg-center bg-cover bg-no-repeat transition-transform duration-500 group-hover:scale-105"
                            data-alt="Book cover of The Great Gatsby featuring minimal art deco design in dark blue and gold"
                            style='background-image: url("{{ $book->image_url }}");'>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-black/20 to-transparent pointer-events-none">
                        </div>
                    </div>
                    <div
                        class="absolute top-2 -right-2 w-full h-full bg-white dark:bg-gray-700 rounded-xl shadow-sm border border-gray-100 dark:border-gray-600 -z-10 rotate-1">
                    </div>
                    <div
                        class="absolute top-3 -right-4 w-full h-full bg-white dark:bg-gray-700 rounded-xl shadow-sm border border-gray-100 dark:border-gray-600 -z-20 rotate-2">
                    </div>
                </div>
            </div>
            <div class="md:col-span-8 lg:col-span-8 flex flex-col">
                <div class="border-b border-[#f0f2f4] dark:border-gray-800 pb-6 mb-6">
                    <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                        @if ($book->status == 'available')
                            <div
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-800/50">
                                <span class="material-symbols-outlined text-[18px] icon-filled">check_circle</span>
                                <span class="text-xs font-bold uppercase tracking-wide">Available</span>
                            </div>
                        @else 
                            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400 border border-red-200 dark:border-red-800/50">
                                <span class="material-symbols-outlined text-[18px] icon-filled">close</span>
                                <span class="text-xs font-bold uppercase tracking-wide">Borrowed</span>
                            </div>
                        @endif
                    </div>
                    <h1
                        class="text-4xl md:text-5xl font-extrabold text-[#111418] dark:text-white leading-[1.1] mb-3 tracking-tight">
                        {{ $book->title }}</h1>
                    <div class="flex flex-wrap items-center gap-x-2 gap-y-1 text-lg text-[#617589] dark:text-gray-400">
                        <span>by</span>
                        <a class="text-primary font-semibold hover:underline decoration-2 underline-offset-2"
                            href="#">{{ $book->author }}</a>
                        <span class="text-gray-300 dark:text-gray-600">•</span>
                        <span>Published in {{ $book->year }}</span>
                    </div>
                </div>
                <div
                    class="flex flex-col sm:flex-row items-start sm:items-center gap-6 mb-10 p-5 bg-white dark:bg-[#1a2632] rounded-xl border border-[#f0f2f4] dark:border-gray-800 shadow-sm">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Current Availability</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-2xl font-bold text-[#111418] dark:text-white">3 Copies</span>
                            <span class="text-sm text-gray-500">on shelf</span>
                        </div>
                        <p class="text-xs text-gray-400 mt-1">Location: Floor 2, Shelf B-12</p>
                    </div>
                    @auth
                        @if (auth()->user()->role == 'reader' && $book->status == 'available')
                            <form action="@route('book.borrow', ['book' => $book->id])" method="POST">
                                <button
                                    class="w-full sm:w-auto px-8 py-3.5 bg-primary hover:bg-blue-600 text-white rounded-lg font-bold shadow-lg shadow-blue-500/20 active:scale-95 transition-all flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined">menu_book</span>
                                    Borrow Book
                                </button>
                            </form>
                        @endif
                    @endauth
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-10">
                    <div class="flex flex-col p-4 rounded-lg bg-[#f8f9fa] dark:bg-gray-800/50">
                        <span class="material-symbols-outlined text-primary mb-2">fingerprint</span>
                        <span
                            class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">ISBN</span>
                        <span class="text-sm font-semibold text-[#111418] dark:text-gray-200">978-0743273565</span>
                    </div>
                    <div class="flex flex-col p-4 rounded-lg bg-[#f8f9fa] dark:bg-gray-800/50">
                        <span class="material-symbols-outlined text-primary mb-2">auto_stories</span>
                        <span
                            class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Pages</span>
                        <span class="text-sm font-semibold text-[#111418] dark:text-gray-200">180 Pages</span>
                    </div>
                    <div class="flex flex-col p-4 rounded-lg bg-[#f8f9fa] dark:bg-gray-800/50">
                        <span class="material-symbols-outlined text-primary mb-2">category</span>
                        <span
                            class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Genre</span>
                        <span class="text-sm font-semibold text-[#111418] dark:text-gray-200">Tragedy, Fiction</span>
                    </div>
                    <div class="flex flex-col p-4 rounded-lg bg-[#f8f9fa] dark:bg-gray-800/50">
                        <span class="material-symbols-outlined text-primary mb-2">translate</span>
                        <span
                            class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Language</span>
                        <span class="text-sm font-semibold text-[#111418] dark:text-gray-200">English</span>
                    </div>
                </div>
                <div class="mb-10">
                    <h3 class="text-xl font-bold text-[#111418] dark:text-white mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">description</span>
                        Description
                    </h3>
                    <div
                        class="prose dark:prose-invert max-w-none text-base leading-relaxed text-[#4e5d6d] dark:text-gray-300">
                        <p class="mb-4">
                            {{ $book->description }}
                        </p>
                    </div>
                </div>
                <div class="border-t border-[#f0f2f4] dark:border-gray-800 pt-8">
                    <h3 class="text-lg font-bold text-[#111418] dark:text-white mb-4">Additional Information</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-4">
                        <div class="flex justify-between py-2 border-b border-gray-100 dark:border-gray-800/50">
                            <span class="text-gray-500 dark:text-gray-400">Publisher</span>
                            <span class="font-medium">Scribner</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100 dark:border-gray-800/50">
                            <span class="text-gray-500 dark:text-gray-400">Publication Date</span>
                            <span class="font-medium">April 10, 1925</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100 dark:border-gray-800/50">
                            <span class="text-gray-500 dark:text-gray-400">Format</span>
                            <span class="font-medium">Hardcover</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100 dark:border-gray-800/50">
                            <span class="text-gray-500 dark:text-gray-400">Dimensions</span>
                            <span class="font-medium">5.5 x 0.7 x 8.4 in</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endlayout