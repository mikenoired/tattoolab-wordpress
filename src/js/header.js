import { gsap, Power4 } from 'gsap';
import CustomEase from 'gsap/CustomEase';

gsap.registerPlugin(CustomEase);
CustomEase.create('cubic', '0.19,1,0.22,1');

window.addEventListener('scroll', () => {
  const header = document.getElementById('header');
  if (window.location.pathname === '/') {
    if (window.scrollY > 0) {
      header.classList.add('min');
    } else {
      header.classList.remove('min');
    }
  }
});

window.addEventListener('load', () => {
  // Set animated contact elements
  const text =
    document.getElementById('headerContacts').children[0].children[0];
  const array = text.innerHTML.split('<br>');
  array.forEach((item) => {
    const line = document.createElement('p');
    line.classList.add('contactsLine');

    const lineItem = document.createElement('div');
    lineItem.innerHTML = item;

    line.appendChild(lineItem);

    document.getElementById('headerContacts').children[0].appendChild(line);
  });
  text.innerHTML = '';
  document.getElementById('headerContacts').children[0].removeChild(text);

  // Close/Open menu
  const tl = gsap.timeline({ paused: true });
  const menuButton = document.getElementById('menuButton');
  tl.to('.menuContainer', {
    ease: 'cubic',
    duration: 0.25,
    y: 0,
  })
    .to('.menu-item a', {
      ease: 'cubic',
      duration: 0.15,
      y: 0,
      stagger: {
        each: 0.03,
        from: 'random',
      },
    })
    .to('.contactsLine div', {
      y: 0,
      duration: 0.2,
      ease: 'custom',
    })
    .reverse();
  menuButton.addEventListener('click', () => {
    menuButton.classList.toggle('closeMenu');
    document.body.classList.toggle('noScroll');
    tl.reversed(!tl.reversed());
    document.getElementById('header').classList.toggle('menuActivated');
  });

  gsap
    .to('.present h1 li p', {
      ease: Power4.easeOut,
      duration: 0.3,
      y: '0%',
      stagger: {
        each: 0.55,
        from: 'start',
      },
    })
    .delay(0.5);
});
