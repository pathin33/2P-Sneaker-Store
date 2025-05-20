
const mobileMenuButton = document.querySelector('button.md\\:hidden');
const mobileMenu = document.querySelector('div.md\\:hidden.bg-white');

if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}


const productDropdown = document.querySelector('.group button');
const productDropdownMenu = document.querySelector('.group .absolute');

if (productDropdown && productDropdownMenu) {
    productDropdown.addEventListener('click', (e) => {
        e.preventDefault();
        productDropdownMenu.classList.toggle('hidden');
    });

    // Đóng khi click bên ngoài
    document.addEventListener('click', (e) => {
        if (!productDropdown.contains(e.target) && !productDropdownMenu.contains(e.target)) {
            productDropdownMenu.classList.add('hidden');
        }
    });
}