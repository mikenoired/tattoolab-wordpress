// Бибилотеки
import $ from 'jquery'

// Стили
import './sass/style.sass'

// Иконки
import './img/icons/logo.svg'
import './img/icons/facebook.svg'
import './img/icons/vk.svg'
import './img/icons/instagram.svg'
// Шапки
import './img/headers/main.png'
import './img/headers/tktx.png'
import './img/headers/dermalizepro.png'
import './img/headers/doctorpro.png'
import './img/headers/tattoo.png'
import './img/headers/pictures.png'
import './img/headers/sketches.png'
import './img/headers/info.png'
import './img/headers/contacts.png'


$(document).ready(function() {
    // Parallax Background
    $(window).scroll(function() {
        var pos = $(window).scrollTop() / 2
        $('body').css({backgroundPosition: 'left -' + pos + 'px'})
    })

    // Adaptive Menu
    $('.toggleNav').click(function(){
        $('.min-menu').toggleClass('disable');
        $('body').toggleClass('menuActive')
    })
})
