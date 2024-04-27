import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// get the height of the navbar
const navbar = document.querySelector('#navbar');
const navbarHeight = navbar.offsetHeight;

// apply the height of the navbar as offset of the top of the sticky sidebar
const sidebar = document.querySelector('#sidebar');
sidebar.style.top = `${navbarHeight}px`;
sidebar.style.height = `calc(100vh - ${navbarHeight}px)`;
