import Grade from './libs/grade';

import './sass/style.sass';

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= Parallax Background -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= //

window.onscroll = function() {
    var pos = window.pageYOffset / 2;
    document.body.style.backgroundPosition = 'left -' + pos + "px";
}

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= Gradient on header -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= //

window.addEventListener('load', function(){Grade(document.querySelectorAll('header'))});
