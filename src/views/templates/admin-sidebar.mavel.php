<aside
    class="hidden lg:flex w-[280px] flex-col bg-white dark:bg-[#1a2632] border-r border-[#f0f2f4] dark:border-gray-800 h-full flex-shrink-0">
    <div class="flex h-full flex-col justify-between p-4">
        <div class="flex flex-col gap-4">
            <!-- Navigation -->
            <nav class="flex flex-col gap-2 mt-4">
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary group transition-colors"
                    href="@route('admin.dashboard')">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
                    <span class="text-sm font-bold leading-normal">Dashboard</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617589] dark:text-gray-400 hover:bg-[#f0f2f4] dark:hover:bg-gray-800 hover:text-[#111418] dark:hover:text-white transition-colors"
                    href="@route('admin.books')">
                    <span class="material-symbols-outlined">menu_book</span>
                    <span class="text-sm font-medium leading-normal">Books Inventory</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617589] dark:text-gray-400 hover:bg-[#f0f2f4] dark:hover:bg-gray-800 hover:text-[#111418] dark:hover:text-white transition-colors"
                    href="@route('admin.readers')">
                    <span class="material-symbols-outlined">group</span>
                    <span class="text-sm font-medium leading-normal">Members</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-[#617589] dark:text-gray-400 hover:bg-[#f0f2f4] dark:hover:bg-gray-800 hover:text-[#111418] dark:hover:text-white transition-colors"
                    href="@route('admin.borrows')">
                    <span class="material-symbols-outlined">history</span>
                    <span class="text-sm font-medium leading-normal">Borrowing History</span>
                </a>
            </nav>
        </div>
    </div>
</aside>