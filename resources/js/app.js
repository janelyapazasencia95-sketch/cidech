import '../css/app.css';

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('[data-mobile-menu-btn]');
  const menu = document.querySelector('[data-mobile-menu]');

  if (!btn || !menu) return;

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });

  // cerrar al hacer click en un link
  menu.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', () => menu.classList.add('hidden'));
  });
});
