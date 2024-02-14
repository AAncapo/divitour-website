const destHolderA = document.querySelector(".dest-holder-a");
const destHolderB = document.querySelector(".dest-holder-b");
const navBtns = document.querySelectorAll(".nav-btn");

// toggle show/hide navbuttons list on click
navBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (btn.firstElementChild) {
      if (btn.lastElementChild.style.opacity > 0) {
        btn.lastElementChild.style.opacity = 0;
      } else {
        btn.lastElementChild.style.opacity = 100;
      }
    }
  });
});

// Event image slider
const slides = document.querySelectorAll(".slide");
const evTitle = document.querySelector(".ev-title");
const evDesc = document.querySelector(".ev-desc");
const evDate = document.querySelector(".ev-date");

slides.forEach((slide, idx) => {
  slide.style.transform = `translateX(${idx * 100}%)`;
});

let currSlide = 0;
let maxSlide = slides.length - 1;

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

function getEventInfo(idx) {
  return upcomingEvents[idx];
}

function setEventInfo(currSlide) {
  let ev = getEventInfo(currSlide);
  evTitle.innerHTML = ev.name;
  evDesc.innerHTML = ev.desc;
  evDate.innerHTML = ev.date;
}

// const prevSlide = document.querySelector(".btn-prev");
// prevSlide.addEventListener("click", () => {
//   if (currSlide === 0) {
//     currSlide = maxSlide;
//   } else {
//     currSlide--;
//   }
//   //set event text
//   setEventInfo(currSlide);
//   //show slide
//   slides.forEach((slide, idx) => {
//     slide.style.transform = `translateX(${100 * (idx - currSlide)}%)`;
//   });
// });

// const nextSlide = document.querySelector(".btn-next");
// nextSlide.addEventListener("click", () => {
//   if (currSlide === maxSlide) {
//     currSlide = 0;
//   } else {
//     currSlide++;
//   }
//   // set event text
//   setEventInfo(currSlide);
//   // show slide
//   slides.forEach((slide, idx) => {
//     slide.style.transform = `translateX(${100 * (idx - currSlide)}%)`;
//   });
// });

setEventInfo(0);

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
