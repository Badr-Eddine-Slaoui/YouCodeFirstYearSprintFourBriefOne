@layout('templates.layout')
<div
    class="font-display bg-background-light dark:bg-background-dark text-[#111418] dark:text-white min-h-screen flex flex-col antialiased">
    <main class="flex-grow flex items-center justify-center p-4 sm:p-6 lg:p-8">
        <div
            class="w-full max-w-5xl bg-white dark:bg-[#1a2632] rounded-xl shadow-xl overflow-hidden flex flex-col md:flex-row min-h-[600px]">
            <!-- Left Side: Image/Branding -->
            <div class="hidden md:flex w-1/2 relative bg-primary/10 items-center justify-center overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img alt="Library interior with warm lighting and rows of books"
                        class="w-full h-full object-cover opacity-90 brightness-75"
                        data-alt="Library interior with warm lighting and rows of books"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5IV0q7YEdxNYx9LsP2MSgG7lFamFooN-xl3XRIkYmV2EfYlUXmVoTD_25oqVsR2-tuzjnmpxf5KaU8H2doPffYtPb7l1tEk80c5ecWqqDs0qpMGCDxHe3-gNPG4Nl3nCMflNZQ9BrcO2jg7o2LSP8DNPfLQaGtLrUb8UY_Ro8o_MinXkA7fmjU3GNI_JpSXiF9xWMxsxprx3ETDXk4qkSOz6UUgTGXQPsDsEn8USQhRXfi6Voz-5XQw9wELKYERu5RrEjwhO0vGfB" />
                </div>
                <div class="relative z-10 p-12 text-white">
                    <h3 class="text-4xl font-bold mb-4 leading-tight">Expand your mind,<br />one book at a time.</h3>
                    <p class="text-lg opacity-90 font-light">Join our community of avid readers and gain access to
                        thousands of resources instantly.</p>
                </div>
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-0"></div>
            </div>
            <!-- Right Side: Sign Up Form -->
            <div class="w-full md:w-1/2 p-8 lg:p-12 flex flex-col justify-center relative">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-[#111418] dark:text-white mb-2">Join the Library</h1>
                    <p class="text-gray-500 dark:text-gray-400">Start your journey. Sign up as a Reader today.</p>
                </div>
                <!-- Form -->
                <form method="POST" action="@route('registerSubmit')" class="flex flex-col gap-5">
                    <!-- Names Row -->
                    <div class="flex flex-col sm:flex-row gap-5">
                        <label class="flex flex-col flex-1">
                            <span
                                class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal pb-2">First
                                Name</span>
                            <input autofocus=""
                                class="form-input flex w-full rounded-lg text-[#111418] dark:text-white border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-[#23303e] focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 text-base placeholder:text-[#617589] dark:placeholder:text-gray-500 transition-colors"
                                placeholder="Jane" name="firstName" type="text" />
                                @error('firstName') 
                                    <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                                @enderror
                        </label>
                        <label class="flex flex-col flex-1">
                            <span class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal pb-2">Last
                                Name</span>
                            <input
                                class="form-input flex w-full rounded-lg text-[#111418] dark:text-white border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-[#23303e] focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 text-base placeholder:text-[#617589] dark:placeholder:text-gray-500 transition-colors"
                                placeholder="Doe" name="lastName" type="text" />
                                @error('lastName') 
                                    <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                                @enderror
                        </label>
                    </div>
                    <!-- Email -->
                    <label class="flex flex-col w-full">
                        <span class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal pb-2">Email
                            Address</span>
                        <div class="relative">
                            <input
                                class="form-input flex w-full rounded-lg text-[#111418] dark:text-white border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-[#23303e] focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 text-base placeholder:text-[#617589] dark:placeholder:text-gray-500 transition-colors"
                                placeholder="jane@example.com" name="email" type="email" />
                            <!-- Validation Icon Example (Success) -->
                            <span
                                class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-green-500 text-xl hidden">check_circle</span>
                        </div>
                        @error('email') 
                            <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                        @enderror
                    </label>
                    <!-- Password -->
                    <label class="flex flex-col w-full">
                        <span
                            class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal pb-2">Password</span>
                        <div class="relative group">
                            <input
                                class="form-input flex w-full rounded-lg text-[#111418] dark:text-white border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-[#23303e] focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 text-base placeholder:text-[#617589] dark:placeholder:text-gray-500 pr-10 transition-colors"
                                placeholder="••••••••" name="password" type="password" />
                            <button
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary transition-colors focus:outline-none"
                                type="button">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                        <p class="text-xs text-gray-500 mt-2">Must be at least 8 characters long.</p>
                        @error('password') 
                            <p class="text-red-500 text-xs my-2">{{ $message }}</p> 
                        @enderror
                    </label>
                    <!-- Confirm Password -->
                    <label class="flex flex-col w-full">
                        <span
                            class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal pb-2">Confirm Password</span>
                        <div class="relative group">
                            <input
                                class="form-input flex w-full rounded-lg text-[#111418] dark:text-white border border-[#dbe0e6] dark:border-gray-600 bg-white dark:bg-[#23303e] focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 text-base placeholder:text-[#617589] dark:placeholder:text-gray-500 pr-10 transition-colors"
                                placeholder="••••••••" name="password_confirmation" type="password" />
                            <button
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary transition-colors focus:outline-none"
                                type="button">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                    </label>
                    <!-- Terms Checkbox (Implicit Role: Reader) -->
                    <div class="flex items-start gap-3 mt-2">
                        <div class="flex h-6 items-center">
                            <input
                                class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary dark:border-gray-600 dark:bg-gray-700"
                                id="terms" name="terms" type="checkbox" />
                        </div>
                        <div class="text-sm leading-6">
                            <label class="font-medium text-[#111418] dark:text-gray-300" for="terms">I agree to the <a
                                    class="text-primary hover:underline" href="#">Terms of Service</a> and <a
                                    class="text-primary hover:underline" href="#">Privacy Policy</a>.</label>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button
                        class="mt-4 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-4 bg-primary hover:bg-blue-600 text-white text-base font-bold leading-normal tracking-[0.015em] transition-colors shadow-sm hover:shadow-md"
                        type="submit">
                        <span class="truncate">Create Account</span>
                    </button>
                </form>
                <!-- Footer Link -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Already a member?
                        <a class="font-bold text-primary hover:text-blue-600 transition-colors" href="@route('login')">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
</div>
@endlayout