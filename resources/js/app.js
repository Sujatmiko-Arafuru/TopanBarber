const nav = document.getElementById('site-nav');
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const bookingForm = document.getElementById('booking-form');

const waNumber = document.querySelector('.wa-fab')?.href.split('?')[0] ?? '';

window.addEventListener(
    'scroll',
    () => {
        nav?.classList.toggle('is-scrolled', window.scrollY > 24);
        highlightSection();
    },
    { passive: true },
);

function setMenuOpen(open) {
    mobileMenu?.classList.toggle('is-open', open);
    menuBtn?.classList.toggle('is-open', open);
    document.body.classList.toggle('overflow-hidden', open);
    menuBtn?.setAttribute('aria-expanded', open ? 'true' : 'false');
    menuBtn?.setAttribute('aria-label', open ? 'Tutup menu' : 'Buka menu');
}

menuBtn?.addEventListener('click', () => {
    setMenuOpen(!mobileMenu?.classList.contains('is-open'));
});

document.querySelectorAll('[data-close-menu]').forEach((link) => {
    link.addEventListener('click', () => setMenuOpen(false));
});

const revealObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-in');
                revealObserver.unobserve(entry.target);
            }
        });
    },
    { threshold: 0.08, rootMargin: '0px 0px -4% 0px' },
);

document.querySelectorAll('.reveal').forEach((el) => revealObserver.observe(el));

function highlightSection() {
    const links = document.querySelectorAll('.nav-link');
    const sections = [...document.querySelectorAll('main section[id]')];
    const fromTop = window.scrollY + 120;
    let current = sections[0]?.id;

    sections.forEach((section) => {
        if (section.offsetTop <= fromTop) {
            current = section.id;
        }
    });

    links.forEach((link) => {
        link.classList.toggle('is-active', link.getAttribute('href') === `#${current}`);
    });
}

document.querySelectorAll('.gallery-item').forEach((item) => {
    item.addEventListener('click', () => {
        if (!lightbox || !lightboxImg) {
            return;
        }

        lightboxImg.src = item.dataset.src ?? '';
        lightboxImg.alt = item.dataset.alt ?? '';
        lightbox.classList.add('is-open');
    });
});

document.getElementById('lightbox-close')?.addEventListener('click', closeLightbox);
lightbox?.addEventListener('click', (event) => {
    if (event.target === lightbox) {
        closeLightbox();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeLightbox();
        setMenuOpen(false);
    }
});

function closeLightbox() {
    lightbox?.classList.remove('is-open');
}

bookingForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    const data = new FormData(bookingForm);
    const message = [
        'Halo Topan Barber, saya ingin booking home service.',
        `Nama: ${data.get('name')}`,
        `Lokasi: ${data.get('area')}`,
        `Layanan: ${data.get('service')}`,
        `Catatan: ${data.get('note') || '-'}`,
    ].join('\n');

    const url = `${waNumber}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank', 'noopener');
});

const track = document.getElementById('review-track');
const canAutoSlide =
    track &&
    !window.matchMedia('(prefers-reduced-motion: reduce)').matches &&
    !window.matchMedia('(max-width: 767px)').matches;

if (canAutoSlide) {
    let direction = 1;
    setInterval(() => {
        const max = track.scrollWidth - track.clientWidth;
        if (max <= 0) {
            return;
        }
        if (track.scrollLeft >= max - 8) {
            direction = -1;
        }
        if (track.scrollLeft <= 8) {
            direction = 1;
        }
        track.scrollBy({ left: 360 * direction, behavior: 'smooth' });
    }, 5200);
}
