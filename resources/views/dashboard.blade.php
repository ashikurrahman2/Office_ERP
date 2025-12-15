<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office ERP System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Top Navigation -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="px-4 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <button id="menuBtn" class="lg:hidden text-gray-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h1 class="text-xl lg:text-2xl font-bold text-blue-600">
                        <i class="fas fa-building"></i> Office ERP
                    </h1>
                </div>
                
                <div class="flex items-center space-x-2 lg:space-x-4">
                    <div class="relative hidden md:block">
                        <input type="text" placeholder="সার্চ করুন..." 
                            class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    
                    <button class="relative text-gray-600 hover:text-blue-600">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center">3</span>
                    </button>
                    
                    <div class="flex items-center space-x-2 cursor-pointer">
                        <img src="https://ui-avatars.com/api/?name=User&background=3b82f6&color=fff" 
                            class="w-8 h-8 lg:w-10 lg:h-10 rounded-full">
                        <div class="hidden md:block">
                            <p class="text-sm font-semibold">অ্যাডমিন</p>
                            <p class="text-xs text-gray-500">admin@company.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed left-0 top-16 h-full w-64 bg-white shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-40 overflow-y-auto">
        <div class="p-4">
            <nav class="space-y-2">
                <a href="#dashboard" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition nav-link">
                    <i class="fas fa-home w-5"></i>
                    <span>ড্যাশবোর্ড</span>
                </a>
                
                <div class="pt-4 pb-2 px-4 text-xs font-semibold text-gray-400 uppercase">মূল মডিউল</div>
                
                <a href="#hr" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition nav-link">
                    <i class="fas fa-users w-5"></i>
                    <span>HR ম্যানেজমেন্ট</span>
                </a>
                
                <a href="#accounting" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition nav-link">
                    <i class="fas fa-calculator w-5"></i>
                    <span>একাউন্টিং</span>
                </a>
                
                <a href="#project" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition nav-link">
                    <i class="fas fa-project-diagram w-5"></i>
                    <span>প্রজেক্ট</span>
                </a>
                
                <a href="#inventory" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition nav-link">
                    <i class="fas fa-box w-5"></i>
                    <span>ইনভেন্টরি</span>
                </a>
                
                <a href="#crm" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition nav-link">
                    <i class="fas fa-handshake w-5"></i>
                    <span>CRM</span>
                </a>
                
                <a href="#documents" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition nav-link">
                    <i class="fas fa-file-alt w-5"></i>
                    <span>ডকুমেন্ট</span>
                </a>
                
                <div class="pt-4 pb-2 px-4 text-xs font-semibold text-gray-400 uppercase">সেটিংস</div>
                
                <a href="#settings" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition">
                    <i class="fas fa-cog w-5"></i>
                    <span>সেটিংস</span>
                </a>
                
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="{{ route('logout') }}"
   class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-red-50 hover:text-red-600 transition"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fas fa-sign-out-alt w-5"></i>
    <span>লগআউট</span>
