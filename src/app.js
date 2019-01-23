import Grade from './libs/grade';

import './sass/style.sass';
import './img/svg-icons.svg';

import './favicon/favicon.ico';
import './favicon/android-chrome-192x192.png';
import './favicon/android-chrome-512x512.png';
import './favicon/apple-touch-icon-60x60.png';
import './favicon/apple-touch-icon-76x76.png';
import './favicon/apple-touch-icon-120x120.png';
import './favicon/apple-touch-icon-152x152.png';
import './favicon/apple-touch-icon-180x180.png';
import './favicon/apple-touch-icon.png';
import './favicon/browserconfig.xml';
import './favicon/favicon-16x16.png';
import './favicon/favicon-32x32.png';
import './favicon/mstile-70x70.png';
import './favicon/mstile-144x144.png';
import './favicon/mstile-150x150.png';
import './favicon/mstile-310x150.png';
import './favicon/mstile-310x310.png';
import './favicon/safari-pinned-tab.svg';
import './favicon/yandex-tab-icon.png';
import './favicon/site.webmanifest';

window.onscroll = function() { // Parallax Background
  var pos = window.pageYOffset / 2;
  document.body.style.backgroundPosition = 'left -' + pos + "px";
}

/*
  Gradient on header
*/
window.addEventListener('load', function() {
  Grade(document.querySelectorAll('header'))
});