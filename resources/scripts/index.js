const destHolderA = document.querySelector(".dest-holder-a");
const destHolderB = document.querySelector(".dest-holder-b");
const navBtns = document.querySelectorAll(".nav-btn");

// toggle show/hide navbuttons list on click
const sideNavBtn = document.querySelector(".more-nav-btn");
const sideNav = document.querySelector(".nav-side");
sideNavBtn.addEventListener("click", () => {
  sideNav.style.display = sideNav.display != "none" ? "none" : "flex";
});

// Event image slider
let slider = document.querySelector(".slider"),
  sliderList = slider.querySelector(".slider-list"),
  sliderTrack = slider.querySelector(".slider-track"),
  slides = slider.querySelectorAll(".slide"),
  arrows = slider.querySelector(".slider-arrows"),
  prev = arrows.children[0],
  next = arrows.children[1],
  slideWidth = slides[0].offsetWidth,
  slideIndex = 0,
  posInit = 0,
  posX1 = 0,
  posX2 = 0,
  posY1 = 0,
  posY2 = 0,
  posFinal = 0,
  isSwipe = false,
  isScroll = false,
  allowSwipe = true,
  transition = true,
  nextTrf = 0,
  prevTrf = 0,
  lastTrf = --slides.length * slideWidth,
  posThreshold = slides[0].offsetWidth * 0.35,
  trfRegExp = /([-0-9.]+(?=px))/,
  swipeStartTime,
  swipeEndTime,
  getEvent = function () {
    return event.type.search("touch") !== -1 ? event.touches[0] : event;
  },
  slide = function () {
    if (transition) {
      sliderTrack.style.transition = "transform .5s";
    }
    sliderTrack.style.transform = `translate3d(-${
      slideIndex * slideWidth
    }px, 0px, 0px)`;

    prev.classList.toggle("disabled", slideIndex === 0);
    next.classList.toggle("disabled", slideIndex === --slides.length);

    setEventInfo(slideIndex);
  },
  swipeStart = function () {
    let evt = getEvent();

    if (allowSwipe) {
      swipeStartTime = Date.now();

      transition = true;

      nextTrf = (slideIndex + 1) * -slideWidth;
      prevTrf = (slideIndex - 1) * -slideWidth;

      posInit = posX1 = evt.clientX;
      posY1 = evt.clientY;

      sliderTrack.style.transition = "";

      document.addEventListener("touchmove", swipeAction);
      document.addEventListener("mousemove", swipeAction);
      document.addEventListener("touchend", swipeEnd);
      document.addEventListener("mouseup", swipeEnd);

      sliderList.classList.remove("grab");
      sliderList.classList.add("grabbing");
    }
  },
  swipeAction = function () {
    let evt = getEvent(),
      style = sliderTrack.style.transform,
      transform = +style.match(trfRegExp)[0];

    posX2 = posX1 - evt.clientX;
    posX1 = evt.clientX;

    posY2 = posY1 - evt.clientY;
    posY1 = evt.clientY;

    if (!isSwipe && !isScroll) {
      let posY = Math.abs(posY2);
      if (posY > 7 || posX2 === 0) {
        isScroll = true;
        allowSwipe = false;
      } else if (posY < 7) {
        isSwipe = true;
      }
    }

    if (isSwipe) {
      if (slideIndex === 0) {
        if (posInit < posX1) {
          setTransform(transform, 0);
          return;
        } else {
          allowSwipe = true;
        }
      }

      // запрет ухода вправо на последнем слайде
      if (slideIndex === --slides.length) {
        if (posInit > posX1) {
          setTransform(transform, lastTrf);
          return;
        } else {
          allowSwipe = true;
        }
      }

      if (
        (posInit > posX1 && transform < nextTrf) ||
        (posInit < posX1 && transform > prevTrf)
      ) {
        reachEdge();
        return;
      }

      sliderTrack.style.transform = `translate3d(${
        transform - posX2
      }px, 0px, 0px)`;
    }
  },
  swipeEnd = function () {
    posFinal = posInit - posX1;

    isScroll = false;
    isSwipe = false;

    document.removeEventListener("touchmove", swipeAction);
    document.removeEventListener("mousemove", swipeAction);
    document.removeEventListener("touchend", swipeEnd);
    document.removeEventListener("mouseup", swipeEnd);

    sliderList.classList.add("grab");
    sliderList.classList.remove("grabbing");

    if (allowSwipe) {
      swipeEndTime = Date.now();
      if (
        Math.abs(posFinal) > posThreshold ||
        swipeEndTime - swipeStartTime < 300
      ) {
        if (posInit < posX1) {
          slideIndex--;
        } else if (posInit > posX1) {
          slideIndex++;
        }
      }

      if (posInit !== posX1) {
        allowSwipe = false;
        slide();
      } else {
        allowSwipe = true;
      }
    } else {
      allowSwipe = true;
    }
  },
  setTransform = function (transform, comapreTransform) {
    if (transform >= comapreTransform) {
      if (transform > comapreTransform) {
        sliderTrack.style.transform = `translate3d(${comapreTransform}px, 0px, 0px)`;
      }
    }
    allowSwipe = false;
  },
  reachEdge = function () {
    transition = false;
    swipeEnd();
    allowSwipe = true;
  };