</a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="lg:ml-64 mt-16 p-4 lg:p-8">
        
        <!-- Dashboard Section -->
        <div id="dashboard" class="content-section">
            <div class="mb-6">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-800">ড্যাশবোর্ড</h2>
                <p class="text-gray-600">আপনার ব্যবসার সম্পূর্ণ ওভারভিউ</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-8">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-blue-100 text-sm">মোট কর্মচারী</p>
                            <h3 class="text-3xl font-bold mt-2">১২৫</h3>
                            <p class="text-blue-100 text-xs mt-2">
                                <i class="fas fa-arrow-up"></i> +৫ এই মাসে
                            </p>
                        </div>
                        <i class="fas fa-users text-5xl opacity-20"></i>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-green-100 text-sm">মাসিক আয়</p>
                            <h3 class="text-3xl font-bold mt-2">৳৫.২ লক্ষ</h3>
                            <p class="text-green-100 text-xs mt-2">
                                <i class="fas fa-arrow-up"></i> +১২% গত মাস
                            </p>
                        </div>
                        <i class="fas fa-dollar-sign text-5xl opacity-20"></i>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-purple-100 text-sm">চলমান প্রজেক্ট</p>
                            <h3 class="text-3xl font-bold mt-2">১৮</h3>
                            <p class="text-purple-100 text-xs mt-2">
                                <i class="fas fa-check"></i> ৫টি সম্পন্ন
                            </p>
                        </div>
                        <i class="fas fa-tasks text-5xl opacity-20"></i>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-orange-100 text-sm">পেন্ডিং টাস্ক</p>
                            <h3 class="text-3xl font-bold mt-2">৩২</h3>
                            <p class="text-orange-100 text-xs mt-2">
                                <i class="fas fa-clock"></i> আজকের
                            </p>
                        </div>
                        <i class="fas fa-clipboard-list text-5xl opacity-20"></i>
                    </div>
                </div>
            </div>

            <!-- Charts & Recent Activities -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Revenue Chart -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-lg font-semibold mb-4">মাসিক আয়-ব্যয়</h3>
                    <div class="h-64 flex items-end justify-between space-x-2">
                        <div class="flex-1 bg-blue-500 rounded-t hover:bg-blue-600 transition" style="height: 65%"></div>
                        <div class="flex-1 bg-blue-500 rounded-t hover:bg-blue-600 transition" style="height: 80%"></div>
                        <div class="flex-1 bg-blue-500 rounded-t hover:bg-blue-600 transition" style="height: 55%"></div>
                        <div class="flex-1 bg-blue-500 rounded-t hover:bg-blue-600 transition" style="height: 90%"></div>
                        <div class="flex-1 bg-blue-500 rounded-t hover:bg-blue-600 transition" style="height: 75%"></div>
                        <div class="flex-1 bg-blue-500 rounded-t hover:bg-blue-600 transition" style="height: 85%"></div>
                    </div>
                    <div class="flex justify-between mt-2 text-sm text-gray-600">
                        <span>জুলাই</span>
                        <span>আগস্ট</span>
                        <span>সেপ্টেম্বর</span>
                        <span>অক্টোবর</span>
                        <span>নভেম্বর</span>
                        <span>ডিসেম্বর</span>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-lg font-semibold mb-4">সাম্প্রতিক কার্যক্রম</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                            <div>
                                <p class="text-sm font-medium">নতুন কর্মচারী যুক্ত হয়েছে</p>
                                <p class="text-xs text-gray-500">২ ঘন্টা আগে</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full mt-2"></div>
                            <div>
                                <p class="text-sm font-medium">প্রজেক্ট সম্পন্ন হয়েছে</p>
                                <p class="text-xs text-gray-500">৫ ঘন্টা আগে</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                            <div>
                                <p class="text-sm font-medium">নতুন ইনভয়েস তৈরি</p>
                                <p class="text-xs text-gray-500">১ দিন আগে</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                            <div>
                                <p class="text-sm font-medium">পেমেন্ট রিসিভ করা হয়েছে</p>
                                <p class="text-xs text-gray-500">২ দিন আগে</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HR Management Section -->
        <div id="hr" class="content-section hidden">
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800">HR ম্যানেজমেন্ট</h2>
                    <p class="text-gray-600">কর্মচারী ও উপস্থিতি ব্যবস্থাপনা</p>
                </div>
                <button class="mt-4 md:mt-0 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-plus mr-2"></i>নতুন কর্মচারী
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow p-4">
                    <p class="text-gray-600 text-sm">মোট কর্মচারী</p>
                    <h3 class="text-2xl font-bold text-blue-600">১২৫</h3>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <p class="text-gray-600 text-sm">আজ উপস্থিত</p>
                    <h3 class="text-2xl font-bold text-green-600">১১৮</h3>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <p class="text-gray-600 text-sm">ছুটিতে</p>
                    <h3 class="text-2xl font-bold text-orange-600">৫</h3>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <p class="text-gray-600 text-sm">অনুপস্থিত</p>
                    <h3 class="text-2xl font-bold text-red-600">২</h3>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">কর্মচারী</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">পদবি</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">বিভাগ</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">স্ট্যাটাস</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">একশন</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="https://ui-avatars.com/api/?name=Karim+Ahmed&background=3b82f6&color=fff" class="w-10 h-10 rounded-full">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">করিম আহমেদ</div>
                                            <div class="text-sm text-gray-500">karim@company.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">সিনিয়র ডেভেলপার</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">IT</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">উপস্থিত</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="https://ui-avatars.com/api/?name=Fatima+Khan&background=ec4899&color=fff" class="w-10 h-10 rounded-full">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">ফাতিমা খান</div>
                                            <div class="text-sm text-gray-500">fatima@company.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">HR ম্যানেজার</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">HR</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">উপস্থিত</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img src="https://ui-avatars.com/api/?name=Rahim+Islam&background=10b981&color=fff" class="w-10 h-10 rounded-full">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">রহিম ইসলাম</div>
                                            <div class="text-sm text-gray-500">rahim@company.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">একাউন্ট্যান্ট</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Finance</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">ছুটিতে</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Accounting Section -->
        <div id="accounting" class="content-section hidden">
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800">একাউন্টিং ও ফিন্যান্স</h2>
                    <p class="text-gray-600">আর্থিক লেনদেন ও রিপোর্ট</p>
                </div>
                <button class="mt-4 md:mt-0 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-plus mr-2"></i>নতুন ইনভয়েস
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">মোট আয়</p>
                            <h3 class="text-2xl font-bold text-green-600 mt-2">৳১২,৫০,০০০</h3>
                            <p class="text-xs text-gray-500 mt-1">এই মাসে</p>
                        </div>
                        <i class="fas fa-arrow-up text-3xl text-green-500"></i>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">মোট ব্যয়</p>
                            <h3 class="text-2xl font-bold text-red-600 mt-2">৳৭,২০,০০০</h3>
                            <p class="text-xs text-gray-500 mt-1">এই মাসে</p>
                        </div>
                        <i class="fas fa-arrow-down text-3xl text-red-500"></i>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">নিট লাভ</p>
                            <h3 class="text-2xl font-bold text-blue-600 mt-2">৳৫,৩০,০০০</h3>
                            <p class="text-xs text-gray-500 mt-1">এই মাসে</p>
                        </div>
                        <i class="fas fa-chart-line text-3xl text-blue-500"></i>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-lg font-semibold mb-4">সাম্প্রতিক ইনভয়েস</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <p class="font-medium">INV-2024-001</p>
                                <p class="text-sm text-gray-500">ABC কোম্পানি</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-green-600">৳৫০,০০০</p>
                                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">পেইড</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <p class="font-medium">INV-2024-002</p>
                                <p class="text-sm text-gray-500">XYZ এন্টারপ্রাইজ</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-orange-600">৳৩৫,০০০</p>
                                <span class="text-xs bg-orange-100 text-orange-800 px-2 py-1 rounded">পেন্ডিং</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <p class="font-medium">INV-2024-003</p>
                                <p class="text-sm text-gray-500">PQR লিমিটেড</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-green-600">৳৭৫,০০০</p>
                                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">পেইড</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-lg font-semibold mb-4">ব্যয়ের ক্যাটাগরি</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm">বেতন</span>
                                <span class="text-sm font-semibold">৪৫%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 45%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm">অফিস খরচ</span>
                                <span class="text-sm font-semibold">২৫%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" style="width: 25%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm">মার্কেটিং</span>
                                <span class="text-sm font-semibold">২০%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-600 h-2 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm">অন্যান্য</span>
                                <span class="text-sm font-semibold">১০%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-orange-600 h-2 rounded-full" style="width: 10%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Management Section -->
        <div id="project" class="content-section hidden">
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800">প্রজেক্ট ম্যানেজমেন্ট</h2>
                    <p class="text-gray-600">সকল প্রজেক্ট ও টাস্ক</p>
                </div>
                <button class="mt-4 md:mt-0 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-plus mr-2"></i>নতুন প্রজেক্ট
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-blue-500">
                    <p class="text-gray-600 text-sm">মোট প্রজেক্ট</p>
                    <h3 class="text-2xl font-bold">২৩</h3>
                </div>
                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-yellow-500">
                    <p class="text-gray-600 text-sm">চলমান</p>
                    <h3 class="text-2xl font-bold">১৮</h3>
                </div>
                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-green-500">
                    <p class="text-gray-600 text-sm">সম্পন্ন</p>
                    <h3 class="text-2xl font-bold">৫</h3>
                </div>
                <div class="bg-white rounded-lg shadow p-4 border-l-4 border-red-500">
                    <p class="text-gray-600 text-sm">বিলম্বিত</p>
                    <h3 class="text-2xl font-bold">২</h3>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-lg">ই-কমার্স ওয়েবসাইট</h3>
                        <span class="text-xs bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full">চলমান</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">একটি সম্পূর্ণ ই-কমার্স সলিউশন ডেভেলপমেন্ট</p>
                    <div class="mb-4">
                        <div class="flex justify-between text-sm mb-2">
                            <span>অগ্রগতি</span>
                            <span class="font-semibold">৬৫%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <div class="flex -space-x-2">
                            <img src="https://ui-avatars.com/api/?name=A&background=3b82f6&color=fff" class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://ui-avatars.com/api/?name=B&background=10b981&color=fff" class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://ui-avatars.com/api/?name=C&background=f59e0b&color=fff" class="w-8 h-8 rounded-full border-2 border-white">
                        </div>
                        <span class="text-gray-500">
                            <i class="far fa-calendar mr-1"></i>২৫ ডিসেম্বর
                        </span>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-lg">মোবাইল অ্যাপ</h3>
                        <span class="text-xs bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full">চলমান</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">অ্যান্ড্রয়েড ও iOS অ্যাপ ডেভেলপমেন্ট</p>
                    <div class="mb-4">
                        <div class="flex justify-between text-sm mb-2">
                            <span>অগ্রগতি</span>
                            <span class="font-semibold">৪০%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <div class="flex -space-x-2">
                            <img src="https://ui-avatars.com/api/?name=D&background=ec4899&color=fff" class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://ui-avatars.com/api/?name=E&background=8b5cf6&color=fff" class="w-8 h-8 rounded-full border-2 border-white">
                        </div>
                        <span class="text-gray-500">
                            <i class="far fa-calendar mr-1"></i>১৫ জানুয়ারি
                        </span>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-lg">ERP সিস্টেম</h3>
                        <span class="text-xs bg-green-100 text-green-800 px-3 py-1 rounded-full">সম্পন্ন</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">অভ্যন্তরীণ ব্যবস্থাপনা সিস্টেম</p>
                    <div class="mb-4">
                        <div class="flex justify-between text-sm mb-2">
                            <span>অগ্রগতি</span>
                            <span class="font-semibold">১০০%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <div class="flex -space-x-2">
                            <img src="https://ui-avatars.com/api/?name=F&background=ef4444&color=fff" class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="https://ui-avatars.com/api/?name=G&background=06b6d4&color=fff" class="w-8 h-8 rounded-full border-2 border-white">
                        </div>
                        <span class="text-gray-500">
                            <i class="far fa-calendar mr-1"></i>সম্পন্ন
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Inventory Section -->
        <div id="inventory" class="content-section hidden">
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800">ইনভেন্টরি ম্যানেজমেন্ট</h2>
                    <p class="text-gray-600">পণ্য ও স্টক ব্যবস্থাপনা</p>
                </div>
                <button class="mt-4 md:mt-0 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-plus mr-2"></i>নতুন পণ্য
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">মোট পণ্য</p>
                            <h3 class="text-2xl font-bold">৩৫০</h3>
                        </div>
                        <i class="fas fa-box text-3xl text-blue-500"></i>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">স্টক ভ্যালু</p>
                            <h3 class="text-2xl font-bold">৳৮.৫ লক্ষ</h3>
                        </div>
                        <i class="fas fa-coins text-3xl text-green-500"></i>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">কম স্টক</p>
                            <h3 class="text-2xl font-bold text-orange-600">১৫</h3>
                        </div>
                        <i class="fas fa-exclamation-triangle text-3xl text-orange-500"></i>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">আউট অফ স্টক</p>
                            <h3 class="text-2xl font-bold text-red-600">৩</h3>
                        </div>
                        <i class="fas fa-times-circle text-3xl text-red-500"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">পণ্য</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">SKU</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">স্টক</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">মূল্য</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">স্ট্যাটাস</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">একশন</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-100 rounded flex items-center justify-center">
                                            <i class="fas fa-laptop text-blue-600"></i>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">ল্যাপটপ</div>
                                            <div class="text-sm text-gray-500">Dell Inspiron</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">LAP-001</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">২৫</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">৳৫৫,০০০</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">স্টকে আছে</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-purple-100 rounded flex items-center justify-center">
                                            <i class="fas fa-mobile-alt text-purple-600"></i>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">স্মার্টফোন</div>
                                            <div class="text-sm text-gray-500">Samsung Galaxy</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">PHN-002</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-orange-600 font-semibold">৮</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">৳৩৫,০০০</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">কম স্টক</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-green-100 rounded flex items-center justify-center">
                                            <i class="fas fa-headphones text-green-600"></i>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">হেডফোন</div>
                                            <div class="text-sm text-gray-500">Sony WH-1000</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">AUD-003</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 font-semibold">০</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">৳১৮,০০০</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">স্টক নেই</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></button>
                                    <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- CRM Section -->
        <div id="crm" class="content-section hidden">
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800">CRM - কাস্টমার ম্যানেজমেন্ট</h2>
                    <p class="text-gray-600">গ্রাহক সম্পর্ক ব্যবস্থাপনা</p>
                </div>
                <button class="mt-4 md:mt-0 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-plus mr-2"></i>নতুন লিড
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-blue-50 rounded-lg p-4 border-l-4 border-blue-500">
                    <p class="text-blue-700 text-sm font-medium">নতুন লিড</p>
                    <h3 class="text-2xl font-bold text-blue-900">৪৫</h3>
                </div>
                <div class="bg-yellow-50 rounded-lg p-4 border-l-4 border-yellow-500">
                    <p class="text-yellow-700 text-sm font-medium">যোগাযোগ করা</p>
                    <h3 class="text-2xl font-bold text-yellow-900">৩২</h3>
                </div>
                <div class="bg-purple-50 rounded-lg p-4 border-l-4 border-purple-500">
                    <p class="text-purple-700 text-sm font-medium">কোয়ালিফাইড</p>
                    <h3 class="text-2xl font-bold text-purple-900">২৮</h3>
                </div>
                <div class="bg-green-50 rounded-lg p-4 border-l-4 border-green-500">
                    <p class="text-green-700 text-sm font-medium">রূপান্তরিত</p>
                    <h3 class="text-2xl font-bold text-green-900">১৫</h3>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-lg font-semibold mb-4">সাম্প্রতিক গ্রাহক</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <img src="https://ui-avatars.com/api/?name=Tech+Solutions&background=3b82f6&color=fff" class="w-12 h-12 rounded-full">
                                <div>
                                    <p class="font-medium">টেক সলিউশন্স লিমিটেড</p>
                                    <p class="text-sm text-gray-500">contact@techsol.com</p>
                                    <p class="text-xs text-gray-400">০১৭xxxxxxxx</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">গ্রাহক</span>
                                <p class="text-xs text-gray-500 mt-1">৫ দিন আগে</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <img src="https://ui-avatars.com/api/?name=Digital+Pro&background=10b981&color=fff" class="w-12 h-12 rounded-full">
                                <div>
                                    <p class="font-medium">ডিজিটাল প্রো</p>
                                    <p class="text-sm text-gray-500">info@digitalpro.com</p>
                                    <p class="text-xs text-gray-400">০১৮xxxxxxxx</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded">লিড</span>
                                <p class="text-xs text-gray-500 mt-1">২ দিন আগে</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-4">
                                <img src="https://ui-avatars.com/api/?name=Smart+Trade&background=f59e0b&color=fff" class="w-12 h-12 rounded-full">
                                <div>
                                    <p class="font-medium">স্মার্ট ট্রেড</p>
                                    <p class="text-sm text-gray-500">sales@smarttrade.com</p>
                                    <p class="text-xs text-gray-400">০১৯xxxxxxxx</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded">প্রসপেক্ট</span>
                                <p class="text-xs text-gray-500 mt-1">১ দিন আগে</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-lg font-semibold mb-4">সেলস পাইপলাইন</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span>প্রোস্পেক্টিং</span>
                                <span class="font-semibold">৩০%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-blue-500 h-3 rounded-full" style="width: 30%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span>কোয়ালিফিকেশন</span>
                                <span class="font-semibold">৫০%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-yellow-500 h-3 rounded-full" style="width: 50%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span>প্রপোজাল</span>
                                <span class="font-semibold">৭০%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-purple-500 h-3 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span>ক্লোজিং</span>
                                <span class="font-semibold">৯০%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-green-500 h-3 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Documents Section -->
        <div id="documents" class="content-section hidden">
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800">ডকুমেন্ট ম্যানেজমেন্ট</h2>
                    <p class="text-gray-600">সকল ডকুমেন্ট এবং ফাইল</p>
                </div>
                <button class="mt-4 md:mt-0 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-upload mr-2"></i>আপলোড করুন
                </button>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-blue-50 rounded-lg p-4 text-center">
                    <i class="fas fa-file text-3xl text-blue-600 mb-2"></i>
                    <p class="text-sm text-gray-600">মোট ফাইল</p>
                    <h3 class="text-xl font-bold">২৫০</h3>
                </div>
                <div class="bg-green-50 rounded-lg p-4 text-center">
                    <i class="fas fa-folder text-3xl text-green-600 mb-2"></i>
                    <p class="text-sm text-gray-600">ফোল্ডার</p>
                    <h3 class="text-xl font-bold">৩৫</h3>
                </div>
                <div class="bg-purple-50 rounded-lg p-4 text-center">
                    <i class="fas fa-share-alt text-3xl text-purple-600 mb-2"></i>
                    <p class="text-sm text-gray-600">শেয়ারড</p>
                    <h3 class="text-xl font-bold">৮৫</h3>
                </div>
                <div class="bg-orange-50 rounded-lg p-4 text-center">
                    <i class="fas fa-database text-3xl text-orange-600 mb-2"></i>
                    <p class="text-sm text-gray-600">স্টোরেজ</p>
                    <h3 class="text-xl font-bold">১২ GB</h3>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 hover:border-blue-500 hover:bg-blue-50 transition cursor-pointer text-center">
                        <i class="fas fa-folder text-4xl text-yellow-500 mb-2"></i>
                        <p class="font-medium">প্রজেক্ট ফাইল</p>
                        <p class="text-sm text-gray-500">৪৫ ফাইল</p>
                    </div>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 hover:border-blue-500 hover:bg-blue-50 transition cursor-pointer text-center">
                        <i class="fas fa-folder text-4xl text-blue-500 mb-2"></i>
                        <p class="font-medium">ডকুমেন্টস</p>
                        <p class="text-sm text-gray-500">৭৮ ফাইল</p>
                    </div>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 hover:border-blue-500 hover:bg-blue-50 transition cursor-pointer text-center">
                        <i class="fas fa-folder text-4xl text-green-500 mb-2"></i>
                        <p class="font-medium">রিপোর্ট</p>
                        <p class="text-sm text-gray-500">৩২ ফাইল</p>
                    </div>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 hover:border-blue-500 hover:bg-blue-50 transition cursor-pointer text-center">
                        <i class="fas fa-folder text-4xl text-purple-500 mb-2"></i>
                        <p class="font-medium">ইমেজ</p>
                        <p class="text-sm text-gray-500">৯৫ ফাইল</p>
                    </div>
                </div>

                <div class="mt-6">
                    <h3 class="font-semibold mb-4">সাম্প্রতিক ফাইল</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-red-100 rounded flex items-center justify-center">
                                    <i class="fas fa-file-pdf text-red-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-sm">প্রজেক্ট প্রপোজাল.pdf</p>
                                    <p class="text-xs text-gray-500">২.৫ MB • আজ</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-blue-600">
                                <i class="fas fa-download"></i>
                            </button>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-blue-100 rounded flex items-center justify-center">
                                    <i class="fas fa-file-word text-blue-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-sm">মিটিং মিনিটস.docx</p>
                                    <p class="text-xs text-gray-500">১.২ MB • গতকাল</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-blue-600">
                                <i class="fas fa-download"></i>
                            </button>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-green-100 rounded flex items-center justify-center">
                                    <i class="fas fa-file-excel text-green-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-sm">বাজেট রিপোর্ট.xlsx</p>
                                    <p class="text-xs text-gray-500">৫০০ KB • ২ দিন আগে</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-blue-600">
                                <i class="fas fa-download"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {
                if (!sidebar.contains(e.target) && !menuBtn.contains(e.target)) {
                    sidebar.classList.add('-translate-x-full');
                }
            }
        });

        // Section navigation with hash
        function showSectionByHash() {
            const hash = window.location.hash || '#dashboard';
            const sectionId = hash.substring(1);
            
            // Hide all sections
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show selected section
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.classList.remove('hidden');
            }

            // Update active nav link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('bg-blue-50', 'text-blue-600');
                if (link.getAttribute('href') === hash) {
                    link.classList.add('bg-blue-50', 'text-blue-600');
                }
            });

            // Close sidebar on mobile after selection
            if (window.innerWidth < 1024) {
                sidebar.classList.add('-translate-x-full');
            }
        }

        // Listen for hash changes
        window.addEventListener('hashchange', showSectionByHash);
        
        // Initial load
        showSectionByHash();
    </script>
</body>
</html>