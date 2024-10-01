import gsap from 'gsap';
import CustomEase from 'gsap/CustomEase';

gsap.registerPlugin(CustomEase);
CustomEase.create('cubic', '0,.15,.34,.99');

window.addEventListener('load', (e) => {
  e.preventDefault();
  const galleryImage = document.querySelectorAll('.wp-block-image');
  const lightboxContainer = document.getElementById('lightboxContainer');
  const htmlImageLinks = document.querySelectorAll('.wp-block-image img');
  const pr = document.getElementById('previousImage');
  const next = document.getElementById('nextImage');
  const lightboxWrapper = document.getElementById('lightboxWrapper');

  const { scrollY } = window;
  const { scrollX } = window;

  const imageSliding = () => {
    pr.remove();
    next.remove();
  };

  if (/Android|iPhone/i.test(navigator.userAgent) || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/iPhone/i)) {
    imageSliding();
    document.getElementById('lightboxContainer').classList.add('mobile');
    document.getElementById('zoomUp').classList.add('disable');
    document.getElementById('zoomDown').classList.add('disable');
  }

  class Lightbox {
    constructor() {
      this.imageURL = '';
      this.allImages = [];
      this.imageKey = 0;
      this.zoom = 1;
    }

    closeImage() {
      this.imageURL = '';
      this.allImages = [];
      this.imageKey = 0;
      this.zoom = 1;
      document.getElementById('lightboxImage').remove();

      gsap.to('.lightbox', {
        display: 'none',
        duration: 0.2,
        ease: 'cubic',
        opacity: 0,
      });

      document.body.classList.remove('noScroll');
      window.onscroll = () => { };
    }

    zoomUp() {
      this.zoom += 1;

      const currentImage = document.getElementById('lightboxImage');

      document.getElementById('zoomDown').classList.remove('disabled');
      document.getElementById('zoomUp').classList.add('disabled');
      currentImage.style.cursor = 'grab';
      currentImage.style.maxWidth = `${this.zoom * 100}%`;
      currentImage.style.maxHeight = `${this.zoom * 100}%`;

      let posX = 0;
      let posY = 0;
      let mouseX = 0;
      let mouseY = 0;

      const moveElement = (ev) => {
        mouseX = ev.clientX - posX;
        mouseY = ev.clientY - posY;
        currentImage.style.left = `${mouseX}px`;
        currentImage.style.top = `${mouseY}px`;
      };

      lightboxContainer.addEventListener('mousedown', (ev) => {
        ev.preventDefault();
        posX = ev.clientX - currentImage.offsetLeft;
        posY = ev.clientY - currentImage.offsetTop;
        currentImage.addEventListener('mousemove', moveElement);
        currentImage.style.cursor = 'grabbing';
      });

      lightboxContainer.addEventListener('mouseup', () => {
        currentImage.style.cursor = 'grab';
        currentImage.removeEventListener('mousemove', moveElement);
      });
    }

    zoomDown() {
      if (this.zoom > 1) {
        this.zoom -= 1;
      }
      if (this.zoom === 1) {
        document.getElementById('zoomDown').classList.add('disabled');
        document.getElementById('zoomUp').classList.remove('disabled');
      }
      document
        .getElementById('lightboxImage')
        .setAttribute(
          'style',
          `max-width: ${this.zoom * 100}%; max-height: ${this.zoom * 100}%;`,
        );
    }

    mobileSwipe() {
      let startX = null;
      let startY = null;
      let isSwiping = false;

      const getTouches = (event) => event.touches || event.originalEvent.touches;

      document.addEventListener('touchstart', (event) => {
        if (getTouches(event).length === 1) {
          const firstTouch = getTouches(event)[0];
          startX = firstTouch.clientX;
          startY = firstTouch.clientY;
          isSwiping = true;
        }
      });

      document.addEventListener('touchmove', (event) => {
        if (!isSwiping || getTouches(event).length > 1 || startX === null || startY === null) return;

        event.preventDefault();

        const currentX = event.touches[0].clientX;
        const currentY = event.touches[0].clientY;

        const diffX = startX - currentX;
        const diffY = startY - currentY;

        const SWIPE_THRESHOLD = 50;
        if (Math.abs(diffX) > SWIPE_THRESHOLD || Math.abs(diffY) > SWIPE_THRESHOLD) {
          if (Math.abs(diffX) > Math.abs(diffY)) {
            if (diffX > 0) {
              this.nextImage(this);
            } else {
              this.previousImage(this);
            }
          }

          isSwiping = false;
          startX = null;
          startY = null;
        }
      });

      document.addEventListener('touchend', () => {
        isSwiping = false;
        startX = null;
        startY = null;
      });
    }



    checkForNextImages() {
      switch (this.imageKey) {
        case 0: // First image
          pr.classList.add('none');
          Array.from(document.getElementsByClassName('leftContainer')).forEach(
            (item) => {
              item.classList.add('not-allowed');
            },
          );
          break;
        case (this.allImages.length -= 1): // Last image
          next.classList.add('none');
          Array.from(document.getElementsByClassName('rightContainer')).forEach(
            (item) => {
              item.classList.add('not-allowed');
            },
          );
          break;
        case -1:
          this.nextImage();
          break;
        default:
          next.classList.remove('none');
          pr.classList.remove('none');
          Array.from(document.getElementsByClassName('leftContainer')).forEach(
            (item) => {
              item.classList.remove('not-allowed');
            },
          );
          Array.from(document.getElementsByClassName('rightContainer')).forEach(
            (item) => {
              item.classList.remove('not-allowed');
            },
          );
          break;
      }
      if (this.allImages.length === 1) {
        pr.classList.add('none');
        next.classList.add('none');
      }

      if (this.imageURL === undefined) {
        this.previousImage();
      }
    }

    refreshImage() {
      this.imageURL = this.allImages[this.imageKey];
      document.getElementById('lightboxImage').remove();

      const lightboxImage = new window.Image();
      lightboxImage.classList.add('lightboxImage');
      lightboxImage.id = 'lightboxImage';
      lightboxImage.src = this.imageURL;
      lightboxWrapper.appendChild(lightboxImage);
      document.getElementById('zoomUp').classList.remove('disabled');
    }

    previousImage() {
      this.allImages = [];
      this.zoom = 1;
      htmlImageLinks.forEach((item, i) => {
        this.allImages.push(htmlImageLinks[i].src);
      });
      this.imageKey -= 1;
      this.refreshImage();

      return this.checkForNextImages(this);
    }

    nextImage() {
      this.allImages = [];
      this.zoom = 1;
      htmlImageLinks.forEach((item, i) => {
        this.allImages.push(htmlImageLinks[i].src);
      });
      this.imageKey += 1;
      this.refreshImage();

      return this.checkForNextImages(this);
    }

    openImage(img) {
      this.imageURL = img.firstChild.src;

      const lightboxImage = new window.Image();
      lightboxImage.classList.add('lightboxImage');
      lightboxImage.id = 'lightboxImage';
      lightboxImage.src = this.imageURL;
      lightboxWrapper.appendChild(lightboxImage);

      htmlImageLinks.forEach((item) => {
        this.allImages.push(item.src);
      });

      this.imageKey = this.allImages.findIndex((ev) => ev === this.imageURL);

      document.getElementById('zoomUp').onclick = () => {
        this.zoomUp(this);
      };
      document.getElementById('zoomDown').onclick = () => {
        this.zoomDown(this);
      };
      if (this.zoom === 1) {
        document.getElementById('zoomDown').classList.add('disabled');
      }

      // Scroll images
      pr.onclick = () => this.previousImage(this);
      next.onclick = () => this.nextImage(this);
      this.mobileSwipe(this);
      document.addEventListener('keydown', (ev) => {
        ev.preventDefault();
        switch (ev.code) {
          case 'Escape':
            this.closeImage(this);
            break;
          case 'ArrowLeft':
            this.previousImage(this);
            break;
          case 'KeyA':
            this.previousImage(this);
            break;
          case 'KeyD':
            this.nextImage(this);
            break;
          case 'ArrowRight':
            this.nextImage(this);
            break;
          default:
            break;
        }
      });

      // Activate lightbox
      lightboxContainer.classList.add('active');
      window.onscroll = () => window.scrollTo(scrollX, scrollY);

      // Close lightbox
      document.getElementById('closeLightbox').onclick = () => {
        this.closeImage(this);
      };

      return this.checkForNextImages(this);
    }
  }

  galleryImage.forEach((img) => {
    // eslint-disable-next-line no-param-reassign
    img.onclick = () => {
      gsap.to('.lightbox', {
        display: 'flex',
        duration: 0.2,
        ease: 'cubic',
        opacity: 1,
      });
      new Lightbox().openImage(img);
    };
  });
});