sliderTrack.style.transform = "translate3d(0px, 0px, 0px)";
sliderList.classList.add("grab");

sliderTrack.addEventListener("transitionend", () => (allowSwipe = true));
slider.addEventListener("touchstart", swipeStart);
slider.addEventListener("mousedown", swipeStart);

arrows.addEventListener("click", function () {
  let target = event.target;

  if (target.classList.contains("next")) {
    slideIndex++;
  } else if (target.classList.contains("prev")) {
    slideIndex--;
  } else {
    return;
  }

  slide();
});

// set event text
const evTitle = document.querySelector(".ev-title");
const evDesc = document.querySelector(".ev-desc");
const evDate = document.querySelector(".ev-date");

const upcomingEvents = [
  {
    name: "FotoSub International",
    desc: 'Divitour, Pipin Ferreras and Marinas Marlin call for the International Underwater Photography Event <strong>"PhotoSub Trinidad - 2024"</strong>. It will take place at the Trinidad International Marina under CMAS rules.',
    date: "From March 18th to 23th, 2024",
    image: "./images/eventos/fotosub-banner.jpeg",
  },
  {
    name: "Ernest Hemingway<br>International Bill Fishing Tournament",
    desc: "",
    date: "From March 27th to the 1st of June, 2024",
    image: "./images/eventos/torneo-pesca-hemingway.JPG",
  },
  {
    name: "Jardines del Rey <br>Big Game Trolling",
    desc: "",
    date: "From 24th to 29th of October, 2024",
    image: "./images/eventos/big-game-trolling.JPG",
  },
];

setEventInfo(slideIndex);

function setEventInfo(currSlide) {
  if (currSlide >= 0 && currSlide < upcomingEvents.length) {
    let ev = upcomingEvents[currSlide];
    evTitle.innerHTML = ev.name;
    evDesc.innerHTML = ev.desc;
    evDate.innerHTML = ev.date;
  }
}

// Formulario //
// const evContactBtn = document.querySelector(".ev-contact-a");
// const contactForm = document.querySelector(".contact-form");
// let isContactVeible = false;
// evContactBtn.addEventListener("click", () => {
//   isContactVeible = !isContactVeible;
//   if (isContactVeible) {
//     contactForm.style.display = "block";
//   } else {
//     contactForm.style.display = "none";
//   }
// });

// set destinations preview videos and posters
let destCount = 0;

setDestination("HAVANA", "havana");
setDestination("VARADERO", "varadero");
setDestination("CAYO LARGO DEL SUR", "cayolargo");
setDestination("JIBACOA", "jibacoa");
setDestination("SANTA LUCIA", "stlucia");
setDestination("TRINIDAD", "trinidad");
setDestination("CAYO GUILLERMO", "guillermo");
setDestination("PENINSULA DE ZAPATA", "zapata");

const destContainers = document.querySelectorAll(".dest-container");

// play video on mouseover
destContainers.forEach((destC) => {
  let vid = destC.firstElementChild.children[0];
  let gradient = destC.firstElementChild.children[1];

  //play video
  gradient.addEventListener("mouseover", () => {
    vid
      .play()
      .then(() => {
        console.log("is playing");
      })
      .catch(() => {
        console.log("the video cannot be played yet");
      });
  });
  //pause video
  gradient.addEventListener("mouseleave", () => {
    //TODO: reduce playback speed (playbackRate) over time
    if (!vid.paused) {
      setTimeout(() => {
        vid.pause();
      }, 400);
    }
  });
});

function setDestination(title, fileName) {
  let src = `pages/home/local-images/dest-vids/${fileName}`;

  let destHolderSelected;
  if (destCount < 4) {
    destHolderSelected = destHolderA;
  } else {
    destHolderSelected = destHolderB;
  }
  destHolderSelected.innerHTML += `<a class="dest-container" href="pages/destination.html"> <div class="dest-image"> <video muted loop disablepictureinpicture class="dest-video" allow="autoplay;" preload="metadata" loading="lazy" src="${src}.mp4" poster="${src}.jpg" frameborder="0"></video><div class="dest-gradient"></div><h3 class="dest-name">${title} </h3> </div> </a>`;

  destCount++;
}
