@layout('templates.layout')
<div class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col antialiased selection:bg-primary/20 selection:text-primary">
    <div class="flex min-h-screen w-full flex-row">
        <!-- Left Side: Hero / Image Section -->
        <div class="hidden lg:flex w-1/2 relative bg-primary/5 flex-col items-center justify-center overflow-hidden">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img alt="Interior of a modern library with rows of books and warm lighting"
                    class="h-full w-full object-cover opacity-90"
                    data-alt="Interior of a modern library with rows of books and warm lighting"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuABXNyHFTesCqGl5Go1RhwxPq-ylpsgAGkF9Wn4d6Bt67UcQhKY0_8Gf8oNXgZ2eWXcUF6HlAcmtOj2NyZ4zhAtlhEPN3ikKQ-4BPv8soc7vEzemh43wXypwXKVsnaO9Uq9CS5JiAlrTsdwoL6lNf_myfns4A4MJz91p3JP9ou2I-3emwQne1s4bddK9-OE9s4U0n71pSyg5fbKpvGlk6J8Kcqdo7RN1CgTHuzlmT1zwOCjAPCwTEhnepynSC8_CryhPh1n3OtEvfKQ" />
                <div class="absolute inset-0 bg-primary/40 mix-blend-multiply"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            </div>
            <!-- Content overlay -->
            <div class="relative z-10 p-16 flex flex-col h-full justify-between w-full text-white">
                <div class="flex items-center gap-3">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-lg bg-white/20 backdrop-blur-sm border border-white/10">
                        <span class="material-symbols-outlined text-white" style="font-size: 24px;">local_library</span>
                    </div>
                    <span class="text-xl font-bold tracking-tight">LMS Portal</span>
                </div>
                <div class="max-w-lg mb-10">
                    <blockquote class="text-3xl font-bold leading-tight mb-6">
                        "A library is not a luxury but one of the necessities of life."
                    </blockquote>
                    <p class="text-lg text-white/80 font-medium">— Henry Ward Beecher</p>
                </div>
            </div>
        </div>
        <!-- Right Side: Login Form -->
        <div
            class="flex flex-1 flex-col items-center justify-center px-4 py-12 sm:px-6 lg:px-20 xl:px-24 bg-white dark:bg-slate-900 transition-colors duration-200">
            <div class="w-full max-w-sm space-y-8">
                <!-- Mobile Logo (visible only on small screens) -->
                <div class="lg:hidden flex justify-center mb-6">
                    <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-primary/10 text-primary">
                        <span class="material-symbols-outlined" style="font-size: 32px;">local_library</span>
                    </div>
                </div>
                <!-- Header -->
                <div class="flex flex-col gap-2 text-center lg:text-left">
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">
                        Library Portal
                    </h1>
                    <p class="text-slate-500 dark:text-slate-400 text-sm">
                        Welcome back! Please enter your details to access the catalog.
                    </p>
                </div>
                @if(session()->has('error'))
                    <div
                        class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-3 flex items-start gap-3">
                        <span class="material-symbols-outlined text-red-600 dark:text-red-400 shrink-0 mt-0.5"
                            style="font-size: 20px;">error</span>
                        <div class="text-sm text-red-700 dark:text-red-300">
                            <p class="font-medium">{{ session()->getFlash('error') }}</p>
                            <p>Please check your email and password.</p>
                        </div>
                    </div>
                @endif
                <!-- Form -->
                <form action="@route('loginSubmit')" class="space-y-6" method="POST">
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label class="block text-sm font-medium leading-6 text-slate-900 dark:text-slate-200" for="email">
                            Email Address
                        </label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="material-symbols-outlined text-slate-400" style="font-size: 20px;">mail</span>
                            </div>
                            <input
                                class="block w-full rounded-lg border-0 py-3 pl-10 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:bg-slate-800 dark:ring-slate-700 dark:text-white dark:placeholder:text-slate-500 sm:text-sm sm:leading-6"
                                id="email" name="email" placeholder="name@library.com" type="email" value="" />
                        </div>
                        @error('email') 
                            <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                        @enderror
                    </div>
                    <!-- Password Field -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <label class="block text-sm font-medium leading-6 text-slate-900 dark:text-slate-200"
                                for="password">
                                Password
                            </label>
                        </div>
                        <div class="relative rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="material-symbols-outlined text-slate-400" style="font-size: 20px;">lock</span>
                            </div>
                            <input
                                class="block w-full rounded-lg border-0 py-3 pl-10 pr-10 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:bg-slate-800 dark:ring-slate-700 dark:text-white dark:placeholder:text-slate-500 sm:text-sm sm:leading-6"
                                id="password" name="password" placeholder="••••••••" type="password" value="" />
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer group">
                                <span
                                    class="material-symbols-outlined text-slate-400 group-hover:text-slate-600 dark:group-hover:text-slate-300 transition-colors"
                                    style="font-size: 20px;">visibility_off</span>
                            </div>
                        </div>
                        @error('password') 
                            <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                        @enderror
                    </div>
                    <!-- Actions Row -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input
                                class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary dark:border-slate-600 dark:bg-slate-700"
                                id="remember-me" name="remember-me" type="checkbox" />
                            <label class="ml-2 block text-sm text-slate-700 dark:text-slate-300" for="remember-me">
                                Remember for 30 days
                            </label>
                        </div>
                        <div class="text-sm">
                            <a class="font-medium text-primary hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                                href="#">
                                Forgot password?
                            </a>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div>
                        <button
                            class="flex w-full justify-center rounded-lg bg-primary px-3 py-3 text-sm font-bold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-all active:scale-[0.98]"
                            type="submit">
                            Sign In
                        </button>
                    </div>
                </form>
                <!-- Footer / Sign Up -->
                <div class="mt-6 text-center text-sm text-slate-500 dark:text-slate-400">
                    <p>
                        Don't have an account?
                        <a class="font-semibold leading-6 text-primary hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                            href="@route('register')">
                            Apply for membership
                        </a>
                    </p>
                </div>
                <!-- Footer Links (Privacy/Terms) -->
                <div class="mt-8 border-t border-slate-200 dark:border-slate-800 pt-6">
                    <div class="flex justify-center gap-6 text-xs text-slate-400 dark:text-slate-500">
                        <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#">Privacy Policy</a>
                        <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#">Terms of Service</a>
                        <a class="hover:text-slate-600 dark:hover:text-slate-300" href="#">Help Center</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endlayout