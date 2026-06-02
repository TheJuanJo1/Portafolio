/**
 * Portfolio interactions: theme, particles, scroll animations, nav active state
 */

const THEME_KEY = 'portfolio-theme';

function initTheme() {
    const saved = localStorage.getItem(THEME_KEY);
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const theme = saved || (prefersDark ? 'dark' : 'dark');

    document.documentElement.classList.remove('light-theme', 'dark-theme');
    document.documentElement.classList.add(`${theme}-theme`);

    const toggle = document.getElementById('theme-toggle');
    if (!toggle) return;

    toggle.addEventListener('click', () => {
        const isDark = document.documentElement.classList.contains('dark-theme');
        const next = isDark ? 'light' : 'dark';

        document.documentElement.classList.remove('light-theme', 'dark-theme');
        document.documentElement.classList.add(`${next}-theme`);
        localStorage.setItem(THEME_KEY, next);
    });
}

function initParticles() {
    const canvas = document.getElementById('particles');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let particles = [];
    let animationId;

    const resize = () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    };

    const createParticles = () => {
        const count = Math.min(80, Math.floor(window.innerWidth / 20));
        particles = Array.from({ length: count }, () => ({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            radius: Math.random() * 2 + 0.5,
            vx: (Math.random() - 0.5) * 0.3,
            vy: (Math.random() - 0.5) * 0.3,
            opacity: Math.random() * 0.5 + 0.1,
        }));
    };

    const draw = () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        const isDark = document.documentElement.classList.contains('dark-theme');
        const color = isDark ? '147, 197, 253' : '59, 130, 246';

        particles.forEach((p, i) => {
            p.x += p.vx;
            p.y += p.vy;

            if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
            if (p.y < 0 || p.y > canvas.height) p.vy *= -1;

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${color}, ${p.opacity})`;
            ctx.fill();

            particles.slice(i + 1).forEach((p2) => {
                const dx = p.x - p2.x;
                const dy = p.y - p2.y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < 120) {
                    ctx.beginPath();
                    ctx.moveTo(p.x, p.y);
                    ctx.lineTo(p2.x, p2.y);
                    ctx.strokeStyle = `rgba(${color}, ${0.08 * (1 - dist / 120)})`;
                    ctx.stroke();
                }
            });
        });

        animationId = requestAnimationFrame(draw);
    };

    resize();
    createParticles();
    draw();

    window.addEventListener('resize', () => {
        resize();
        createParticles();
    });

    return () => cancelAnimationFrame(animationId);
}

function initScrollReveal() {
    const reveals = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );

    reveals.forEach((el) => observer.observe(el));
}

function initSkillBars() {
    const items = document.querySelectorAll('.skill-item');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                const bar = entry.target.querySelector('.skill-bar');
                const percent = entry.target.querySelector('.skill-percent');
                const target = parseInt(bar?.dataset.target || '0', 10);

                if (bar) {
                    bar.style.setProperty('--target-width', `${target}%`);
                    bar.classList.add('animated');
                    bar.style.width = `${target}%`;
                }

                if (percent) {
                    animateValue(percent, 0, target, 1200, '%');
                }

                observer.unobserve(entry.target);
            });
        },
        { threshold: 0.3 }
    );

    items.forEach((el) => observer.observe(el));
}

function initStatCounters() {
    const counters = document.querySelectorAll('.stat-counter');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                const el = entry.target;
                const target = parseInt(el.dataset.target || '0', 10);
                animateValue(el, 0, target, 1500);
                observer.unobserve(el);
            });
        },
        { threshold: 0.5 }
    );

    counters.forEach((el) => observer.observe(el));
}

function animateValue(element, start, end, duration, suffix = '') {
    const startTime = performance.now();

    const step = (currentTime) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const current = Math.round(start + (end - start) * eased);

        element.textContent = `${current}${suffix}`;

        if (progress < 1) {
            requestAnimationFrame(step);
        }
    };

    requestAnimationFrame(step);
}

function initActiveNav() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link[data-section]');

    if (!sections.length || !navLinks.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    navLinks.forEach((link) => {
                        link.classList.toggle('active', link.dataset.section === id);
                    });
                }
            });
        },
        { rootMargin: '-40% 0px -55% 0px', threshold: 0 }
    );

    sections.forEach((section) => observer.observe(section));
}

function initNavbarScroll() {
    const header = document.getElementById('site-header');
    if (!header) return;

    const onScroll = () => {
        header.classList.toggle('nav-scrolled', window.scrollY > 20);
        header.classList.toggle('nav-top', window.scrollY <= 20);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', (e) => {
            const href = anchor.getAttribute('href');
            if (!href || href === '#') return;

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();
            const offset = 80;
            const top = target.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({ top, behavior: 'smooth' });
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initNavbarScroll();
    initParticles();
    initScrollReveal();
    initSkillBars();
    initStatCounters();
    initActiveNav();
    initSmoothScroll();
});

document.addEventListener('livewire:navigated', () => {
    initScrollReveal();
    initSkillBars();
    initStatCounters();
    initActiveNav();
});
