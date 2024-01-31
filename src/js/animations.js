import gsap from 'gsap';

window.addEventListener("load", () => {
  // Screen loader
  gsap.to('#screenLoader', {
    y: '-100%',
    duration: 0.4,
  });
})