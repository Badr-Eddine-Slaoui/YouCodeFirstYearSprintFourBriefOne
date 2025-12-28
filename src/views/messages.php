
    <div class="fixed bottom-6 right-6 z-[100] flex flex-col gap-4 pointer-events-none">
        <div
            class="pointer-events-auto flex items-start w-full max-w-sm gap-4 p-4 bg-white dark:bg-[#1a2632] border border-[#f0f2f4] dark:border-gray-700 rounded-xl shadow-2xl ring-1 ring-black/5 dark:ring-white/10 transform transition-all duration-300 translate-y-0 opacity-100">
            <div class="flex-shrink-0">
                <span class="material-symbols-outlined text-emerald-500 icon-filled text-[24px]">check_circle</span>
            </div>
            <div class="flex-1 pt-0.5">
                <p class="text-sm font-bold text-[#111418] dark:text-white">Book borrowed successfully!</p>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Due date: November 15, 2023. Enjoy your
                    reading.</p>
            </div>
            <button
                class="flex-shrink-0 ml-4 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300 transition-colors">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div
            class="pointer-events-auto flex items-start w-full max-w-sm gap-4 p-4 bg-white dark:bg-[#1a2632] border border-[#f0f2f4] dark:border-gray-700 rounded-xl shadow-2xl ring-1 ring-black/5 dark:ring-white/10 transform transition-all duration-300 translate-y-0 opacity-100">
            <div class="flex-shrink-0">
                <span class="material-symbols-outlined text-red-500 icon-filled text-[24px]">error</span>
            </div>
            <div class="flex-1 pt-0.5">
                <p class="text-sm font-bold text-[#111418] dark:text-white">Borrowing failed</p>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">You have reached your limit of 5 borrowed
                    books.</p>
            </div>
            <button
                class="flex-shrink-0 ml-4 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300 transition-colors">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
    </div>