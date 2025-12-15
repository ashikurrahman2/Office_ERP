<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>রেজিস্ট্রেশন - Office ERP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-purple-50 via-white to-blue-50 min-h-screen flex items-center justify-center p-4">
    
    <div class="w-full max-w-2xl">
        <!-- Logo & Title -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-full mb-4">
                <i class="fas fa-building text-white text-2xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-800">Office ERP</h1>
            <p class="text-gray-600 mt-2">নতুন অ্যাকাউন্ট তৈরি করুন</p>
        </div>

        <!-- Signup Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <!-- Error/Success Messages -->
            @if ($errors->any())
                <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-700">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-700">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Personal Information -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                        <i class="fas fa-user-circle mr-2 text-blue-600"></i>
                        ব্যক্তিগত তথ্য
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Full Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                পূর্ণ নাম *
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name"
                                value="{{ old('name') }}"
                                required
                                placeholder="আপনার নাম লিখুন"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none @error('name') border-red-500 @enderror"
                            >
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phonenumber" class="block text-sm font-medium text-gray-700 mb-2">
                                মোবাইল নম্বর
                            </label>
                            <input 
                                type="tel" 
                                id="phonenumber" 
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="০১XXXXXXXXX"
                                pattern="[0-9]{11}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none"
                            >
                        </div>
                    </div>
                </div>

                <!-- Company Information -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                        <i class="fas fa-building mr-2 text-blue-600"></i>
                        কোম্পানি তথ্য
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Company Name -->
                        <div>
                            <label for="company_name" class="block text-sm font-medium text-gray-700 mb-2">
                                কোম্পানির নাম
                            </label>
                            <input 
                                type="text" 
                                id="company_name" 
                                name="company_name"
                                value="{{ old('company_name') }}"
                                placeholder="কোম্পানির নাম"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none"
                            >
                        </div>

                        <!-- Company Size (Employees) -->
                        <div>
                            <label for="employeres" class="block text-sm font-medium text-gray-700 mb-2">
                                কর্মচারী সংখ্যা
                            </label>
                            <select 
                                id="employeres" 
                                name="employeres"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none"
                            >
                                <option value="">নির্বাচন করুন</option>
                                <option value="1-10" {{ old('employeres') == '1-10' ? 'selected' : '' }}>১-১০</option>
                                <option value="11-50" {{ old('employeres') == '11-50' ? 'selected' : '' }}>১১-৫০</option>
                                <option value="51-200" {{ old('employeres') == '51-200' ? 'selected' : '' }}>৫১-২০০</option>
                                <option value="201-500" {{ old('employeres') == '201-500' ? 'selected' : '' }}>২০১-৫০০</option>
                                <option value="500+" {{ old('employeres') == '500+' ? 'selected' : '' }}>৫০০+</option>
                            </select>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="mt-4">
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                            ঠিকানা
                        </label>
                        <textarea 
                            id="address" 
                            name="address_details"
                            rows="2"
                            placeholder="আপনার ঠিকানা লিখুন"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none"
                        >{{ old('address_details') }}</textarea>
                    </div>
                </div>

                <!-- Account Information -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                        <i class="fas fa-lock mr-2 text-blue-600"></i>
                        অ্যাকাউন্ট তথ্য
                    </h3>
                    
                    <div class="grid grid-cols-1 gap-4">
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                ইমেইল অ্যাড্রেস *
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="আপনার ইমেইল"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none @error('email') border-red-500 @enderror"
                            >
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Password -->
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                    পাসওয়ার্ড *
                                </label>
                                <div class="relative">
                                    <input 
                                        type="password" 
                                        id="password" 
                                        name="password"
                                        required
                                        placeholder="পাসওয়ার্ড তৈরি করুন"
                                        minlength="8"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none pr-12 @error('password') border-red-500 @enderror"
                                    >
                                    <button 
                                        type="button" 
                                        id="togglePassword"
                                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600"
                                    >
                                        <i class="fas fa-eye" id="eyeIcon"></i>
                                    </button>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">কমপক্ষে ৮ অক্ষর</p>
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                                    পাসওয়ার্ড নিশ্চিত করুন *
                                </label>
                                <div class="relative">
                                    <input 
                                        type="password" 
                                        id="password_confirmation" 
                                        name="password_confirmation"
                                        required
                                        placeholder="পাসওয়ার্ড পুনরায় লিখুন"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition outline-none pr-12"
                                    >
                                    <button 
                                        type="button" 
                                        id="toggleConfirmPassword"
                                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600"
                                    >
                                        <i class="fas fa-eye" id="eyeIconConfirm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Password Strength Indicator -->
                <div id="passwordStrength" class="mb-6 hidden">
                    <div class="flex items-center space-x-2 mb-2">
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div id="strengthBar" class="h-full transition-all duration-300"></div>
                        </div>
                        <span id="strengthText" class="text-sm font-medium"></span>
                    </div>
                </div>

                <!-- Signup Button -->
                <button 
                    type="submit" 
                    id="signupBtn"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition duration-200 flex items-center justify-center"
                >
                    <span id="btnText">রেজিস্ট্রেশন করুন</span>
                    <i class="fas fa-user-plus ml-2"></i>
                </button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    ইতিমধ্যে অ্যাকাউন্ট আছে? 
                    <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-medium">লগইন করুন</a>
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

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            if (type === 'text') {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });

        // Toggle confirm password visibility
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const confirmPasswordInput = document.getElementById('password_confirmation');
        const eyeIconConfirm = document.getElementById('eyeIconConfirm');

        toggleConfirmPassword.addEventListener('click', () => {
            const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordInput.setAttribute('type', type);
            
            if (type === 'text') {
                eyeIconConfirm.classList.remove('fa-eye');
                eyeIconConfirm.classList.add('fa-eye-slash');
            } else {
                eyeIconConfirm.classList.remove('fa-eye-slash');
                eyeIconConfirm.classList.add('fa-eye');
            }
        });

        // Password strength checker
        const strengthIndicator = document.getElementById('passwordStrength');
        const strengthBar = document.getElementById('strengthBar');
        const strengthText = document.getElementById('strengthText');

        passwordInput.addEventListener('input', () => {
            const password = passwordInput.value;
            
            if (password.length === 0) {
                strengthIndicator.classList.add('hidden');
                return;
            }
            
            strengthIndicator.classList.remove('hidden');
            
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (password.length >= 12) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;
            
            if (strength <= 2) {
                strengthBar.className = 'h-full transition-all duration-300 bg-red-500';
                strengthBar.style.width = '33%';
                strengthText.textContent = 'দুর্বল';
                strengthText.className = 'text-sm font-medium text-red-500';
            } else if (strength <= 4) {
                strengthBar.className = 'h-full transition-all duration-300 bg-yellow-500';
                strengthBar.style.width = '66%';
                strengthText.textContent = 'মধ্যম';
                strengthText.className = 'text-sm font-medium text-yellow-500';
            } else {
                strengthBar.className = 'h-full transition-all duration-300 bg-green-500';
                strengthBar.style.width = '100%';
                strengthText.textContent = 'শক্তিশালী';
                strengthText.className = 'text-sm font-medium text-green-500';
            }
        });

        // Form submission with loading state
        const signupForm = document.querySelector('form');
        const signupBtn = document.getElementById('signupBtn');
        const btnText = document.getElementById('btnText');

        signupForm.addEventListener('submit', (e) => {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('পাসওয়ার্ড মিলছে না');
                return false;
            }

            // Show loading state
            signupBtn.disabled = true;
            btnText.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>রেজিস্ট্রেশন হচ্ছে...';
        });
    </script>
</body>
</html>