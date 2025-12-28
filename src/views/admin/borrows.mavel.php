@layout('templates.layout')
<div class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white overflow-x-hidden">
    <div class="flex h-screen w-full overflow-hidden">
        <!-- Side Navigation -->
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
                        <span class="text-[#111418] dark:text-white text-sm font-medium leading-normal">Borrowing
                            History</span>
                    </div>
                    <!-- Page Heading & Top Actions -->
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                        <div class="flex flex-col gap-1">
                            <h1
                                class="text-[#111418] dark:text-white text-3xl md:text-4xl font-extrabold leading-tight tracking-[-0.033em]">
                                Borrowing History</h1>
                            <p class="text-[#617589] dark:text-gray-400 text-base font-normal leading-normal">Manage and
                                track book loans across the library system</p>
                        </div>
                        <div class="flex gap-3">
                            <button
                                class="flex items-center justify-center gap-2 rounded-lg h-10 px-4 border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2632] hover:bg-gray-50 dark:hover:bg-gray-700 text-[#111418] dark:text-white text-sm font-bold transition-colors">
                                <span class="material-symbols-outlined text-lg">calendar_today</span>
                                <span class="truncate">Select Dates</span>
                            </button>
                            <button
                                class="flex items-center justify-center gap-2 rounded-lg h-10 px-4 bg-[#1380ec] hover:bg-blue-600 text-white text-sm font-bold transition-colors shadow-sm">
                                <span class="material-symbols-outlined text-lg">download</span>
                                <span class="truncate">Export Data</span>
                            </button>
                        </div>
                    </div>
                    <!-- Data Table -->
                    <div
                        class="bg-white dark:bg-[#1a2632] rounded-xl shadow-sm border border-[#e5e7eb] dark:border-gray-800 overflow-hidden flex flex-col">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead class="bg-gray-50 dark:bg-gray-800/50">
                                    <tr>
                                        <th
                                            class="py-4 px-6 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400">
                                            Reader</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400">
                                            Book Title</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400">
                                            Borrowed On</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400">
                                            Due / Returned</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400">
                                            Status</th>
                                        <th
                                            class="py-4 px-6 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400 text-right">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[#e5e7eb] dark:divide-gray-700">
                                    @foreach ($borrows as $borrow)
                                        <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                                            <td class="py-4 px-6 whitespace-nowrap">
                                                <div class="flex items-center gap-3">
                                                    <div class="size-8 rounded-full bg-cover bg-center"
                                                        data-alt="Portrait of Sarah Jenkins"
                                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCyI4WD9L2_gXVaq1YLnuzmJIdJhKI_36UzbRHP2sZPn-sukNW8zdH4wwkNmjFbYTVhhBBbVk_U04SppMe98JNI88c_yjnFggBfYk9J_PN6-P8ex7NY--_S-rR90EBdYHdgV01SsirfXh0e7Wsmg-mhAVgnpmh7z6tGmqG3RAUuF2dZfks5kmOaXpMQVXfMnU4Zg1nFwVYKpJ4IIL4SOFD3HATyZ_ozcjOTkqt322NbrYyj8fru75VPciRjHbFYCyj6KLV5PAnc2trw')">
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-bold text-[#111418] dark:text-white">{{ ucfirst($borrow->user->firstName) }} {{ ucfirst($borrow->user->lastName) }}</p>
                                                        <p class="text-xs text-[#617589] dark:text-gray-400">ID: #9283</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex flex-col">
                                                    <span class="text-sm font-medium text-[#111418] dark:text-white">{{ $borrow->book->title }}</span>
                                                    <span class="text-xs text-[#617589] dark:text-gray-400">{{ $borrow->book->author }}</span>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 text-sm text-[#617589] dark:text-gray-300">{{ $borrow->borrowDate }}
                                            </td>
                                            <td class="py-4 px-6 text-sm text-[#617589] dark:text-gray-300">{{ $borrow->due_date }}
                                            </td>
                                            <td class="py-4 px-6">
                                                @if (!$borrow->is_returned && $borrow->borrowDate < $borrow->due_date)
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-200">
                                                        Active
                                                    </span>
                                                @elseif (!$borrow->is_returned && $borrow->borrowDate > $borrow->due_date)
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-200">
                                                        Overdue
                                                    </span>
                                                @else
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-200">
                                                        Returned
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <button
                                                    class="text-[#617589] hover:text-[#111418] dark:text-gray-400 dark:hover:text-white transition-colors">
                                                    <span class="material-symbols-outlined">more_vert</span>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <div
                            class="flex items-center justify-between px-6 py-4 border-t border-[#e5e7eb] dark:border-gray-800 bg-gray-50 dark:bg-gray-800/50">
                            <p class="text-sm text-[#617589] dark:text-gray-400">Showing <span
                                    class="font-medium">1</span> to <span class="font-medium">5</span> of <span
                                    class="font-medium">128</span> results</p>
                            <div class="flex gap-2">
                                <button
                                    class="px-3 py-1 rounded border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2632] text-sm font-medium text-[#617589] dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 disabled:opacity-50"
                                    disabled="">Previous</button>
                                <button
                                    class="px-3 py-1 rounded border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2632] text-sm font-medium text-[#111418] dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endlayout