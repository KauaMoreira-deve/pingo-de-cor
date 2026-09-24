document.addEventListener('DOMContentLoaded', () => {
  const button = document.querySelector('[data-admin-menu]');
  const close = document.querySelector('[data-admin-close]');
  button?.addEventListener('click', () => document.body.classList.toggle('admin-menu-open'));
  close?.addEventListener('click', () => document.body.classList.remove('admin-menu-open'));
});
