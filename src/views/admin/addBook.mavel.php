@layout('templates.layout')
<div class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white overflow-hidden h-screen flex">
    <!-- Sidebar Navigation -->
    @view('templates.admin-sidebar')
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden bg-background-light dark:bg-background-dark">
        <!-- Top Bar (Mobile menu trigger could go here) -->
        <header
            class="h-16 flex items-center justify-between px-8 bg-surface-light dark:bg-surface-dark border-b border-slate-200 dark:border-slate-800 shrink-0 lg:hidden">
            <div class="font-bold text-lg flex items-center gap-2">
                <span class="material-symbols-outlined filled text-primary">local_library</span>
                LibManager
            </div>
            <button class="text-slate-500"><span class="material-symbols-outlined">menu</span></button>
        </header>
        <!-- Scrollable Content -->
        <div class="flex-1 overflow-y-auto p-4 md:p-8 lg:p-12">
            <div class="max-w-4xl mx-auto w-full">
                <!-- Breadcrumbs -->
                <nav class="flex mb-6 text-sm font-medium text-slate-500 dark:text-slate-400">
                    <ol class="flex items-center gap-2">
                        <li><a class="hover:text-primary transition-colors" href="@route('admin.dashboard')">Dashboard</a></li>
                        <li><span class="text-slate-300 dark:text-slate-600">/</span></li>
                        <li><a class="hover:text-primary transition-colors" href="@route('admin.books')">Books</a></li>
                        <li><span class="text-slate-300 dark:text-slate-600">/</span></li>
                        <li class="text-primary font-semibold">Add New</li>
                    </ol>
                </nav>
                <!-- Page Header -->
                <div class="mb-8">
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight text-[#111418] dark:text-white mb-2">Add
                        New Book</h1>
                    <p class="text-slate-500 dark:text-slate-400 text-lg">Enter the details below to add a new book to
                        the library catalog.</p>
                </div>
                <!-- Main Form Card -->
                <form action="@route('admin.book.store')" method="POST"
                    class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="p-6 md:p-8">
                        <div class="flex flex-col gap-6">
                            <!-- Row 1: Title -->
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-[#111418] dark:text-slate-200"
                                    for="book-title">
                                    Book Title <span class="text-red-500">*</span>
                                </label>
                                <div class="relative group">
                                    <input
                                        class="form-input block w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-[#111418] dark:text-white placeholder:text-slate-400 h-12 px-4 focus:border-primary focus:ring-primary dark:focus:border-primary transition-all shadow-sm"
                                        id="book-title" name="title" placeholder="e.g., The Great Gatsby" required="" type="text" />
                                    <!-- Visual helper for required field -->
                                </div>
                                @error('title') 
                                    <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                                @enderror
                            </div>
                            <!-- Row 2: Author & Year -->
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex-1 flex flex-col gap-2">
                                    <label class="text-sm font-semibold text-[#111418] dark:text-slate-200"
                                        for="author-name">
                                        Author Name <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        class="form-input block w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-[#111418] dark:text-white placeholder:text-slate-400 h-12 px-4 focus:border-primary focus:ring-primary dark:focus:border-primary transition-all shadow-sm"
                                        id="author-name" name="author" placeholder="e.g., F. Scott Fitzgerald" required=""
                                        type="text" />
                                    @error('author') 
                                        <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                                    @enderror
                                </div>
                                <div class="flex-1 flex flex-col gap-2">
                                    <label class="text-sm font-semibold text-[#111418] dark:text-slate-200"
                                        for="pub-year">
                                        Publication Year <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        class="form-input block w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-[#111418] dark:text-white placeholder:text-slate-400 h-12 px-4 focus:border-primary focus:ring-primary dark:focus:border-primary transition-all shadow-sm"
                                        id="pub-year" name="year" max="2099" min="1000" placeholder="YYYY" required=""
                                        type="number" />
                                    @error('year') 
                                        <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                                    @enderror
                                </div>
                            </div>
                            <!-- Row 3: Image URL & Status -->
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex-1 flex flex-col gap-2">
                                    <label class="text-sm font-semibold text-[#111418] dark:text-slate-200" for="image_url">
                                        Image URL
                                    </label>
                                    <input
                                        class="form-input block w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-[#111418] dark:text-white placeholder:text-slate-400 h-12 px-4 focus:border-primary focus:ring-primary dark:focus:border-primary transition-all shadow-sm"
                                        id="image_url" name="image_url" type="text" required />
                                    @error('image_url') 
                                        <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                                    @enderror
                                </div>
                                <div class="flex-1 flex flex-col gap-2">
                                    <label class="text-sm font-semibold text-[#111418] dark:text-slate-200">
                                        Initial Status
                                    </label>
                                    <div class="grid grid-cols-2 gap-3 h-12">
                                        <label class="cursor-pointer relative">
                                            <input checked class="peer sr-only" name="status" type="radio"
                                                value="available" />
                                            <div
                                                class="h-full w-full rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 peer-checked:bg-emerald-50 peer-checked:border-emerald-500 dark:peer-checked:bg-emerald-900/20 dark:peer-checked:border-emerald-500 flex items-center justify-center gap-2 transition-all">
                                                <span
                                                    class="material-symbols-outlined text-slate-400 peer-checked:text-emerald-600 dark:peer-checked:text-emerald-400 text-[20px]">check_circle</span>
                                                <span
                                                    class="text-sm font-medium text-slate-600 dark:text-slate-300 peer-checked:text-emerald-700 dark:peer-checked:text-emerald-400">Available</span>
                                            </div>
                                        </label>
                                        <label class="cursor-pointer relative">
                                            <input class="peer sr-only" name="status" type="radio" value="borrowed" />
                                            <div
                                                class="h-full w-full rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 peer-checked:bg-amber-50 peer-checked:border-amber-500 dark:peer-checked:bg-amber-900/20 dark:peer-checked:border-amber-500 flex items-center justify-center gap-2 transition-all">
                                                <span
                                                    class="material-symbols-outlined text-slate-400 peer-checked:text-amber-600 dark:peer-checked:text-amber-400 text-[20px]">pending</span>
                                                <span
                                                    class="text-sm font-medium text-slate-600 dark:text-slate-300 peer-checked:text-amber-700 dark:peer-checked:text-amber-400">Borrowed</span>
                                            </div>
                                        </label>
                                        @error('status') 
                                            <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Row 4: Description (Optional) -->
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-[#111418] dark:text-slate-200"
                                    for="description">
                                    Description / Notes
                                </label>
                                <textarea
                                    class="form-textarea block w-full rounded-lg border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-[#111418] dark:text-white placeholder:text-slate-400 p-4 focus:border-primary focus:ring-primary dark:focus:border-primary transition-all shadow-sm resize-none"
                                    id="description" name="description"
                                    placeholder="Enter brief description about the book condition or edition details..."
                                    rows="3" required></textarea>
                                @error('description') 
                                    <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Footer / Actions -->
                    <div
                        class="px-6 md:px-8 py-5 bg-slate-50 dark:bg-slate-900/50 border-t border-slate-200 dark:border-slate-800 flex flex-col-reverse md:flex-row items-center justify-end gap-3">
                        <button
                            class="w-full md:w-auto px-6 h-12 rounded-lg border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 font-semibold hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors"
                            type="reset">
                            Cancel
                        </button>
                        <button
                            class="w-full md:w-auto px-8 h-12 rounded-lg bg-primary hover:bg-blue-600 text-white font-semibold shadow-lg shadow-blue-500/20 transition-all flex items-center justify-center gap-2"
                            type="submit">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            Add Book
                        </button>
                    </div>
                </form>
                <!-- Helper / Info Section -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div
                        class="p-4 rounded-lg bg-blue-50 dark:bg-blue-900/10 border border-blue-100 dark:border-blue-900/20 flex gap-3 items-start">
                        <span class="material-symbols-outlined text-blue-600 dark:text-blue-400 mt-0.5">info</span>
                        <div>
                            <h4 class="text-sm font-bold text-blue-900 dark:text-blue-300">Auto-generated ID</h4>
                            <p class="text-sm text-blue-700 dark:text-blue-400/80 mt-1">The system will automatically
                                assign a unique Book ID upon creation.</p>
                        </div>
                    </div>
                    <div
                        class="p-4 rounded-lg bg-emerald-50 dark:bg-emerald-900/10 border border-emerald-100 dark:border-emerald-900/20 flex gap-3 items-start">
                        <span
                            class="material-symbols-outlined text-emerald-600 dark:text-emerald-400 mt-0.5">notifications_active</span>
                        <div>
                            <h4 class="text-sm font-bold text-emerald-900 dark:text-emerald-300">Catalog Update</h4>
                            <p class="text-sm text-emerald-700 dark:text-emerald-400/80 mt-1">This book will be
                                immediately searchable in the reader's catalog once added.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endlayout