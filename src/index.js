import "normalize.css";
import "./sass/style.sass";

window.onscroll = () => {
  // Parallax Background
  var pos = window.pageYOffset / 2;
  document.body.style.backgroundPosition = "left -" + pos + "px";
};
