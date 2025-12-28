@layout('templates.layout')
@php
    $profile = auth()->user();
@endphp
<div
    class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased overflow-x-hidden">
    <div class="flex min-h-screen w-full flex-col lg:flex-row">
        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col h-full min-h-screen relative overflow-y-auto">
            <!-- Mobile Header Placeholder (if needed for hamburger menu, skipping for desktop focus but keeping structure clean) -->
            <div
                class="layout-container flex h-full grow flex-col px-4 py-6 md:px-8 lg:px-12 xl:px-20 lg:py-10 max-w-5xl mx-auto w-full">
                <!-- Page Heading -->
                <header class="flex flex-wrap justify-between items-end gap-4 mb-8">
                    <div class="flex flex-col gap-2">
                        <h1
                            class="text-slate-900 dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">
                            My Profile</h1>
                        <p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">Manage your
                            personal information and account settings.</p>
                    </div>
                </header>
                <div class="flex flex-col gap-6">
                    <!-- Profile Header Card -->
                    <section
                        class="bg-white dark:bg-[#1a242f] rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-sm">
                        <div class="flex flex-col md:flex-row gap-6 items-start md:items-center justify-between">
                            <div
                                class="flex flex-col md:flex-row gap-5 items-center md:items-start text-center md:text-left w-full md:w-auto">
                                <div class="relative group cursor-pointer">
                                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-24 w-24 md:h-28 md:w-28 border-4 border-slate-50 dark:border-slate-700 shadow-inner"
                                        data-alt="User avatar showing a smiling person"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDihMLxZ4cWDhaeA1foEGr3L9YSOH6I4kUTXuhfv163d_2m1IA3W5Wini6siLIQZiNE5CsW1TQRt-Bk8-opqpC9Cyj49LmOXCHc9z1z9V4CUTiblS89wz8gFukmVRs0Ma4cb-p4tkpKpOOPrGfiVhwF_t6Gzxhb49s1fr9_0xvEtk9XhNwEMUFv5NPw3lLrSMzD38xh2szLgejqEqlvzAK7OpOPJcF0JEuB1XiPv94qNxieFGUwouCZ02bMyQG8awyKyELpj5ApWLEu");'>
                                    </div>
                                    <div
                                        class="absolute bottom-0 right-0 bg-primary text-white p-1.5 rounded-full border-2 border-white dark:border-[#1a242f] shadow-sm">
                                        <span
                                            class="material-symbols-outlined text-[16px] leading-none block">photo_camera</span>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-center gap-1">
                                    <h2
                                        class="text-slate-900 dark:text-white text-2xl font-bold leading-tight tracking-[-0.015em]">
                                        {{ ucfirst($profile->firstName) }} {{ ucfirst($profile->lastName) }}</h2>
                                    <div class="flex items-center gap-2 justify-center md:justify-start">
                                        <span
                                            class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded uppercase tracking-wider">{{ $profile->role }}</span>
                                        <span class="text-slate-400 dark:text-slate-500 text-sm">•</span>
                                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Member since
                                            {{ $profile->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Stats Overview -->
                    <section class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div
                            class="flex flex-col gap-1 rounded-xl bg-white dark:bg-[#1a242f] border border-slate-200 dark:border-slate-800 p-4 shadow-sm hover:border-primary/50 transition-colors cursor-default">
                            <div class="flex items-center gap-2 text-primary mb-1">
                                <span class="material-symbols-outlined text-[20px]">book</span>
                                <span
                                    class="text-xs font-bold uppercase tracking-wide text-slate-500 dark:text-slate-400">Borrowed</span>
                            </div>
                            <p class="text-slate-900 dark:text-white text-3xl font-black leading-tight">3</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs">Books currently out</p>
                        </div>
                        <div
                            class="flex flex-col gap-1 rounded-xl bg-white dark:bg-[#1a242f] border border-slate-200 dark:border-slate-800 p-4 shadow-sm hover:border-primary/50 transition-colors cursor-default">
                            <div class="flex items-center gap-2 text-emerald-500 mb-1">
                                <span class="material-symbols-outlined text-[20px]">check_circle</span>
                                <span
                                    class="text-xs font-bold uppercase tracking-wide text-slate-500 dark:text-slate-400">Total
                                    Read</span>
                            </div>
                            <p class="text-slate-900 dark:text-white text-3xl font-black leading-tight">12</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs">Books returned</p>
                        </div>
                        <!-- Placeholder stats for better grid -->
                        <div
                            class="flex flex-col gap-1 rounded-xl bg-white dark:bg-[#1a242f] border border-slate-200 dark:border-slate-800 p-4 shadow-sm hover:border-primary/50 transition-colors cursor-default">
                            <div class="flex items-center gap-2 text-amber-500 mb-1">
                                <span class="material-symbols-outlined text-[20px]">warning</span>
                                <span
                                    class="text-xs font-bold uppercase tracking-wide text-slate-500 dark:text-slate-400">Overdue</span>
                            </div>
                            <p class="text-slate-900 dark:text-white text-3xl font-black leading-tight">0</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs">Requires attention</p>
                        </div>
                        <div
                            class="flex flex-col gap-1 rounded-xl bg-white dark:bg-[#1a242f] border border-slate-200 dark:border-slate-800 p-4 shadow-sm hover:border-primary/50 transition-colors cursor-default">
                            <div class="flex items-center gap-2 text-purple-500 mb-1">
                                <span class="material-symbols-outlined text-[20px]">favorite</span>
                                <span
                                    class="text-xs font-bold uppercase tracking-wide text-slate-500 dark:text-slate-400">Favorites</span>
                            </div>
                            <p class="text-slate-900 dark:text-white text-3xl font-black leading-tight">5</p>
                            <p class="text-slate-500 dark:text-slate-400 text-xs">Saved for later</p>
                        </div>
                    </section>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Personal Info Form -->
                        <section
                            class="lg:col-span-3 bg-white dark:bg-[#1a242f] rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
                            <div
                                class="px-6 py-4 border-b border-slate-100 dark:border-slate-700 bg-slate-50/50 dark:bg-slate-800/50">
                                <h3 class="text-lg font-bold text-slate-900 dark:text-white">Personal Information</h3>
                            </div>
                            <div class="p-6">
                                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="flex flex-col gap-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                            for="firstName">First Name</label>
                                        <div class="relative">
                                            <span
                                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">person</span>
                                            <input
                                                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-default hover:bg-slate-100 dark:hover:bg-slate-700/50"
                                                id="firstName" readonly="" type="text" value="{{ ucfirst($user->firstName) }}" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                            for="lastName">Last Name</label>
                                        <div class="relative">
                                            <span
                                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">person</span>
                                            <input
                                                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-default hover:bg-slate-100 dark:hover:bg-slate-700/50"
                                                id="lastName" readonly="" type="text" value="{{ ucfirst($user->lastName) }}" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2 md:col-span-2">
                                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300"
                                            for="email">Email Address</label>
                                        <div class="relative">
                                            <span
                                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">mail</span>
                                            <input
                                                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all cursor-default hover:bg-slate-100 dark:hover:bg-slate-700/50"
                                                id="email" readonly="" type="email" value="{{ $user->email }}" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endlayout