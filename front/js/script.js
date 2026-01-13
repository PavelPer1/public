
// Mobile menu toggle
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mainMenu = document.getElementById('mainMenu');

if (mobileMenuBtn && mainMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mainMenu.classList.toggle('active');
        mobileMenuBtn.innerHTML = mainMenu.classList.contains('active') 
            ? '<i class="fas fa-times"></i>' 
            : '<i class="fas fa-bars"></i>';
    });
    
    // Close mobile menu when clicking on a link
    document.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('click', () => {
            mainMenu.classList.remove('active');
            mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
        });
    });
}

// Tab switching for media section
const tabBtns = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const tabId = btn.getAttribute('data-tab');
        
        // Remove active class from all buttons and contents
        tabBtns.forEach(b => b.classList.remove('active'));
        tabContents.forEach(c => c.classList.remove('active'));
        
        // Add active class to clicked button and corresponding content
        btn.classList.add('active');
        const targetTab = document.getElementById(`${tabId}-tab`);
        if (targetTab) {
            targetTab.classList.add('active');
        }
    });
});

// Form submissions
const artistForm = document.getElementById('artistApplicationForm');
const partnersForm = document.getElementById('partnersForm');

if (artistForm) {
    artistForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // In a real implementation, you would send the form data to a server
        alert('Спасибо за вашу заявку на участие в мюзикле! Мы свяжемся с вами в ближайшее время для обсуждения дальнейших шагов.');
        artistForm.reset();
    });
}

if (partnersForm) {
    partnersForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        alert('Спасибо за ваше предложение о партнёрстве! Мы рассмотрим его и свяжемся с вами в ближайшее время.');
        partnersForm.reset();
    });
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Add scroll effect to header
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (header) {
        if (window.scrollY > 100) {
            header.style.backgroundColor = 'rgba(0, 0, 0, 0.98)';
        } else {
            header.style.backgroundColor = 'rgba(0, 0, 0, 0.95)';
        }
    }
});

// Image error handling
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('error', function() {
            console.log('Image failed to load:', this.src);
        });
    });
});


function toggleDetails() {
    const detailedInfo = document.getElementById('detailedInfo');
    const button = document.querySelector('.show-details-btn');
    const video = document.querySelector('.horizontal-video');
    
    // Переключаем класс active
    detailedInfo.classList.toggle('active');
    button.classList.toggle('active');
    
    // Меняем текст кнопки
    if (detailedInfo.classList.contains('active')) {
        button.innerHTML = 'Скрыть подробности <span class="arrow">↑</span>';
        
        // Пауза видео при скрытии (если оно было запущено)
        if (video) {
            video.pause();
        }
    } else {
        button.innerHTML = 'Подробнее <span class="arrow">↓</span>';
    }
    
    // Прокрутка к началу блока при открытии
    if (detailedInfo.classList.contains('active')) {
        detailedInfo.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}
