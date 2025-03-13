document.addEventListener('DOMContentLoaded', function () {
    let swiper1 = null;

    function initializeSwiper() {
        const viewportWidth = window.innerWidth;

        if (viewportWidth >= 431) {
            if (!swiper1) {
                swiper1 = new Swiper('#swiper1', {
                    slidesPerView: 6,
                    slidesPerGroup: 6,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.swiper1-button-next',
                        prevEl: '.swiper1-button-prev',
                        type: "progressbar",
                    },
                    loop: false,
                    simulateTouch: false, // ปิดการลากด้วยเมาส์
                    allowTouchMove: false, // ปิดการลากด้วยนิ้วบนหน้าจอสัมผัส
                    on: {
                        init: function () {
                            updateNavigationButtons(this);
                        },
                        slideChange: function () {
                            updateNavigationButtons(this);
                        },
                    },
                });
            }
        } else if (swiper1) {
            swiper1.destroy(true, true); // ทำลาย Swiper เมื่อหน้าจอต่ำกว่า 431px
            swiper1 = null;
        }
    }

    function updateNavigationButtons(swiper) {
        const prevButton = document.querySelector('.swiper1-button-prev');
        const nextButton = document.querySelector('.swiper1-button-next');

        if (swiper.isBeginning) {
            prevButton.style.display = 'none';
        } else {
            prevButton.style.display = 'flex';
        }

        if (swiper.isEnd) {
            nextButton.style.display = 'none';
        } else {
            nextButton.style.display = 'flex';
        }
    }

    // เรียกใช้งาน Swiper หรือทำลาย Swiper ตามขนาดหน้าจอ
    initializeSwiper();

    // ตรวจสอบเมื่อหน้าต่างถูกปรับขนาด
    window.addEventListener('resize', initializeSwiper);
});


document.addEventListener('DOMContentLoaded', function () {
    let swiper2 = null;

    function initializeSwiper() {
        const viewportWidth = window.innerWidth;

        if (viewportWidth >= 431) {
            if (!swiper2) {
                swiper2 = new Swiper('#swiper2', {
                    slidesPerView: 10,
                    spaceBetween: 0,
                    autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.swiper2-button-next',
                        prevEl: '.swiper2-button-prev',
                        type: "progressbar",
                    },
                    loop: false,
                    simulateTouch: false, // ปิดการลากด้วยเมาส์
                    allowTouchMove: false, // ปิดการลากด้วยนิ้วบนหน้าจอสัมผัส
                    on: {
                        init: function () {
                            updateNavigationButtons(this);
                        },
                        slideChange: function () {
                            updateNavigationButtons(this);
                        },
                    },
                });
            }
        } else if (swiper2) {
            swiper2.destroy(true, true); // ทำลาย Swiper เมื่อหน้าจอต่ำกว่า 431px
            swiper2 = null;
        }
    }

    function updateNavigationButtons(swiper) {
        const prevButton = document.querySelector('.swiper2-button-prev');
        const nextButton = document.querySelector('.swiper2-button-next');
    }

    // เรียกใช้งาน Swiper หรือทำลาย Swiper ตามขนาดหน้าจอ
    initializeSwiper();

    // ตรวจสอบเมื่อหน้าต่างถูกปรับขนาด
    window.addEventListener('resize', initializeSwiper);
});


