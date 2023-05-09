/* Animation du bouton Hamburger */ 

/* Selection des variables */

const btn_hamburger = document.querySelector('.menu-hamb');
const navMenu = document.querySelector('.nav-links');


/* Ajout de l'evenement d'appartion du menu au click du bouton Hamburger*/ 
btn_hamburger.addEventListener('click',function(){

    navMenu.classList.toggle("nav-show");
    console.log("click");
    
});