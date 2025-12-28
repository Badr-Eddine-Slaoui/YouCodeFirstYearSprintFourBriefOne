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
                <nav class="flex items-center gap-2 text-sm text-[#617589] dark:text-[#9ca3af]">
                    <a class="hover:text-primary transition-colors" href="@route('admin.dashboard')">Dashboard</a>
                    <span class="material-symbols-outlined text-base">chevron_right</span>
                    <a class="hover:text-primary transition-colors" href="@route('admin.books')">Books</a>
                    <span class="material-symbols-outlined text-base">chevron_right</span>
                    <span class="font-semibold text-[#111418] dark:text-white">Edit Book</span>
                </nav>
                <!-- Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-extrabold text-[#111418] dark:text-white tracking-tight">
                            Edit Book Details</h1>
                        <p class="mt-2 text-[#617589] dark:text-[#9ca3af] text-base">Update the information below for
                            'The Great Gatsby'. Ensure all fields are correct before saving.</p>
                    </div>
                    <div class="flex gap-3">
                        <button
                            class="h-10 px-4 rounded-lg border border-[#e5e7eb] dark:border-[#2a3441] text-[#111418] dark:text-white font-bold text-sm bg-white dark:bg-[#1a2633] hover:bg-gray-50 dark:hover:bg-[#233040] transition-colors">
                            View Public Page
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <!-- Left Column: Cover Image -->
                    <div class="lg:col-span-1 flex flex-col gap-4">
                        <div
                            class="bg-white dark:bg-[#1a2633] p-4 rounded-xl shadow-sm border border-[#e5e7eb] dark:border-[#2a3441]">
                            <p class="text-[#111418] dark:text-white font-bold mb-4">Book Cover</p>
                            <div class="w-full aspect-[2/3] rounded-lg bg-cover bg-center bg-gray-200 relative group overflow-hidden"
                                data-alt="Classic book cover of The Great Gatsby showing blue eyes on a dark background"
                                style='background-image: url("{{ $book->image_url }}");'>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Edit Form -->
                    <div class="lg:col-span-2">
                        <form action="@route('admin.book.update', ['book' => $book->id])" method="POST"
                            class="bg-white dark:bg-[#1a2633] rounded-xl shadow-sm border border-[#e5e7eb] dark:border-[#2a3441] p-6 md:p-8 flex flex-col gap-6">
                            <!-- Basic Info Section -->
                            <div class="flex flex-col gap-5">
                                <h3
                                    class="text-lg font-bold text-[#111418] dark:text-white border-b border-[#e5e7eb] dark:border-[#2a3441] pb-2">
                                    General Information</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <label class="flex flex-col gap-2">
                                        <span class="text-sm font-bold text-[#111418] dark:text-white">Book Title</span>
                                        <input
                                            class="w-full rounded-lg bg-[#f0f2f4] dark:bg-[#101922] border-transparent focus:border-primary focus:bg-white dark:focus:bg-[#101922] focus:ring-0 text-[#111418] dark:text-white h-12 px-4 font-medium transition-colors"
                                            type="text" name="title" value="{{ $book->title }}" />
                                    </label>
                                    <label class="flex flex-col gap-2">
                                        <span class="text-sm font-bold text-[#111418] dark:text-white">Author</span>
                                        <input
                                            class="w-full rounded-lg bg-[#f0f2f4] dark:bg-[#101922] border-transparent focus:border-primary focus:bg-white dark:focus:bg-[#101922] focus:ring-0 text-[#111418] dark:text-white h-12 px-4 font-medium transition-colors"
                                            type="text" name="author" value="{{ $book->author }}" />
                                    </label>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <label class="flex flex-col gap-2">
                                        <span class="text-sm font-bold text-[#111418] dark:text-white">Image URL</span>
                                        <input
                                            class="w-full rounded-lg bg-[#f0f2f4] dark:bg-[#101922] border-transparent focus:border-primary focus:bg-white dark:focus:bg-[#101922] focus:ring-0 text-[#111418] dark:text-white h-12 px-4 font-medium transition-colors"
                                            type="text" name="image_url" value="{{ $book->image_url }}" />
                                    </label>
                                    <label class="flex flex-col gap-2">
                                        <span class="text-sm font-bold text-[#111418] dark:text-white">Publication
                                            Year</span>
                                        <input
                                            class="w-full rounded-lg bg-[#f0f2f4] dark:bg-[#101922] border-transparent focus:border-primary focus:bg-white dark:focus:bg-[#101922] focus:ring-0 text-[#111418] dark:text-white h-12 px-4 font-medium transition-colors"
                                            type="number" name="year" value="{{ $book->year }}" />
                                    </label>
                                </div>
                            </div>
                            <!-- Status & Details Section -->
                            <div class="flex flex-col gap-5 mt-2">
                                <h3
                                    class="text-lg font-bold text-[#111418] dark:text-white border-b border-[#e5e7eb] dark:border-[#2a3441] pb-2">
                                    Availability &amp; Status</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <label class="flex flex-col gap-2">
                                        <span class="text-sm font-bold text-[#111418] dark:text-white">Genre</span>
                                        <div class="relative">
                                            <select
                                                class="w-full appearance-none rounded-lg bg-[#f0f2f4] dark:bg-[#101922] border-transparent focus:border-primary focus:bg-white dark:focus:bg-[#101922] focus:ring-0 text-[#111418] dark:text-white h-12 px-4 font-medium transition-colors cursor-pointer">
                                                <option>Fiction</option>
                                                <option selected="">Classic Literature</option>
                                                <option>Romance</option>
                                                <option>Historical</option>
                                            </select>
                                            <span
                                                class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-[#617589]">expand_more</span>
                                        </div>
                                    </label>
                                    <label class="flex flex-col gap-2">
                                        <span class="text-sm font-bold text-[#111418] dark:text-white">Current
                                            Status</span>
                                        <div class="relative">
                                            <select name="status"
                                                class="w-full appearance-none rounded-lg bg-[#f0f2f4] dark:bg-[#101922] border-transparent focus:border-primary focus:bg-white dark:focus:bg-[#101922] focus:ring-0 text-[#111418] dark:text-white h-12 px-4 font-medium transition-colors cursor-pointer">
                                                <option @if ($book->status == 'available') selected @endif value="available">Available</option>
                                                <option @if ($book->status == 'borrowed') selected @endif value="borrowed">Borrowed</option>
                                            </select>
                                            <div
                                                class="absolute right-12 top-1/2 -translate-y-1/2 size-2 rounded-full bg-green-500">
                                            </div>
                                            <span
                                                class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-[#617589]">expand_more</span>
                                        </div>
                                        <p class="text-xs text-[#617589] dark:text-[#9ca3af]">Changing status to
                                            'Borrowed' requires assigning a user.</p>
                                    </label>
                                </div>
                                <label class="flex flex-col gap-2">
                                    <span class="text-sm font-bold text-[#111418] dark:text-white">Description</span>
                                    <textarea name="description"
                                        class="w-full rounded-lg bg-[#f0f2f4] dark:bg-[#101922] border-transparent focus:border-primary focus:bg-white dark:focus:bg-[#101922] focus:ring-0 text-[#111418] dark:text-white p-4 font-medium transition-colors min-h-[120px] resize-y">{{ $book->description }}</textarea>
                                </label>
                            </div>
                            <!-- Action Buttons -->
                            <div
                                class="flex items-center justify-between pt-6 border-t border-[#e5e7eb] dark:border-[#2a3441] mt-2">
                                <button
                                    class="text-red-600 hover:text-red-700 font-bold text-sm px-4 py-2 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors flex items-center gap-2"
                                    type="button">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                    Delete Book
                                </button>
                                <div class="flex gap-4">
                                    <button
                                        class="px-6 py-2.5 rounded-lg border border-[#e5e7eb] dark:border-[#2a3441] text-[#111418] dark:text-white font-bold text-sm bg-transparent hover:bg-gray-50 dark:hover:bg-[#233040] transition-colors"
                                        type="reset">
                                        Cancel
                                    </button>
                                    <button
                                        class="px-6 py-2.5 rounded-lg bg-primary hover:bg-blue-600 text-white font-bold text-sm shadow-md transition-colors flex items-center gap-2"
                                        type="submit">
                                        <span class="material-symbols-outlined text-[20px]">save</span>
                                        Update Book
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endlayout