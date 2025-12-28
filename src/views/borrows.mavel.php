@layout('templates.layout')
<div
    class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white font-display transition-colors duration-200">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Main Content -->
        <main class="layout-container flex h-full grow flex-col">
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-8">
                <div class="layout-content-container flex flex-col max-w-[1024px] flex-1 w-full gap-8">
                    <!-- Page Heading -->
                    <div class="flex flex-col gap-2 p-4">
                        <h1
                            class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                            My Borrows</h1>
                        <p class="text-[#617589] dark:text-gray-400 text-base font-normal leading-normal">Manage your
                            active loans and view your reading history.</p>
                    </div>
                    <!-- Active Borrows Section -->
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center justify-between px-4">
                            <h2
                                class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">
                                Active Borrows</h2>
                            <span class="bg-primary/10 text-primary text-xs font-bold px-2.5 py-1 rounded-full">2
                                Active</span>
                        </div>
                        <div class="px-4 @container">
                            <div
                                class="flex overflow-hidden rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2632] shadow-sm">
                                <table class="flex-1 w-full">
                                    <thead>
                                        <tr
                                            class="bg-gray-50 dark:bg-gray-800/50 border-b border-[#dbe0e6] dark:border-gray-700">
                                            <th
                                                class="px-4 py-4 text-left text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal">
                                                Book Title</th>
                                            <th
                                                class="hidden sm:table-cell px-4 py-4 text-left text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal">
                                                Borrow Date</th>
                                            <th
                                                class="hidden md:table-cell px-4 py-4 text-left text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal">
                                                Due Date</th>
                                            <th
                                                class="px-4 py-4 text-left text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal w-32">
                                                Status</th>
                                            <th
                                                class="px-4 py-4 text-right text-[#111418] dark:text-gray-200 text-sm font-semibold leading-normal w-40">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-[#dbe0e6] dark:divide-gray-700">
                                        @foreach ($borrows as $borrow)
                                            @if (!$borrow->is_returned)
                                                <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                                    <td class="px-4 py-4 text-sm">
                                                        <div class="flex items-center gap-3">
                                                            <div
                                                                class="w-10 h-14 bg-gray-200 rounded overflow-hidden shrink-0 hidden sm:block">
                                                                <div class="w-full h-full bg-cover bg-center"
                                                                    data-alt="Book cover for The Great Gatsby"
                                                                    style="background-image: url('{{ $borrow->book->image_url }}');">
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-col">
                                                                <span class="text-[#111418] dark:text-white font-medium">{{ $borrow->book->title }}</span>
                                                                <span
                                                                    class="text-[#617589] dark:text-gray-400 text-xs sm:hidden">Due:
                                                                    {{ $borrow->due_date }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="hidden sm:table-cell px-4 py-4 text-[#617589] dark:text-gray-400 text-sm font-normal">
                                                        {{ $borrow->borrowDate }}</td>
                                                    <td
                                                        class="hidden md:table-cell px-4 py-4 text-[#617589] dark:text-gray-400 text-sm font-normal">
                                                        {{ $borrow->due_date }}</td>
                                                    <td class="px-4 py-4 text-sm">
                                                        @if ($borrow->borrowDate < $borrow->due_date)
                                                            <span
                                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-200">
                                                                Active
                                                            </span>
                                                        @elseif ($borrow->borrowDate > $borrow->due_date)
                                                            <span
                                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-200">
                                                                Overdue
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td class="px-4 py-4 text-right">
                                                        <form action="@route('book.return', ['borrow' => $borrow->id])" method="post">
                                                            <button type="submit"
                                                                class="inline-flex cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-primary hover:bg-blue-600 text-white text-sm font-bold shadow-sm transition-all active:scale-95">
                                                                Return Book
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Past Borrows Section -->
                    <div class="flex flex-col gap-4 mt-4">
                        <div class="px-4">
                            <h2
                                class="text-[#111418] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">
                                Past Borrows</h2>
                        </div>
                        <div class="px-4 @container">
                            <div
                                class="flex overflow-hidden rounded-xl border border-[#dbe0e6] dark:border-gray-700 bg-white dark:bg-[#1a2632]">
                                <table class="flex-1 w-full">
                                    <thead>
                                        <tr
                                            class="bg-gray-50 dark:bg-gray-800/50 border-b border-[#dbe0e6] dark:border-gray-700">
                                            <th
                                                class="px-4 py-3 text-left text-[#617589] dark:text-gray-400 text-xs uppercase tracking-wider font-semibold">
                                                Book Title</th>
                                            <th
                                                class="hidden sm:table-cell px-4 py-3 text-left text-[#617589] dark:text-gray-400 text-xs uppercase tracking-wider font-semibold">
                                                Borrow Date</th>
                                            <th
                                                class="px-4 py-3 text-left text-[#617589] dark:text-gray-400 text-xs uppercase tracking-wider font-semibold">
                                                Returned On</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-[#dbe0e6] dark:divide-gray-700">
                                        @foreach ($borrows as $borrow)
                                            @if ($borrow->is_returned)
                                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                                                    <td class="px-4 py-4 text-sm text-[#111418] dark:text-gray-200 font-medium">
                                                        <div class="flex items-center gap-3">
                                                            <span class="material-symbols-outlined text-gray-400">book</span>
                                                            <span>{{ $borrow->book->title }}</span>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="hidden sm:table-cell px-4 py-4 text-[#617589] dark:text-gray-500 text-sm">
                                                        {{ $borrow->borrowDate }}</td>
                                                    <td class="px-4 py-4 text-[#617589] dark:text-gray-500 text-sm">
                                                        {{ $borrow->returnDate }}
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endlayout