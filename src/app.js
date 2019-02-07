import './style.sass';
import './img/svg-icons.svg';

import './fav';

window.onscroll = function() { // Parallax Background
  var pos = window.pageYOffset / 2;
  document.body.style.backgroundPosition = 'left -' + pos + "px";
}
