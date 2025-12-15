<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>লগইন - Office ERP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen flex items-center justify-center p-4">
    
    <div class="w-full max-w-md">
        <!-- Logo & Title -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-full mb-4">
                <i class="fas fa-building text-white text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-800">Office ERP</h1>
            <p class="text-gray-600 mt-2">আপনার অ্যাকাউন্টে লগইন করুন</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8">

            <!-- Message Box (Laravel errors + custom messages) -->
            <div id="message" class="hidden mb-6 p-4 rounded-lg flex items-center"></div>

            <!-- Laravel Session Status (যদি থাকে) -->
            @if (session('status'))
                <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-700 flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('status') }}
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" id="loginForm">
                @csrf

                <!-- Email Input -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-envelope mr-2 text-gray-400"></i>ইমেইল অ্যাড্রেস
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        placeholder="আপনার ইমেইল লিখুন"
                        class="w-full px-4 py-3 border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none"
                    >
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-lock mr-2 text-gray-400"></i>পাসওয়ার্ড
                    </label>
                    <div class="relative">
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="আপনার পাসওয়ার্ড লিখুন"
                            class="w-full px-4 py-3 border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none pr-12"
                        >
                        <button 
                            type="button" 
                            id="togglePassword"
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600"
                        >
                            <i class="fas fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input 
                            type="checkbox" 
                            name="remember"
                            id="remember"
                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
                        >
                        <span class="ml-2 text-sm text-gray-600">মনে রাখুন</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                            পাসওয়ার্ড ভুলে গেছেন?
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <button 
                    type="submit" 
                    id="loginBtn"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition duration-200 flex items-center justify-center"
                >
                    <span id="btnText">লগইন করুন</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-500">অথবা</span>
                </div>
            </div>

            <!-- Social Login Buttons (যদি লাগে তাহলে পরে API যোগ করবেন) -->
            <div class="grid grid-cols-2 gap-4">
                <button type="button" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                    <i class="fab fa-google text-red-500 mr-2"></i>
                    <span class="text-sm font-medium">Google</span>
                </button>
                <button type="button" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                    <i class="fab fa-microsoft text-blue-500 mr-2"></i>
                    <span class="text-sm font-medium">Microsoft</span>
                </button>
            </div>

            <!-- Sign Up Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    অ্যাকাউন্ট নেই? 
                    <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 font-medium">রেজিস্ট্রেশন করুন</a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 text-sm text-gray-500">
            <p>© {{ date('Y') }} Office ERP. সর্বস্বত্ব সংরক্ষিত।</p>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        if (togglePassword) {
            togglePassword.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                if (type === 'text') {
                    eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
        }

        // Button loading state when form submits
        const loginForm = document.getElementById('loginForm');
        const loginBtn = document.getElementById('loginBtn');
        const btnText = document.getElementById('btnText');
        const messageBox = document.getElementById('message');

        loginForm.addEventListener('submit', function () {
            loginBtn.disabled = true;
            btnText.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>লগইন হচ্ছে...';
        });

        // Laravel validation errors থাকলে message box-এ দেখানো (ঐচ্ছিক)
        @if ($errors->any())
            messageBox.classList.remove('hidden');
            messageBox.classList.add('bg-red-100', 'text-red-700');
            messageBox.innerHTML = '<i class="fas fa-exclamation-circle mr-2"></i> {{ $errors->first() }}';
        @endif
    </script>
</body>
</html>