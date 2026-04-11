
const menuBtn = document.getElementById('menuBtn');
const menuOverlay = document.getElementById('menuOverlay');
const menuClose = document.getElementById('menuClose');
const menuLinks = document.querySelectorAll('.rxn-menu-links-ux91 a');

function openMenu() {
    menuOverlay.classList.add('open');
    menuBtn.classList.add('active');
    menuBtn.setAttribute('aria-expanded', 'true');
    menuOverlay.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
}

function closeMenu() {
    menuOverlay.classList.remove('open');
    menuBtn.classList.remove('active');
    menuBtn.setAttribute('aria-expanded', 'false');
    menuOverlay.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
}

menuBtn.addEventListener('click', () => {
    if (menuOverlay.classList.contains('open')) closeMenu();
    else openMenu();
});

menuClose.addEventListener('click', closeMenu);

menuLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
        link.style.transform = 'translateX(8px)';
    });
    link.addEventListener('mouseleave', () => {
        if (menuOverlay.classList.contains('open')) {
            link.style.transform = 'translateX(0)';
        }
    });
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMenu();
});
