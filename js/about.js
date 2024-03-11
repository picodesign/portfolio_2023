const overlayDark = document.querySelector('#overlay-dark');

// taille de l'écran 
const animateOverlayDark = () => {
    const animationParams = {
        duration: 2,
        ease: "power3.inOut",
        delay: 4
    };

    // si mobile
    if (window.matchMedia('(max-width: 925px)').matches) {
        // Si oui,-280%
        gsap.to(overlayDark, {
            ...animationParams,
            top: "-350%"
        });
    } else {
        // Sinon,-200%
        gsap.to(overlayDark, {
            ...animationParams,
            top: "-200%"
        });
    }
};
// appel fonction
animateOverlayDark();

gsap.from(".divider",3,{
  scaleX:0,
  ease:"power3.inOut",
  delay:1,
  stagger:{
    amount:1,
  },
});

gsap.from(".row > .col",2, {
  opacity:0,
  y:40,
  ease:"power3.inOut",
  delay:2,
  stagger:{
    amount:1.5,
  }
});

gsap.from(".message",2, {
  opacity:0,
  y:40,
  ease:"power3.inOut",
  delay:2.5,
  stagger:{
    amount:1,
  }
});

gsap.from(".marquee", 1, {
  bottom: "-20%", 
  opacity: 0,
  ease: "power3.inOut",
  delay: 4.5,
})