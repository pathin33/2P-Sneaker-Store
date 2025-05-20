 <header class="header bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/icons/2PSS SNEAKERSS.png') }}" alt="2PSS SNEAKERS" class="h-15 md:h-13 transition-all duration-300 hover:opacity-90">
                </a>

                <nav class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link text-gray-900 font-semibold text-lg">TRANG CHỦ</a>
                    
                    <div class="relative group">
                        <button class="nav-link text-gray-900 font-semibold text-lg flex items-center">
                            SẢN PHẨM
                            <svg class="w-4 h-4 ml-1.5 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg z-50 border border-gray-100">
                            <a href="/products/men" class="block px-4 py-3 text-gray-800 hover:bg-gray-50 hover:text-red-600 font-medium border-b border-gray-100">GIÀY NAM</a>
                            <a href="/products/women" class="block px-4 py-3 text-gray-800 hover:bg-gray-50 hover:text-red-600 font-medium border-b border-gray-100">GIÀY NỮ</a>
                            <a href="/products/sports" class="block px-4 py-3 text-gray-800 hover:bg-gray-50 hover:text-red-600 font-medium">GIÀY THỂ THAO</a>
                        </div>
                    </div>
                    
                    <a href="/sale" class="nav-link text-gray-900 font-semibold text-lg">KHUYẾN MÃI</a>
                    <a href="/about" class="nav-link text-gray-900 font-semibold text-lg">VỀ CHÚNG TÔI</a>
                    <a href="/contact" class="nav-link text-gray-900 font-semibold text-lg">LIÊN HỆ</a>
                </nav>
                
                <div class="flex items-center space-x-5 md:space-x-6">
                    <button class="p-1.5 rounded-full hover:bg-gray-100 transition-colors duration-200">
                        <img src="{{ asset('assets/icons/icon_search.png') }}" alt="Tìm kiếm" class="h-5 w-5 md:h-6 md:w-6">
                    </button>
                    
                    <a href="/wishlist" class="p-1.5 rounded-full hover:bg-gray-100 transition-colors duration-200 relative">
                        <img src="{{ asset('assets/icons/icon_favourite.png') }}" alt="Yêu thích" class="h-5 w-5 md:h-6 md:w-6">
                        <span class="cart-badge absolute -top-1.5 -right-1.5 bg-red-600 text-white rounded-full h-5 w-5 flex items-center justify-center font-bold">3</span>
                    </a>
                    
                    <a href="/cart" class="p-1.5 rounded-full hover:bg-gray-100 transition-colors duration-200 relative">
                        <img src="{{ asset('assets/icons/icon_cart.png') }}" alt="Giỏ hàng" class="h-5 w-5 md:h-6 md:w-6">
                        <span class="wishlist-badge absolute -top-1.5 -right-1.5 bg-red-600 text-white rounded-full h-5 w-5 flex items-center justify-center font-bold">5</span>
                    </a>
                    
                    <a href="/account" class="p-1.5 rounded-full hover:bg-gray-100 transition-colors duration-200 hidden md:block">
                        <img src="{{ asset('assets/icons/person.png') }}" alt="Tài khoản" class="h-5 w-5 md:h-6 md:w-6">
                    </a>

                    <button class="md:hidden p-1.5 rounded-md hover:bg-gray-100 transition-colors duration-200">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="md:hidden bg-white border-t border-gray-100 py-3 hidden">
            <div class="container mx-auto px-4 space-y-3">
                <a href="/" class="block py-2 text-gray-900 font-semibold text-lg hover:text-red-600 transition-colors duration-200">TRANG CHỦ</a>
                <a href="/products" class="block py-2 text-gray-900 font-semibold text-lg hover:text-red-600 transition-colors duration-200">SẢN PHẨM</a>
                <a href="/sale" class="block py-2 text-gray-900 font-semibold text-lg hover:text-red-600 transition-colors duration-200">KHUYẾN MÃI</a>
                <a href="/about" class="block py-2 text-gray-900 font-semibold text-lg hover:text-red-600 transition-colors duration-200">VỀ CHÚNG TÔI</a>
                <a href="/contact" class="block py-2 text-gray-900 font-semibold text-lg hover:text-red-600 transition-colors duration-200">LIÊN HỆ</a>
            </div>
        </div>
    </header>