document.addEventListener('DOMContentLoaded', function () {
    let swiper3 = null;

    function initializeSwiper() {
        const viewportWidth = window.innerWidth;

        if (viewportWidth >= 431) {
            if (!swiper3) {
                swiper3 = new Swiper('#swiper3', {
                    slidesPerView: 3,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.swiper3-button-next',
                        prevEl: '.swiper3-button-prev',
                        type: "progressbar",
                    },
                    loop: false,
                    simulateTouch: false, // ปิดการลากด้วยเมาส์
                    allowTouchMove: false, // ปิดการลากด้วยนิ้วบนหน้าจอสัมผัส
                    on: {
                        init: function () {
                            updateNavigationButtons(this);
                        },
                        slideChange: function () {
                            updateNavigationButtons(this);
                        },
                    },
                });
            }
        } else if (swiper3) {
            swiper3.destroy(true, true); // ทำลาย Swiper เมื่อหน้าจอต่ำกว่า 431px
            swiper3 = null;
        }
    }

    function updateNavigationButtons(swiper) {
        const prevButton = document.querySelector('.swiper3-button-prev');
        const nextButton = document.querySelector('.swiper3-button-next');
    }

    // เรียกใช้งาน Swiper หรือทำลาย Swiper ตามขนาดหน้าจอ
    initializeSwiper();

    // ตรวจสอบเมื่อหน้าต่างถูกปรับขนาด
    window.addEventListener('resize', initializeSwiper);
});


document.addEventListener('DOMContentLoaded', function () {
    let swiper4 = null;

    function initializeSwiper() {
        const viewportWidth = window.innerWidth;

        if (viewportWidth >= 431) {
            if (!swiper4) {
                swiper4 = new Swiper('#swiper4', {
                    slidesPerView: 6,
                    slidesPerGroup: 6,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.swiper4-button-next',
                        prevEl: '.swiper4-button-prev',
                    },
                    loop: false,
                    simulateTouch: false,
                    allowTouchMove: false,
                    on: {
                        init: function () {
                            updateNavigationButtons(this);
                            updateProgressBar(this); // เรียกฟังก์ชัน updateProgressBar เมื่อ Swiper เริ่มต้น
                        },
                        slideChange: function () {
                            updateNavigationButtons(this);
                            updateProgressBar(this); // เรียกฟังก์ชัน updateProgressBar เมื่อสไลด์เปลี่ยน
                        },
                    },
                });
            }
        } else if (swiper4) {
            swiper4.destroy(true, true);
            swiper4 = null;
        }
    }

    // ฟังก์ชันอัปเดต Navigation Buttons
    function updateNavigationButtons(swiper) {
        const prevButton = document.querySelector('.swiper4-button-prev');
        const nextButton = document.querySelector('.swiper4-button-next');

        if (swiper.isBeginning) {
            prevButton.style.display = 'none';
        } else {
            prevButton.style.display = 'flex';
        }

        if (swiper.isEnd) {
            nextButton.style.display = 'none';
        } else {
            nextButton.style.display = 'flex';
        }
    }

    // ฟังก์ชันอัปเดต Progress Bar
    function updateProgressBar(swiper) {
        const progressBar = document.querySelector('.swiper4-progressbar .swiper4-progressbar-fill');
        const progress = (swiper.progress) * 100;
        progressBar.style.width = progress + '%'; // อัปเดตความยาวของ progress bar
    }

    initializeSwiper();

    window.addEventListener('resize', initializeSwiper);
});


document.addEventListener('DOMContentLoaded', function () {
    // สร้าง Thumbnail Swiper
    const swiperThumbnails5 = new Swiper('.swiper-thumbnails-5', {
        slidesPerView: 3, // จำนวน Thumbnail ที่แสดง
        spaceBetween: 10, // ระยะห่างระหว่าง Thumbnail
        navigation: {
            nextEl: '.swiper5-button-next', // ปุ่มถัดไป
            prevEl: '.swiper5-button-prev', // ปุ่มก่อนหน้า
        },
        loop: true, // เปิดใช้งาน Loop
        simulateTouch: false, // ปิดการลากด้วยเมาส์
        allowTouchMove: false, // ปิดการลากด้วยนิ้วบนหน้าจอสัมผัส
    });

    // อัปเดตรูปภาพหลัก (Product Image) เมื่อคลิก Thumbnail
    const productMainImage = document.getElementById('product-main-image');
    document.querySelectorAll('.swiper-thumbnails-5 .swiper-slide img').forEach((thumbnail) => {
        thumbnail.addEventListener('click', function () {
            productMainImage.src = this.src; // เปลี่ยน src ของ Product Image
        });
    });
});


