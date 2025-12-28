@layout('templates.layout')
<div class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white overflow-x-hidden">
    <div class="flex h-screen w-full overflow-hidden">
        <!-- Side Navigation -->
        @view('templates.admin-sidebar')
        <!-- Main Content Area -->
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
                        <span class="text-[#111418] dark:text-white text-sm font-medium leading-normal">Members</span>
                    </div>
                    <!-- Page Heading -->
                    <div class="flex flex-wrap items-end justify-between gap-3">
                        <div class="flex min-w-72 flex-col gap-2">
                            <h1
                                class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                                Members Directory</h1>
                            <p class="text-[#617589] dark:text-gray-400 text-base font-normal leading-normal">Manage library
                                access and view user roles.</p>
                        </div>
                    </div>
                    <!-- Table Section -->
                    <div
                        class="flex flex-col overflow-hidden rounded-xl border border-[#dbe0e6] dark:border-gray-800 bg-white dark:bg-[#1a202c] shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-50 dark:bg-gray-900 border-b border-[#dbe0e6] dark:border-gray-700">
                                        <th
                                            class="px-6 py-4 text-[#64748B] dark:text-gray-400 text-xs font-semibold uppercase tracking-wider">
                                            Name</th>
                                        <th
                                            class="px-6 py-4 text-[#64748B] dark:text-gray-400 text-xs font-semibold uppercase tracking-wider">
                                            Email</th>
                                        <th
                                            class="px-6 py-4 text-[#64748B] dark:text-gray-400 text-xs font-semibold uppercase tracking-wider">
                                            Role</th>
                                        <th
                                            class="px-6 py-4 text-[#64748B] dark:text-gray-400 text-xs font-semibold uppercase tracking-wider">
                                            Status</th>
                                        <th
                                            class="px-6 py-4 text-[#64748B] dark:text-gray-400 text-xs font-semibold uppercase tracking-wider text-right">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[#dbe0e6] dark:divide-gray-800">
                                    @foreach ($users as $user)
                                        <!-- Row 1 -->
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors group">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="size-9 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center text-sm font-bold">
                                                        {{ ucfirst($user->firstname)[0] . ucfirst($user->lastname)[0] }}</div>
                                                    <span class="text-[#111418] dark:text-white text-sm font-medium">{{ $user->firstname . ' ' . $user->lastname }}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-[#617589] dark:text-gray-400 text-sm">{{ $user->email }}</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if ($user->role == 'admin')
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/10 text-primary border border-primary/20">
                                                        Admin
                                                    </span>
                                                @else
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 border border-slate-200 dark:border-slate-600">
                                                        Reader
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center gap-1.5">
                                                    <div class="size-2 rounded-full bg-emerald-500"></div>
                                                    <span class="text-[#111418] dark:text-white text-sm">Active</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                                <button class="text-gray-400 hover:text-primary transition-colors">
                                                    <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination Footer -->
                        <div
                            class="flex items-center justify-between px-6 py-4 border-t border-[#dbe0e6] dark:border-gray-700 bg-gray-50 dark:bg-[#1a202c]">
                            <p class="text-sm text-[#617589] dark:text-gray-400">
                                Showing <span class="font-semibold text-[#111418] dark:text-white">1</span> to <span
                                    class="font-semibold text-[#111418] dark:text-white">5</span> of <span
                                    class="font-semibold text-[#111418] dark:text-white">48</span> members
                            </p>
                            <div class="flex items-center gap-2">
                                <button
                                    class="flex items-center justify-center h-8 w-8 rounded-lg border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111418] dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                                    disabled="">
                                    <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                                </button>
                                <button
                                    class="flex items-center justify-center h-8 w-8 rounded-lg bg-primary text-white text-sm font-medium hover:bg-primary/90 transition-colors">
                                    1
                                </button>
                                <button
                                    class="flex items-center justify-center h-8 w-8 rounded-lg border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111418] dark:text-white text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                    2
                                </button>
                                <button
                                    class="flex items-center justify-center h-8 w-8 rounded-lg border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111418] dark:text-white text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                    3
                                </button>
                                <span class="text-[#617589] px-1">...</span>
                                <button
                                    class="flex items-center justify-center h-8 w-8 rounded-lg border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#111418] dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endlayout