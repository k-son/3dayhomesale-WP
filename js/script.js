"use strict";

// CSS custom properties
const styles = getComputedStyle(document.documentElement);
const colorWhite = styles.getPropertyValue('--color-text-white');
const hamburgerGrey = styles.getPropertyValue('--color-hamburger-grey');

// Navbar
const navbar = document.querySelector('.navbar');
const nav = document.querySelector('.nav');
const navList = document.querySelector('.nav__list');
const navLinks = document.querySelectorAll('.nav__list__link');
const hamburger = document.querySelector('.hamburger');
const hamburgerInner = document.querySelector('.hamburger-inner');

const searchIcon = document.querySelector('.search__icon');
const searchContainer = document.querySelector('.search__container');
const searchInput = document.querySelector('#s');

function whiteNavbar() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    navbar.classList.add('whiteNavbar');
    nav.style.paddingTop = 0;
    //navbar.style.backgroundColor = "#fff";
    navLinks.forEach(el => el.classList.add('whiteNavLinkText'));
    hamburgerInner.style.backgroundColor = hamburgerGrey;
    searchIcon.classList.add('search__icon--whiteNavbar');

  } else {
    navbar.classList.remove('whiteNavbar');
    nav.style.paddingTop = "30px";
    //navbar.style.backgroundColor = "#121d26";
    hamburgerInner.style.backgroundColor = colorWhite;
    searchIcon.classList.remove('search__icon--whiteNavbar');
  }
}


// Hamburger menu
function toggleHamburger() {
  hamburger.classList.toggle('is-active');
  navList.classList.toggle('displayFlex');
}

window.addEventListener('scroll', whiteNavbar);

hamburger.addEventListener('click', toggleHamburger)

navLinks.forEach(el => {
  el.addEventListener('click', toggleHamburger)
})


// Searching
function toggleSearchBar() {
  searchContainer.classList.toggle('display-none');
}

searchIcon.addEventListener('click', toggleSearchBar);

searchInput.placeholder = "Type in...";
