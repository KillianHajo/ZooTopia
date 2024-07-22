/*Burger-Menu*/
const styleLinks = document.querySelector('.style-links')
const closeMenu = document.querySelector('.close-menu')
const mobileMenu = document.querySelector('.mobile-menu')


function show(){
    styleLinks.style.display = 'flex';
    styleLinks.style.top = '0';
}

function close(){
    styleLinks.style.top ='-100%';
}


mobileMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);
/* End Menu Burger*/

$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});




/*Login Js*/

jQuery(document).ready(function($) {
    tab = $('.tabs h3 a');

    tab.on('click', function(event) {
    event.preventDefault();
    tab.removeClass('active');
    $(this).addClass('active');

    tab_content = $(this).attr('href');
    $('div[id$="tab-content"]').removeClass('active');
    $(tab_content).addClass('active');
    });
});



/*End Sign up to Login vice-versa*/

