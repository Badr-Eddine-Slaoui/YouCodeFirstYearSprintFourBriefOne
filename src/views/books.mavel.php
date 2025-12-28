@layout('templates.layout')
<div
    class="bg-background-light dark:bg-background-dark text-text-main dark:text-white transition-colors duration-200 min-h-screen flex flex-col font-display">

    <!-- Main Content Area -->
    <main class="flex-grow w-full max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header & Page Title -->
        <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h1 class="text-3xl font-extrabold text-text-main dark:text-white tracking-tight mb-2">Library Catalog
                </h1>
                <p class="text-text-secondary dark:text-gray-400 max-w-xl">Browse our collection of books and resources.
                    Check availability and manage your reading list.</p>
            </div>
            <!-- View Toggle -->
            <div
                class="flex bg-surface-light dark:bg-surface-dark p-1 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm shrink-0 self-start md:self-auto">
                <button class="p-2 rounded bg-primary/10 text-primary transition-colors hover:bg-primary/20"
                    title="Grid View">
                    <span class="material-symbols-outlined text-[20px]">grid_view</span>
                </button>
                <button
                    class="p-2 rounded text-text-secondary hover:text-primary hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                    title="List View">
                    <span class="material-symbols-outlined text-[20px]">view_list</span>
                </button>
            </div>
        </div>
        <!-- Filters & Search Toolbar -->
        <div
            class="bg-surface-light dark:bg-surface-dark rounded-xl p-4 shadow-sm border border-gray-100 dark:border-gray-800 mb-8">
            <div class="flex flex-col lg:flex-row gap-4">
                <!-- Main Search -->
                <div class="flex-1">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span
                                class="material-symbols-outlined text-text-secondary group-focus-within:text-primary transition-colors">search</span>
                        </div>
                        <input
                            class="block w-full pl-10 pr-3 py-3 border border-gray-200 dark:border-gray-700 rounded-lg leading-5 bg-background-light dark:bg-background-dark placeholder-text-secondary focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm transition-shadow"
                            placeholder="Search by Title, Author, ISBN or Genre..." type="text" />
                    </div>
                </div>
                <!-- Filters -->
                <div class="flex flex-col sm:flex-row gap-3 items-center">
                    <!-- Status Filter -->
                    <div class="flex bg-background-light dark:bg-background-dark p-1 rounded-lg w-full sm:w-auto">
                        <button
                            class="flex-1 sm:flex-none px-4 py-2 rounded-md bg-white dark:bg-surface-dark shadow-sm text-sm font-semibold text-primary transition-all">
                            All Books
                        </button>
                        <button
                            class="flex-1 sm:flex-none px-4 py-2 rounded-md text-text-secondary hover:text-text-main dark:hover:text-white text-sm font-medium transition-colors">
                            Available
                        </button>
                        <button
                            class="flex-1 sm:flex-none px-4 py-2 rounded-md text-text-secondary hover:text-text-main dark:hover:text-white text-sm font-medium transition-colors">
                            Borrowed
                        </button>
                    </div>
                    <!-- Sort Dropdown -->
                    <div class="relative w-full sm:w-48">
                        <select
                            class="block w-full pl-3 pr-10 py-3 text-base border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-lg bg-background-light dark:bg-background-dark text-text-main dark:text-white appearance-none cursor-pointer">
                            <option>Newest Arrivals</option>
                            <option>Title (A-Z)</option>
                            <option>Year (Desc)</option>
                            <option>Most Popular</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-text-secondary">
                            <span class="material-symbols-outlined">expand_more</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Active Filters Tags (Example) -->
            <div class="flex flex-wrap gap-2 mt-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                <span
                    class="text-xs font-semibold text-text-secondary uppercase tracking-wider self-center mr-2">Applied:</span>
                <span
                    class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary/10 text-primary">
                    Year: 2020-2024
                    <button class="ml-1.5 inline-flex items-center justify-center text-primary/60 hover:text-primary">
                        <span class="material-symbols-outlined text-[14px]">close</span>
                    </button>
                </span>
                <button class="text-xs text-text-secondary hover:text-primary underline ml-auto">Clear all
                    filters</button>
            </div>
        </div>
        <!-- Books Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            @foreach ($books as $book)
                <div
                    class="group bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-100 dark:border-gray-800 overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">
                    <div class="aspect-[3/2] overflow-hidden relative">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            data-alt="Cover of the book The Great Gatsby showing art deco patterns"
                            style="background-image: url('{{ $book->image_url }}');">
                        </div>
                        <div class="absolute top-3 right-3">
                            @if ($book->status == "available")
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800 backdrop-blur-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span>
                                    Available
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400 border border-amber-200 dark:border-amber-800 backdrop-blur-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mr-1.5"></span>
                                    Borrowed
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <div class="mb-4">
                            <p class="text-xs text-primary font-bold uppercase tracking-wider mb-1">Classic Fiction</p>
                            <h3
                                class="text-lg font-bold text-text-main dark:text-white leading-tight mb-1 group-hover:text-primary transition-colors">
                                {{ $book->title }}</h3>
                            <p class="text-sm text-text-secondary">by {{ $book->author }} • {{ $book->year }}</p>
                        </div>
                        <div
                            class="mt-auto pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center justify-between gap-3">
                            @auth
                                @if (auth()->user()->role == "reader" && $book->status == "available")
                                    <button
                                        class="flex-1 bg-primary hover:bg-primary-dark text-white text-sm font-semibold py-2 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                                        <span class="material-symbols-outlined text-[18px]">bookmark_add</span>
                                        Borrow
                                    </button>
                                @endif
                            @endauth
                            <a href="@route('book', ['book' => $book->id])"
                                class="p-2 text-text-secondary hover:text-primary hover:bg-primary/5 rounded-lg border border-gray-200 dark:border-gray-700 transition-colors"
                                title="View Details">
                                <span class="material-symbols-outlined text-[20px]">info</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination -->
        <div class="flex items-center justify-between border-t border-gray-200 dark:border-gray-700 pt-6 mt-8">
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-text-secondary">
                        Showing <span class="font-medium text-text-main dark:text-white">1</span> to <span
                            class="font-medium text-text-main dark:text-white">8</span> of <span
                            class="font-medium text-text-main dark:text-white">42</span> results
                    </p>
                </div>
                <div>
                    <nav aria-label="Pagination" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                        <a class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-700 bg-white dark:bg-surface-dark text-sm font-medium text-text-secondary hover:bg-gray-50 dark:hover:bg-gray-800"
                            href="#">
                            <span class="sr-only">Previous</span>
                            <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                        </a>
                        <a aria-current="page"
                            class="z-10 bg-primary/10 border-primary text-primary relative inline-flex items-center px-4 py-2 border text-sm font-bold"
                            href="#">
                            1
                        </a>
                        <a class="bg-white dark:bg-surface-dark border-gray-300 dark:border-gray-700 text-text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 relative inline-flex items-center px-4 py-2 border text-sm font-medium"
                            href="#">
                            2
                        </a>
                        <a class="bg-white dark:bg-surface-dark border-gray-300 dark:border-gray-700 text-text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium"
                            href="#">
                            3
                        </a>
                        <span
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-700 bg-white dark:bg-surface-dark text-sm font-medium text-text-secondary">
                            ...
                        </span>
                        <a class="bg-white dark:bg-surface-dark border-gray-300 dark:border-gray-700 text-text-secondary hover:bg-gray-50 dark:hover:bg-gray-800 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium"
                            href="#">
                            8
                        </a>
                        <a class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-700 bg-white dark:bg-surface-dark text-sm font-medium text-text-secondary hover:bg-gray-50 dark:hover:bg-gray-800"
                            href="#">
                            <span class="sr-only">Next</span>
                            <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                        </a>
                    </nav>
                </div>
            </div>
            <!-- Mobile Pagination -->
            <div class="flex sm:hidden w-full justify-between gap-2">
                <button
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-700 text-sm font-medium rounded-md text-text-secondary bg-white dark:bg-surface-dark hover:bg-gray-50 dark:hover:bg-gray-800 flex-1 justify-center">
                    Previous
                </button>
                <button
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-700 text-sm font-medium rounded-md text-text-secondary bg-white dark:bg-surface-dark hover:bg-gray-50 dark:hover:bg-gray-800 flex-1 justify-center">
                    Next
                </button>
            </div>
        </div>
    </main>
</div>
@endlayout