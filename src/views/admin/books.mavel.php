@layout('templates.layout')
<div class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white overflow-x-hidden">
    <div class="flex h-screen w-full overflow-hidden">
        <!-- Header -->
        @view('templates.admin-sidebar')
        <!-- Main Content -->
        <div class="flex-1 flex flex-col h-full overflow-hidden bg-background-light dark:bg-background-dark relative">
            <!-- Content Scroll Area -->
            <div class="flex-1 overflow-y-auto px-4 py-6 md:px-8 lg:px-12">
                <div class="max-w-[1200px] mx-auto flex flex-col gap-6">
                    <!-- Breadcrumbs -->
                    <div class="flex flex-wrap gap-2 items-center">
                        <a class="text-[#617589] dark:text-gray-400 text-sm font-medium leading-normal hover:text-primary transition-colors"
                            href="@route('admin.dashboard')">Dashboard</a>
                        <span
                            class="material-symbols-outlined text-[#617589] dark:text-gray-400 text-base">chevron_right</span>
                        <span class="text-[#111418] dark:text-white text-sm font-medium leading-normal">Book Inventory</span>
                    </div>
                    <!-- Page Heading & Actions -->
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h1
                                class="text-3xl font-black leading-tight tracking-[-0.033em] text-slate-900 dark:text-white">
                                Book Inventory</h1>
                            <p class="text-slate-500 dark:text-slate-400 mt-1 text-sm font-medium">Manage your library's
                                catalog, track availability, and update records.</p>
                        </div>
                        <a href="@route('admin.addBook')"
                            class="flex items-center justify-center gap-2 rounded-lg bg-primary px-5 py-3 text-white shadow-lg shadow-primary/30 hover:bg-blue-600 transition-colors">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            <span class="text-sm font-bold tracking-[0.015em]">Add New Book</span>
                        </a>
                    </div>
                    <!-- Filters & Search -->
                    <div
                        class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-[#1A2633] p-4 shadow-sm">
                        <div class="flex flex-col md:flex-row gap-4">
                            <label class="relative flex flex-1 flex-col">
                                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                                    <span class="material-symbols-outlined">search</span>
                                </div>
                                <input
                                    class="form-input h-12 w-full rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 pl-11 pr-4 text-base text-slate-900 dark:text-white placeholder:text-slate-400 focus:border-primary focus:ring-0"
                                    placeholder="Search by title, author, or ISBN..." />
                            </label>
                            <label class="relative flex min-w-[200px] flex-col">
                                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                                    <span class="material-symbols-outlined">filter_list</span>
                                </div>
                                <select
                                    class="form-select h-12 w-full rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 pl-11 pr-10 text-base text-slate-900 dark:text-white focus:border-primary focus:ring-0">
                                    <option disabled="" selected="" value="">Filter by Status</option>
                                    <option value="all">All Books</option>
                                    <option value="available">Available</option>
                                    <option value="borrowed">Borrowed</option>
                                    <option value="maintenance">Maintenance</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <!-- Table -->
                    <div
                        class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-[#1A2633] shadow-sm">
                        <div class="overflow-x-auto custom-scrollbar">
                            <table class="w-full min-w-[800px] table-auto text-left">
                                <thead class="bg-slate-50 dark:bg-slate-900/50">
                                    <tr>
                                        <th
                                            class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 w-20">
                                            Cover</th>
                                        <th
                                            class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                            Title</th>
                                        <th
                                            class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                                            Author</th>
                                        <th
                                            class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 w-32">
                                            Year</th>
                                        <th
                                            class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 w-40">
                                            Status</th>
                                        <th
                                            class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 text-right w-32">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    @if (count($books) > 0)
                                        @foreach ($books as $book)
                                            <!-- Row 1 -->
                                            <tr class="group hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                                <td class="px-6 py-4">
                                                    <div class="h-12 w-9 rounded-sm bg-slate-200 bg-cover bg-center shadow-sm"
                                                        data-alt="Book cover for {{ $book->title }}"
                                                        style='background-image: url("{{ $book->image_url }}");'>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <p class="text-sm font-bold text-slate-900 dark:text-white">{{ $book->title }}</p>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <p class="text-sm font-medium text-slate-600 dark:text-slate-300">{{ $book->author }}</p>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <p class="text-sm font-medium text-slate-600 dark:text-slate-300">{{ $book->year }}</p>
                                                </td>
                                                <td class="px-6 py-4">
                                                    @if ($book->status == 'available')
                                                        <span
                                                            class="inline-flex items-center rounded-full bg-emerald-100 dark:bg-emerald-900/30 px-2.5 py-0.5 text-xs font-bold text-emerald-700 dark:text-emerald-400">
                                                            Available
                                                        </span>
                                                    @elseif ($book->status == 'borrowed')
                                                        <span
                                                            class="inline-flex items-center rounded-full bg-amber-100 dark:bg-amber-900/30 px-2.5 py-0.5 text-xs font-bold text-amber-700 dark:text-amber-400">
                                                            Borrowed
                                                        </span>
                                                    @else
                                                        <span
                                                            class="inline-flex items-center rounded-full bg-red-100 dark:bg-red-900/30 px-2.5 py-0.5 text-xs font-bold text-red-700 dark:text-red-400">
                                                            Maintenance
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <div
                                                        class="flex items-center justify-end gap-2">
                                                        <a href="@route('admin.updateBook', ['book' => $book->id])"
                                                            class="flex size-8 items-center justify-center rounded-lg text-slate-400 hover:bg-primary/10 hover:text-primary transition-colors">
                                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                                        </a>
                                                        <form action="@route('admin.book.destroy', ['book' => $book->id])" method="post" class="flex size-8 items-center justify-center">
                                                            <button
                                                                class="flex size-8 items-center justify-center rounded-lg text-slate-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-400 transition-colors">
                                                                <span class="material-symbols-outlined text-[18px]">delete</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="px-6 py-4" colspan="6">
                                                <p class="text-sm font-medium text-slate-600 dark:text-slate-300 text-center">No books
                                                    found.</p>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="flex flex-col items-center justify-between gap-4 py-4 sm:flex-row">
                        <p class="text-sm text-slate-500">Showing <span
                                class="font-bold text-slate-900 dark:text-white">1-5</span> of <span
                                class="font-bold text-slate-900 dark:text-white">48</span> books</p>
                        <div
                            class="flex items-center rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-[#1A2633] p-1 shadow-sm">
                            <button
                                class="flex size-9 items-center justify-center rounded-md text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700 disabled:opacity-50">
                                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                            </button>
                            <button
                                class="flex size-9 items-center justify-center rounded-md bg-primary text-sm font-bold text-white shadow-sm">1</button>
                            <button
                                class="flex size-9 items-center justify-center rounded-md text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700">2</button>
                            <button
                                class="flex size-9 items-center justify-center rounded-md text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700">3</button>
                            <span class="flex size-9 items-center justify-center text-sm text-slate-400">...</span>
                            <button
                                class="flex size-9 items-center justify-center rounded-md text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700">12</button>
                            <button
                                class="flex size-9 items-center justify-center rounded-md text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700">
                                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals (Hidden by default, used for demonstration of structure) -->
    <!-- Delete Confirmation Modal -->
    <div class="hidden fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 backdrop-blur-sm p-4">
        <div class="w-full max-w-md overflow-hidden rounded-xl bg-white dark:bg-[#1A2633] shadow-2xl">
            <div class="p-6">
                <div
                    class="mb-4 flex size-12 items-center justify-center rounded-full bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400">
                    <span class="material-symbols-outlined">warning</span>
                </div>
                <h3 class="mb-2 text-xl font-bold text-slate-900 dark:text-white">Delete Book</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400">Are you sure you want to delete "The Great
                    Gatsby"? This action cannot be undone.</p>
                <div class="mt-8 flex gap-3">
                    <button
                        class="flex-1 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-transparent px-4 py-2.5 text-sm font-bold text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800">Cancel</button>
                    <button
                        class="flex-1 rounded-lg bg-red-600 px-4 py-2.5 text-sm font-bold text-white hover:bg-red-700">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endlayout