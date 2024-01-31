/* eslint-disable no-unused-vars */
/* eslint-disable import/no-extraneous-dependencies */
import gsap from 'gsap';
import CustomEase from 'gsap/CustomEase';
import Masonry from 'masonry-layout';
import './js/animations';
import './js/header';
import './js/lightbox';
import './scss/reset.min.css';
import './scss/style.scss';

gsap.registerPlugin(CustomEase);
CustomEase.create('cubic', '0,.15,.34,.99');

window.addEventListener('load', () => {
  // Check for gallery page
  const article = document.getElementById('article');
  if (
    article.children.length === 1 &&
    article.children[0].classList[0] === 'wp-block-gallery'
  ) {
    document.getElementById('pageContent').classList.add('gallery');
    document.getElementsByClassName('wp-block-gallery')[0].id = 'gallery';

    const gridSizer = document.createElement('div');
    gridSizer.classList.add('grid-sizer');
    gridSizer.id = 'gridSizer';
    document.getElementById('gallery').appendChild(gridSizer);

    document
      .getElementById('gallery')
      .insertBefore(
        document.getElementById('gridSizer'),
        document.getElementById('gallery').firstChild,
      );
  }

  // FIXME: Наведение на картинку в галерее
  // // Gallery Image Hover
  // Array.from(
  //   document.querySelectorAll('.wp-block-gallery .wp-block-image'),
  // ).forEach((img) => {
  //   img.addEventListener('mousemove', (ev) => {
  //     const x = ev.layerX / img.clientWidth
  //     const y = ev.layerY / img.clientWidth
  //     const ofS = 7
  //     img.setAttribute(
  //       'style',
  //       `transform: translate(${x * ofS - ofS / 2}px, ${
  //         y * ofS - ofS / 2
  //       }px)`,
  //     )
  //   })
  //   img.addEventListener('mouseout', () => {
  //     img.setAttribute('style', '')
  //   })
  // })

  // Add description to multiple link element in menu
  document.querySelectorAll('.menu-item-has-children').forEach((multItem) => {
    const mItem = multItem;
    try {
      const itemDesc = mItem.children[0].innerHTML.match(/\(.*?\)/g)[0];
      mItem.id = 'multMenu';

      mItem.children[0].innerHTML = mItem.children[0].innerHTML.replace(
        /\(.*?\)/g,
        `<div class="itemDesc">${itemDesc.replace(/[()]/g, '')}</div>`,
      );
    } catch (err) {
      return null;
    }
    return null;
  });

  // Set Masonry grid
  // eslint-disable-next-line no-unused-vars
  let masonry = new Masonry(document.querySelector('.frontPage'), {
    itemSelector: '.post',
    gutter: 30,
    columnWidth: '.grid-sizer',
    percentPosition: true,
  });

  masonry = new Masonry(document.querySelector('.wp-block-gallery'), {
    itemSelector: '.wp-block-image',
    columnWidth: '.grid-sizer',
    percentPosition: true,
  });

  masonry = new Masonry(document.querySelector('.masonry'), {
    itemSelector: '.post',
    gutter: 30,
    columnWidth: '.grid-sizer',
    percentPosition: true,
  });

  // ---- Open/Close letter form ----

  document.getElementById('devButton').onclick = () => {
    document.body.classList.toggle('noScroll');
    gsap.to('.devPeriod__block', {
      display: 'flex',
      duration: 2,
      ease: 'cubic',
      opacity: 1,
    });
  };

  document.getElementById('devButtonClose').onclick = () => {
    document.body.classList.toggle('noScroll');
    gsap.to('.devPeriod__block', {
      display: 'none',
      duration: 2,
      ease: 'cubic',
      opacity: 0,
    });
  };

  document.querySelector(
    // Put user system data to letter
    '.wpcf7-textarea',
  ).value = `${window.navigator.userAgent}\n\n`;
});
