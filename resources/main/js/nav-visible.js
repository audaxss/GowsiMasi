var page = location.pathname.substr(location.pathname.lastIndexOf("/") + 1);
var logo = document.querySelector('.navbar .logo-container h1');
var navbar = document.querySelector('.navbar');
var links = document.querySelectorAll('.navbar ul li a');
var color1 = '#444';
var color2 = '#fff';

if(page != 'index'){    
    logo.style.color = color1;
    navbar.style.background = color2;
    links[0].style.color = color1;
    links[1].style.color = color1;
    links[2].style.color = color1;
    links[3].style.color = color1;
    navLines[0].style.background = color1;
    navLines[1].style.background = color1;
}