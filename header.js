document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.toggle-sub-menu');

    toggleButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation(); // หยุดการแพร่กระจายของเหตุการณ์
            const submenu = this.nextElementSibling; // เลือก .sub-menu ที่อยู่ถัดจากปุ่มลูกศร
            submenu.classList.toggle('active'); // สลับคลาส .active
            
            // ปิดเมนูอื่น ๆ ที่เปิดอยู่
            document.querySelectorAll('.sub-menu.active').forEach(menu => {
                if (menu !== submenu) {
                    menu.classList.remove('active');
                }
            });
        });
    });

    // คลิกที่ .sub-menu เพื่อหยุดการแพร่กระจายของเหตุการณ์
    document.querySelectorAll('.sub-menu').forEach(menu => {
        menu.addEventListener('click', function(event) {
            event.stopPropagation(); // หยุดการแพร่กระจายของเหตุการณ์
        });
    });

    // คลิกที่ส่วนอื่นของหน้าจอ เพื่อปิดเมนูย่อยทั้งหมด
    document.addEventListener('click', function() {
        document.querySelectorAll('.sub-menu.active').forEach(menu => {
            menu.classList.remove('active');
        });
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.querySelector('.hamburger-menu');
    const navMenu = document.querySelector('.navigation-bar');
    const languageButton = document.querySelector('.language-switch');
    const closeMenuImage = document.querySelector('.close-menu-image');

    // Toggle class when clicking the hamburger menu
    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
        languageButton.classList.toggle('active');
    });

    // Remove class when clicking the close button
    closeMenuImage.addEventListener('click', function() {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        languageButton.classList.remove('active');
    });
});

