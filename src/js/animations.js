import gsap from 'gsap';

window.addEventListener("load", () => {
  gsap.to('#screenLoader', {
    y: '-100%',
    duration: 0.4,
  });
})