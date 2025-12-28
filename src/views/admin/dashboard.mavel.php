@layout('templates.layout')
<div class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display overflow-hidden">
    <div class="flex h-screen w-full">
        <!-- Sidebar -->
        @view('templates.admin-sidebar')
        <!-- Main Content -->
        <main class="flex-1 flex flex-col h-full overflow-hidden bg-background-light dark:bg-background-dark">
            <!-- Top Navbar -->
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#f0f2f4] dark:border-gray-800 bg-white dark:bg-[#1a2632] px-6 py-4 sticky top-0 z-10">
                <div class="flex items-center gap-8 w-full max-w-2xl">
                    <div class="lg:hidden text-[#111418] dark:text-white cursor-pointer">
                        <span class="material-symbols-outlined">menu</span>
                    </div>
                    <div class="flex items-center gap-4 text-[#111418] dark:text-white">
                        <h2 class="text-lg font-bold leading-tight tracking-[-0.015em] hidden sm:block">Dashboard</h2>
                    </div>
                </div>
                <div class="flex justify-end gap-4 ml-4">
                    <a href="@route('admin.addBook')"
                        class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-blue-600 text-white text-sm font-bold leading-normal tracking-[0.015em] transition-colors shadow-sm shadow-blue-200 dark:shadow-none">
                        <span class="material-symbols-outlined text-[20px] mr-2">add</span>
                        <span class="truncate hidden sm:inline">Add New Book</span>
                        <span class="truncate sm:hidden">Add</span>
                    </a>
                </div>
            </header>
            <!-- Scrollable Content Area -->
            <div class="flex-1 overflow-y-auto p-6 md:p-8">
                <div class="max-w-[1200px] mx-auto flex flex-col gap-8">
                    <!-- Stats Section -->
                    <section>
                        <h3 class="text-[#111418] dark:text-white text-lg font-bold leading-tight mb-4">Overview</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            <!-- Card 1 -->
                            <div
                                class="flex flex-col gap-2 rounded-xl p-5 bg-white dark:bg-[#1a2632] border border-[#e5e7eb] dark:border-gray-700 shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="p-2 bg-blue-50 dark:bg-blue-900/20 rounded-lg text-primary">
                                        <span class="material-symbols-outlined">library_books</span>
                                    </div>
                                    <span
                                        class="text-[#078838] bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded text-xs font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">trending_up</span> 12%
                                    </span>
                                </div>
                                <p class="text-[#617589] dark:text-gray-400 text-sm font-medium leading-normal">Total
                                    Books</p>
                                <p
                                    class="text-[#111418] dark:text-white tracking-tight text-2xl font-bold leading-tight">
                                    12,450</p>
                            </div>
                            <!-- Card 2 -->
                            <div
                                class="flex flex-col gap-2 rounded-xl p-5 bg-white dark:bg-[#1a2632] border border-[#e5e7eb] dark:border-gray-700 shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="p-2 bg-purple-50 dark:bg-purple-900/20 rounded-lg text-purple-600">
                                        <span class="material-symbols-outlined">menu_book</span>
                                    </div>
                                    <span
                                        class="text-[#078838] bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded text-xs font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">trending_up</span> 5%
                                    </span>
                                </div>
                                <p class="text-[#617589] dark:text-gray-400 text-sm font-medium leading-normal">Borrowed
                                    Books</p>
                                <p
                                    class="text-[#111418] dark:text-white tracking-tight text-2xl font-bold leading-tight">
                                    342</p>
                            </div>
                            <!-- Card 3 -->
                            <div
                                class="flex flex-col gap-2 rounded-xl p-5 bg-white dark:bg-[#1a2632] border border-[#e5e7eb] dark:border-gray-700 shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="p-2 bg-orange-50 dark:bg-orange-900/20 rounded-lg text-orange-600">
                                        <span class="material-symbols-outlined">group</span>
                                    </div>
                                    <span
                                        class="text-[#078838] bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded text-xs font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">trending_up</span> 2%
                                    </span>
                                </div>
                                <p class="text-[#617589] dark:text-gray-400 text-sm font-medium leading-normal">Total
                                    Readers</p>
                                <p
                                    class="text-[#111418] dark:text-white tracking-tight text-2xl font-bold leading-tight">
                                    2,100</p>
                            </div>
                            <!-- Card 4 -->
                            <div
                                class="flex flex-col gap-2 rounded-xl p-5 bg-white dark:bg-[#1a2632] border border-[#e5e7eb] dark:border-gray-700 shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="p-2 bg-red-50 dark:bg-red-900/20 rounded-lg text-red-600">
                                        <span class="material-symbols-outlined">pending_actions</span>
                                    </div>
                                    <span
                                        class="text-[#e73908] bg-red-50 dark:bg-red-900/20 px-2 py-1 rounded text-xs font-bold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">trending_down</span> 1%
                                    </span>
                                </div>
                                <p class="text-[#617589] dark:text-gray-400 text-sm font-medium leading-normal">Active
                                    Borrows</p>
                                <p
                                    class="text-[#111418] dark:text-white tracking-tight text-2xl font-bold leading-tight">
                                    156</p>
                            </div>
                        </div>
                    </section>
                    <!-- Table Section -->
                    <section class="flex flex-col gap-4">
                        <div class="flex items-center justify-between">
                            <h2
                                class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">
                                Recent Activity</h2>
                            <button class="text-primary text-sm font-bold hover:underline">View All</button>
                        </div>
                        <div class="@container">
                            <div
                                class="flex overflow-hidden rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2632] shadow-sm">
                                <table class="flex-1 w-full">
                                    <thead>
                                        <tr
                                            class="bg-gray-50 dark:bg-gray-800 border-b border-[#dbe0e6] dark:border-gray-700">
                                            <th
                                                class="px-6 py-4 text-left text-[#617589] dark:text-gray-400 text-xs font-bold uppercase tracking-wider">
                                                Book Title</th>
                                            <th
                                                class="px-6 py-4 text-left text-[#617589] dark:text-gray-400 text-xs font-bold uppercase tracking-wider hidden sm:table-cell">
                                                Borrower</th>
                                            <th
                                                class="px-6 py-4 text-left text-[#617589] dark:text-gray-400 text-xs font-bold uppercase tracking-wider hidden md:table-cell">
                                                Borrow Date</th>
                                            <th
                                                class="px-6 py-4 text-left text-[#617589] dark:text-gray-400 text-xs font-bold uppercase tracking-wider hidden lg:table-cell">
                                                Due Date</th>
                                            <th
                                                class="px-6 py-4 text-left text-[#617589] dark:text-gray-400 text-xs font-bold uppercase tracking-wider">
                                                Status</th>
                                            <th
                                                class="px-6 py-4 text-right text-[#617589] dark:text-gray-400 text-xs font-bold uppercase tracking-wider">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-[#dbe0e6] dark:divide-gray-700">
                                        <!-- Row 1 -->
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="bg-gray-100 dark:bg-gray-700 rounded w-10 h-14 bg-cover bg-center shrink-0 shadow-sm"
                                                        data-alt="Cover of The Great Gatsby book"
                                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAs5wa2iVnnlRMFg0_zTbrbleW-TzoSPLon_KtpzcERohUXZKd8-xTZG1nkSFkv4Ug5pN8YKiUwhEDrluvqNnjB5jX8IBdIUwHFQYwBD2_MGqJhWvjgsed7sqMFaMiq60Dhors70u1N04ma3ZzE0CQbSchWH4nbf7vqm4SJZMgsbiqM7poL-HbODmzHPw6KisrFr4Y6ipKQ2p8EiUXcwPc4r67N9GCt3xhJCQssAyXknP7-Hu3d9xpvszHxEQjAc6o0cmnIKc5kkxF7");'>
                                                    </div>
                                                    <div>
                                                        <p class="text-[#111418] dark:text-white text-sm font-bold">The
                                                            Great Gatsby</p>
                                                        <p class="text-[#617589] dark:text-gray-400 text-xs mt-0.5">ID:
                                                            #BK-2023-001</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 hidden sm:table-cell">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="size-6 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 flex items-center justify-center text-xs font-bold">
                                                        JD</div>
                                                    <span
                                                        class="text-[#111418] dark:text-gray-200 text-sm font-medium">John
                                                        Doe</span>
                                                </div>
                                            </td>
                                            <td
                                                class="px-6 py-4 hidden md:table-cell text-[#617589] dark:text-gray-400 text-sm">
                                                Oct 10, 2023</td>
                                            <td
                                                class="px-6 py-4 hidden lg:table-cell text-[#617589] dark:text-gray-400 text-sm">
                                                Oct 24, 2023</td>
                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400">
                                                    <span
                                                        class="size-1.5 rounded-full bg-green-600 dark:bg-green-400"></span>
                                                    Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <button
                                                    class="text-[#617589] dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors">
                                                    <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row 2 -->
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="bg-gray-100 dark:bg-gray-700 rounded w-10 h-14 bg-cover bg-center shrink-0 shadow-sm"
                                                        data-alt="Cover of Clean Code book"
                                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCmtlx11IA76qNq_c5KMUfQ4BHOwf1jcFtIOnPmPiQwY2rQ9amM7YY5QqxXoocbY1_djAoXGpcX6JK8S8BptWR_4pzg8_eYhrkIdyg5UWdTVgR5LvTrrp_jOstHVaQHyQwEEh7EynCS7voLWLblofby1oRAzEZjPB41LyZP2Bm1zZlmcmOXOXh8TjsT8aRZ5OJCND-XSJwXdvOAREMqz_wkue3j-4FfhGcCpzffBnMmP4cLos6twker35NTaibo95_tDQxLFdIabLGt");'>
                                                    </div>
                                                    <div>
                                                        <p class="text-[#111418] dark:text-white text-sm font-bold">
                                                            Clean Code</p>
                                                        <p class="text-[#617589] dark:text-gray-400 text-xs mt-0.5">ID:
                                                            #BK-2023-045</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 hidden sm:table-cell">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="size-6 rounded-full bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 flex items-center justify-center text-xs font-bold">
                                                        JS</div>
                                                    <span
                                                        class="text-[#111418] dark:text-gray-200 text-sm font-medium">Jane
                                                        Smith</span>
                                                </div>
                                            </td>
                                            <td
                                                class="px-6 py-4 hidden md:table-cell text-[#617589] dark:text-gray-400 text-sm">
                                                Oct 01, 2023</td>
                                            <td
                                                class="px-6 py-4 hidden lg:table-cell text-[#617589] dark:text-gray-400 text-sm">
                                                Oct 15, 2023</td>
                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400">
                                                    <span
                                                        class="size-1.5 rounded-full bg-red-600 dark:bg-red-400"></span>
                                                    Overdue
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <button
                                                    class="text-[#617589] dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors">
                                                    <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row 3 -->
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="bg-gray-100 dark:bg-gray-700 rounded w-10 h-14 bg-cover bg-center shrink-0 shadow-sm"
                                                        data-alt="Cover of 1984 book"
                                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCd7a6N9t32gkcZphu5moAlKMoP8oDdM26ZBl6vhcY53vAJhMVb1iabYdgEmQTTtRI8BUtrbqNuE460DdOUhSIZYAnxAP3gRJAHMYvXl9JGKD9UgcVHBozKeTNlcVAki-zCpsEDnTsXqCcN0n4M0smVAnIIev4uiiO-HQR73VoegLEswyGHLOrHHaD3aVrpl3lNatvI769FhPMdfEfh3ih28x6xJFA7KuXx-q54x-7LOPJnl_S99mrrdf0yrLgMhGjF-sqGJaZStbQR");'>
                                                    </div>
                                                    <div>
                                                        <p class="text-[#111418] dark:text-white text-sm font-bold">1984
                                                        </p>
                                                        <p class="text-[#617589] dark:text-gray-400 text-xs mt-0.5">ID:
                                                            #BK-2023-112</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 hidden sm:table-cell">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="size-6 rounded-full bg-orange-100 dark:bg-orange-900 text-orange-600 dark:text-orange-300 flex items-center justify-center text-xs font-bold">
                                                        AJ</div>
                                                    <span
                                                        class="text-[#111418] dark:text-gray-200 text-sm font-medium">Alice
                                                        Johnson</span>
                                                </div>
                                            </td>
                                            <td
                                                class="px-6 py-4 hidden md:table-cell text-[#617589] dark:text-gray-400 text-sm">
                                                Oct 12, 2023</td>
                                            <td
                                                class="px-6 py-4 hidden lg:table-cell text-[#617589] dark:text-gray-400 text-sm">
                                                Oct 26, 2023</td>
                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400">
                                                    <span
                                                        class="size-1.5 rounded-full bg-green-600 dark:bg-green-400"></span>
                                                    Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <button
                                                    class="text-[#617589] dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors">
                                                    <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Row 4 -->
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="bg-gray-100 dark:bg-gray-700 rounded w-10 h-14 bg-cover bg-center shrink-0 shadow-sm"
                                                        data-alt="Cover of Design Patterns book"
                                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAGtCNXbFNvbhsJbN0CTC9yhiRSVz-OLuDexEmlbxdPcH6Q_D1bLMsXWfykvY8MKRXBoI9TyHKlv809TqM6ysUR2S9uUDZ3SVHtpDJ9zqyu9zEmVi6yB8cJmOMq9diS65uDf5IAT3PbhPNFVQp6cTPR5j3fMSCJBBmE38BX8qw8LLX5n9X0QcqVlTfSqTDeOqspca8krNzZ5OQ3WKQcJnU9CtO73UWP_NgR9LoAv82YF8aAyQhVp55aQgS9DYpr96qV-2Ee0ye_J-k6");'>
                                                    </div>
                                                    <div>
                                                        <p class="text-[#111418] dark:text-white text-sm font-bold">
                                                            Design Patterns</p>
                                                        <p class="text-[#617589] dark:text-gray-400 text-xs mt-0.5">ID:
                                                            #BK-2023-088</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 hidden sm:table-cell">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="size-6 rounded-full bg-teal-100 dark:bg-teal-900 text-teal-600 dark:text-teal-300 flex items-center justify-center text-xs font-bold">
                                                        BB</div>
                                                    <span
                                                        class="text-[#111418] dark:text-gray-200 text-sm font-medium">Bob
                                                        Brown</span>
                                                </div>
                                            </td>
                                            <td
                                                class="px-6 py-4 hidden md:table-cell text-[#617589] dark:text-gray-400 text-sm">
                                                Sep 28, 2023</td>
                                            <td
                                                class="px-6 py-4 hidden lg:table-cell text-[#617589] dark:text-gray-400 text-sm">
                                                Oct 12, 2023</td>
                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                                                    <span
                                                        class="size-1.5 rounded-full bg-gray-500 dark:bg-gray-400"></span>
                                                    Returned
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <button
                                                    class="text-[#617589] dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors">
                                                    <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Footer Spacer -->
                <div class="h-10"></div>
            </div>
        </main>
    </div>
</div>
@endlayout