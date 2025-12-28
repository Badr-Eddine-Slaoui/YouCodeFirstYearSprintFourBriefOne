@layout('templates.layout')
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
    <div class="flex flex-col flex-1">
        <!-- Hero Section -->
        <section class="bg-white dark:bg-[#101922]">
            <div class="px-6 lg:px-40 flex justify-center py-5">
                <div class="flex flex-col max-w-[1200px] flex-1">
                    <div class="@container">
                        <div class="flex flex-col gap-10 py-10 lg:py-20 lg:gap-16 lg:flex-row items-center">
                            <div class="flex flex-col gap-6 lg:flex-1 lg:max-w-[50%] text-center lg:text-left">
                                <div class="flex flex-col gap-4">
                                    <h1
                                        class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em] lg:text-6xl">
                                        Discover, Borrow, and Read.
                                    </h1>
                                    <h2
                                        class="text-[#617589] dark:text-[#9aaab9] text-lg font-normal leading-relaxed lg:text-xl">
                                        Manage your reading list and access thousands of titles from our community
                                        library. Join today to start your journey.
                                    </h2>
                                </div>
                                <div class="flex flex-wrap gap-3 justify-center lg:justify-start pt-2">
                                    <button
                                        class="flex min-w-[140px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold hover:bg-blue-600 transition-colors shadow-lg shadow-blue-500/20">
                                        <span>Join as Reader</span>
                                    </button>
                                    <button
                                        class="flex min-w-[140px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-[#f0f2f4] dark:bg-[#22303e] text-[#111418] dark:text-white text-base font-bold hover:bg-[#e1e4e8] dark:hover:bg-[#2d3f50] transition-colors">
                                        <span>Admin Access</span>
                                    </button>
                                </div>
                                <div
                                    class="flex items-center justify-center lg:justify-start gap-4 mt-4 text-sm text-[#617589]">
                                    <div class="flex -space-x-2">
                                        <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-200"
                                            data-alt="User avatar"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC5leXTm385bV3xXu3I5IIguREy_ILr_XTAg_YTomTO0VaT74uYhj9mYuMCP2lymjiYtDeX7adpbDbaDgK2hgGHfM1vCszACiKhow-xZBQoB0BurDKO0pgdWlfSwEL7i1irfoP4C5V3prEPO5ynBpBsGI3LYvkweTKJm5v1Z4McxAe8AJoeVPK9nMLcdA-U5rx6dKK9HQrxiHeJMPmrBYUetVWoQsGokyU9amjYznETx4ftKQNMLoy-qqwTewt5eT5xsbCtuQ2Z_v5M')">
                                        </div>
                                        <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-200"
                                            data-alt="User avatar"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCsiI9OOGQjEhv-xeVuhs4xlGD_DaqTBKYx2EJx4nTQHuFuPTDHAILPd94UV8T6vhyTH19zWG_Qa3yOuAWEecDZBU2YrZSD0GQ86QopLewVb9i5aQ47vxmwVSqx2TKmSHoy_u510CUZleDZhWn6B8vgITAfDRqipeFQVguEF-Od7L0_DoEzJChBwwgFDKeHiT8LhumxnCkTciHzXpw0NrDBb_B-Uqv7_nHg_HmYtqdhxMpnTg8UK25Bh6gMxijMIKEY2e0dafdq42T3')">
                                        </div>
                                        <div class="w-8 h-8 rounded-full border-2 border-white bg-gray-200"
                                            data-alt="User avatar"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDNDr38A81dR7s9Mt8EqFUyuiMdle7FM2CcPNCyf3DMDxZbMInyQ7AIObyniLy1IG3sW4DOlO9JzzxMreqbYypZzBWVN7jQqS3spSxpXVAgXhS2ZW0n05n5r2L7n3r7nIDaG3zZurQ1rBNin4Hf6OuhOUItbUKq8ZJEM9oom5g7Z_JM4v25TTwPcYb_EX5m6v-RsWHxIy9Jl8_VrEgTwEdWA2ufPgGHEifJhf0rAWlPJssS2iIP9DgBfJmY_PQFfezamWrBUiZrsWNC')">
                                        </div>
                                    </div>
                                    <p>Join 2,000+ happy readers</p>
                                </div>
                            </div>
                            <div
                                class="w-full lg:flex-1 lg:h-auto rounded-2xl overflow-hidden shadow-2xl shadow-blue-900/10">
                                <div class="w-full aspect-[4/3] bg-cover bg-center"
                                    data-alt="Modern library interior with bookshelves and comfortable reading area"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAGSS-VzVRMVr0yVsp9n5GUSc3bKjlDDzxR2lskrEYk_zKpzBkSiVo3MtNP86ZHZ4ydTC55YETiTxx2OJeenPdw0Ai2xuDEaTR_RjkMgcoAf-yDz7Ehs-2zCHzC58Bj1h9_VyaKhOXb_kvK6ycIyZYY61V7OyPdymKpE4mbmxFlDFq0EJW-htPGPVzkAgOwYIZ70mViyhoLwPgN60unzwjmG01anbeo2ygXodALwQVuh501fFSARel7iaGIJH_xMhS26DHzt4Y0TBH6");'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Section -->
        <section class="bg-[#f8f9fa] dark:bg-[#16212e]">
            <div class="px-6 lg:px-40 flex justify-center py-5">
                <div class="flex flex-col max-w-[1200px] flex-1">
                    <div class="flex flex-col gap-10 py-16">
                        <div class="flex flex-col gap-4 text-center items-center">
                            <h2 class="text-[#111418] dark:text-white text-[32px] font-bold leading-tight lg:text-4xl">
                                Why Join?
                            </h2>
                            <p
                                class="text-[#617589] dark:text-[#9aaab9] text-base font-normal leading-normal max-w-[600px]">
                                Experience the best way to manage your reading journey with our smart features
                                designed for book lovers.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div
                                class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-[#2a3441] bg-white dark:bg-[#101922] p-6 flex-col hover:border-primary/50 transition-colors group">
                                <div
                                    class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">manage_search</span>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">Smart
                                        Search</h3>
                                    <p class="text-[#617589] dark:text-[#9aaab9] text-sm font-normal leading-relaxed">
                                        Find books by genre, author, or ISBN instantly with our optimized search
                                        engine.</p>
                                </div>
                            </div>
                            <div
                                class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-[#2a3441] bg-white dark:bg-[#101922] p-6 flex-col hover:border-primary/50 transition-colors group">
                                <div
                                    class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">event_available</span>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">
                                        Borrow Tracking</h3>
                                    <p class="text-[#617589] dark:text-[#9aaab9] text-sm font-normal leading-relaxed">
                                        Never miss a due date. Keep track of your borrowed books and history easily.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="flex flex-1 gap-4 rounded-xl border border-[#dbe0e6] dark:border-[#2a3441] bg-white dark:bg-[#101922] p-6 flex-col hover:border-primary/50 transition-colors group">
                                <div
                                    class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">collections_bookmark</span>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-[#111418] dark:text-white text-lg font-bold leading-tight">
                                        Curated Collections</h3>
                                    <p class="text-[#617589] dark:text-[#9aaab9] text-sm font-normal leading-relaxed">
                                        Explore themed lists and recommendations hand-picked by our expert
                                        librarians.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Popular Reads Section -->
        <section class="bg-white dark:bg-[#101922]">
            <div class="px-6 lg:px-40 flex justify-center py-5">
                <div class="flex flex-col max-w-[1200px] flex-1 py-10">
                    <div class="flex items-center justify-between px-2 pb-6 pt-5">
                        <h2
                            class="text-[#111418] dark:text-white text-[28px] font-bold leading-tight tracking-[-0.015em]">
                            Popular Reads</h2>
                        <a class="text-primary font-bold text-sm hover:underline flex items-center gap-1" href="#">
                            View all <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 p-2">
                        <!-- Book Card 1 -->
                        <div class="flex flex-col gap-3 group cursor-pointer relative">
                            <div
                                class="relative w-full aspect-[2/3] overflow-hidden rounded-lg shadow-sm group-hover:shadow-xl transition-shadow">
                                <div class="w-full h-full bg-center bg-no-repeat bg-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Book cover of The Great Gatsby showing art deco style face"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDUVH9cLZyNcGp8Gq87VRehCNx4ImQApii_Q1pbrO9-6nNxJoHO6mtUkQFHSHSro3SdIIMc-lrHI6SPZAJZYS6QcntrELFVZZU4riSxiI4sQsKx5F29kkXe8aKArZH_gleu7ixbP20xNSBv-Tu8xdnc5gk-iQTuwIIY7mpsIUMfErO1ED9ShtQ5nMSwR6yrvza4yk2dr3dNAfmR1Ka65Ki_TuqAKRB4ROaRo0yj1OjFxxxCKx2QZ3GLX0DjiFx8JfMm3iVIBoSY_MCp");'>
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="text-white text-sm font-bold bg-primary px-3 py-1 rounded-full">Login
                                        to Borrow</span>
                                </div>
                            </div>
                            <div>
                                <p class="text-[#111418] dark:text-white text-base font-bold leading-tight truncate">
                                    The Great Gatsby</p>
                                <p
                                    class="text-[#617589] dark:text-[#9aaab9] text-sm font-medium leading-normal truncate">
                                    F. Scott Fitzgerald</p>
                            </div>
                        </div>
                        <!-- Book Card 2 -->
                        <div class="flex flex-col gap-3 group cursor-pointer relative">
                            <div
                                class="relative w-full aspect-[2/3] overflow-hidden rounded-lg shadow-sm group-hover:shadow-xl transition-shadow">
                                <div class="w-full h-full bg-center bg-no-repeat bg-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Book cover of 1984 showing big brother eye graphic"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCn3c0yQjBEiBh34uUnkKsGSbxx0iAxfwOdg6MNN8Lh_yCAxMdeafsOnGbEZYfEwp8Afd9W4BIMTa3Td32m_iWPhhrKBbKkTWKmaEPA5ZweJUJeAQ53b71xQvWrW81tSg-09494hw6hnzSXCRSJPQ_nVnmQmBjeC7vD7-I2Rs4TTleZSyoSA_-yTWPyHwKrB-TG_V1aINDRyMQb33HlXywZuOfGRsRZqBBviq4P3773jrjMgyfmS4icDpYEwygjb-SH31cEYkT3pLkk");'>
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="text-white text-sm font-bold bg-primary px-3 py-1 rounded-full">Login
                                        to Borrow</span>
                                </div>
                            </div>
                            <div>
                                <p class="text-[#111418] dark:text-white text-base font-bold leading-tight truncate">
                                    1984</p>
                                <p
                                    class="text-[#617589] dark:text-[#9aaab9] text-sm font-medium leading-normal truncate">
                                    George Orwell</p>
                            </div>
                        </div>
                        <!-- Book Card 3 -->
                        <div class="flex flex-col gap-3 group cursor-pointer relative">
                            <div
                                class="relative w-full aspect-[2/3] overflow-hidden rounded-lg shadow-sm group-hover:shadow-xl transition-shadow">
                                <div class="w-full h-full bg-center bg-no-repeat bg-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Book cover of To Kill a Mockingbird showing mockingbird silhouette"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCh7HZwxjTb6qEuIsjFrNmImrlhTKNTTtJkbAV9NSUFCAQdTlDbtso8Z2xWUwFp3j5jWQjY6MI3V0BElaWWPhveqgToOWse530G-U8xxWZeL7G3NpPbeZpcEW1F3CmKmwLCxbJd1yufrmnlJyMLKebecd3eTf4ZSxpQQS_z4CIBMSstTcb2v1mHTJ6nE3v-gHRNhMgV9gDCHyfVK2glz4W5XO8II_yhJQ5m1A4fvYq62-_iKopGu_AbvvTWyCO1UM_cojCzpn_3MIQ1");'>
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="text-white text-sm font-bold bg-primary px-3 py-1 rounded-full">Login
                                        to Borrow</span>
                                </div>
                            </div>
                            <div>
                                <p class="text-[#111418] dark:text-white text-base font-bold leading-tight truncate">
                                    To Kill a Mockingbird</p>
                                <p
                                    class="text-[#617589] dark:text-[#9aaab9] text-sm font-medium leading-normal truncate">
                                    Harper Lee</p>
                            </div>
                        </div>
                        <!-- Book Card 4 -->
                        <div class="flex flex-col gap-3 group cursor-pointer relative">
                            <div
                                class="relative w-full aspect-[2/3] overflow-hidden rounded-lg shadow-sm group-hover:shadow-xl transition-shadow">
                                <div class="w-full h-full bg-center bg-no-repeat bg-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Book cover of Pride and Prejudice showing classical illustration"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCM5rbfqs5cmT-aCXgjs0iPjQUfXaeNI27x-3PzPMRiQrapHuorGn-I5509jvxtkrGs3DqcobFtUcAlljJHlwBFpZITCvzoqTBuFbTZW1AScpmDPVc0lkQaFLJCD0QGQVXOPNnFo6zx0MvdIS3LyC7vetYmGRlSJ4FrUcSP4FxRr1ELzqLUquIYv5wJJJxPTDxl4Wf_qnNYGszVcvVN6sI9CzwVNiEgOO-AsNnKGhsktnXB8uP1ogovwHNmHDxrdByFNT4d8VQtwpc1");'>
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="text-white text-sm font-bold bg-primary px-3 py-1 rounded-full">Login
                                        to Borrow</span>
                                </div>
                            </div>
                            <div>
                                <p class="text-[#111418] dark:text-white text-base font-bold leading-tight truncate">
                                    Pride and Prejudice</p>
                                <p
                                    class="text-[#617589] dark:text-[#9aaab9] text-sm font-medium leading-normal truncate">
                                    Jane Austen</p>
                            </div>
                        </div>
                        <!-- Book Card 5 -->
                        <div class="flex flex-col gap-3 group cursor-pointer relative hidden sm:flex">
                            <div
                                class="relative w-full aspect-[2/3] overflow-hidden rounded-lg shadow-sm group-hover:shadow-xl transition-shadow">
                                <div class="w-full h-full bg-center bg-no-repeat bg-cover transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Book cover of The Catcher in the Rye showing red carousel horse"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCq8PzFD67Tj7PTJVD98O4_Yv-DIGW3tjDDX0xSQtKLOvy77-Ab_MTWOywENtPaYaheAH9576LxIP7zJhoyv-W_lia2p1aON8qTRlfvwxbvGevI-oNs-QItyhCDKL26XbSmTiHWmqK9ZPYvKIYdZGsVQx3DHntueGMfZh3SdnZ7nb5iPa05B-6ZvXLXJD2r0XMVa26DfiKJZs_teSz3IDy9_S3sRPzhz-9f4PDvEDXKmMKqsv5IBQFd0IRUVnbe5xgY8m-0upI7Aoq4");'>
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <span class="text-white text-sm font-bold bg-primary px-3 py-1 rounded-full">Login
                                        to Borrow</span>
                                </div>
                            </div>
                            <div>
                                <p class="text-[#111418] dark:text-white text-base font-bold leading-tight truncate">
                                    The Catcher in the Rye</p>
                                <p
                                    class="text-[#617589] dark:text-[#9aaab9] text-sm font-medium leading-normal truncate">
                                    J.D. Salinger</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endlayout