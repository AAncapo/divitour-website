const popDestContainer = document.querySelector(".pop-destinations");
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

const upcomingEvents = {
  0: {
    name: "FotoSub International",
    desc: 'Divitour, Pipin Ferreras and Marinas Marlin call for the International Underwater Photography Event <strong>"PhotoSub Trinidad - 2024"</strong>. It will take place at the Trinidad International Marina under CMAS rules.',
    date: "From March 18th to 23th, 2024",
    image: "./images/eventos/fotosub-banner.jpeg",
  },
  1: {
    name: "Ernest Hemingway International Bill Fishing Tournament, 72nd Edition",
    desc: "",
    date: "From March 27th to the 1st of June, 2024",
    image: "./images/eventos/torneo-pesca-hemingway.JPG",
  },
  2: {
    name: "Jardines del Rey Big Game Trolling",
    desc: "",
    date: "From 24th to 29th of October, 2024",
    image: "./images/eventos/big-game-trolling.JPG",
  },
};

function getEventInfo(idx) {
  return upcomingEvents[idx];
}

function setEventInfo(currSlide) {
  let ev = getEventInfo(currSlide);
  evTitle.innerHTML = ev.name;
  evDesc.innerHTML = ev.desc;
  evDate.innerHTML = ev.date;
}

const prevSlide = document.querySelector(".btn-prev");
prevSlide.addEventListener("click", () => {
  if (currSlide === 0) {
    currSlide = maxSlide;
  } else {
    currSlide--;
  }
  //set event text
  setEventInfo(currSlide);
  //show slide
  slides.forEach((slide, idx) => {
    slide.style.transform = `translateX(${100 * (idx - currSlide)}%)`;
  });
});

const nextSlide = document.querySelector(".btn-next");
nextSlide.addEventListener("click", () => {
  if (currSlide === maxSlide) {
    currSlide = 0;
  } else {
    currSlide++;
  }
  // set event text
  setEventInfo(currSlide);
  // show slide
  slides.forEach((slide, idx) => {
    slide.style.transform = `translateX(${100 * (idx - currSlide)}%)`;
  });
});

setEventInfo(1);

// Handle destinations previews
const vidPfx = "pages/home/local-images/dest-vids/";

const JIB_VID = vidPfx + "jibacoa-vid.mp4";
const JIB_IMG = vidPfx + "jibacoa-poster.jpg";
const HAV_VID = vidPfx + "havana-vid.mp4";
const HAV_IMG = vidPfx + "havana-poster.jpg";
const PZAP_VID = vidPfx + "zapata-vid.mp4";
const PZAP_IMG = vidPfx + "zapata-poster.jpg";
const TRIN_VID = vidPfx + "trinidad-vid.mp4";
const TRIN_IMG = vidPfx + `trinidad-poster.jpg`;
const GUILL_VID = vidPfx + "guillermo-vid.mp4";
const GUILL_IMG = vidPfx + "guillermo-poster.jpg";
const VRDRO_VID = vidPfx + "varadero-vid.mp4";
const VRDRO_IMG = vidPfx + "varadero-poster.jpg";
const STLUC_VID = vidPfx + "stlucia-vid.mp4";
const STLUC_IMG = vidPfx + "stlucia-poster.jpg";
const CAYOLAR_VID = vidPfx + "cayolargo-vid.mp4";
const CAYOLAR_IMG = vidPfx + "cayolargo-poster.jpg";

// havana
setDestination(HAV_IMG, "HAVANA", HAV_VID);
// varadero
setDestination(VRDRO_IMG, "VARADERO", VRDRO_VID);
// cayolargo
setDestination(CAYOLAR_IMG, "CAYO LARGO DEL SUR", CAYOLAR_VID);
// jibacoa
setDestination(JIB_IMG, "JIBACOA", JIB_VID);
// stlucia
setDestination(STLUC_IMG, "SANTA LUCIA", STLUC_VID);
// trinidad
setDestination(TRIN_IMG, "TRINIDAD", TRIN_VID);
// cguillermo
setDestination(GUILL_IMG, "CAYO GUILLERMO", GUILL_VID);
// zapata
setDestination(PZAP_IMG, "PENINSULA DE ZAPATA", PZAP_VID);

// play video
const destContainers = document.querySelectorAll(".dest-container");

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

function setDestination(imgPath, dstName, videoSrc) {
  let imgSrc = "" ? imgPath.length <= 0 : imgPath;

  popDestContainer.innerHTML += `<a class="dest-container" href="pages/destination.html"> <div class="dest-image"> <video muted loop disablepictureinpicture class="dest-video" allow="autoplay;" preload="metadata" loading="lazy" src=${videoSrc} poster=${imgSrc} frameborder="0"></video><div class="dest-gradient"></div><h3 class="dest-name">${dstName} </h3> </div> </a>`;
}

// function setData() {
//   //create data
//   let destHabana = {
//     havana: createDestino(
//       "Havana",
//       "descripcion de la Habana",
//       [imgPathPrefix + "havana/havana.JPG"],
//       [
//         createHotel("Hotel1", "prueba descripcion del hotel1", [
//           "https://www.memoriesresorts.com/assetsTransformed/assets/images/site/9497/OPB_IB_POOL_MAIN_D1704_013_5d115737bb40693b26d0f189b7a2eb16.jpg",
//         ]),
//         createHotel("Hotel2", "prueba de hotel 2", [
//           "https://www.memoriesresorts.com/assetsTransformed/assets/images/site/9497/OPB_IB_POOL_MAIN_D1704_013_5d115737bb40693b26d0f189b7a2eb16.jpg",
//         ]),
//       ],
//       [
//         createServicio(
//           "seafari test",
//           "description del servicio este",
//           [""],
//           [230.32, "USD"],
//           "detalles del precio",
//           [24, "Horas"]
//         ),
//       ]
//     ),
//   };
//   //clear data.json

//   //populate data.json
//   console.log("HEY!");

//   fs.writeFileSync("../data.json", JSON.stringify(destHabana));
// }

// function createDestino(_name, desc, imgsPaths, hotels, services) {
//   return {
//     nombre: _name,
//     descripcion: desc,
//     images: imgsPaths,
//     hoteles: hotels,
//     servicios: services,
//   };
// }

// function createHotel(_name, desc, imgsPaths) {
//   return {
//     nombre: _name,
//     descripcion: desc,
//     imagenes: imgsPaths,
//   };
// }

// function createServicio(_name, desc, imgPaths, cost, costDetail, dur) {
//   return {
//     nombre: _name,
//     decripcion: desc,
//     coste: cost, // la info sobre los precios debe permanecer en el server !!!!!
//     coste_detalle: costDetail, // para agregar detalles sobre costes por PAX
//     duracion: dur,
//     imagenes: imgPaths,
//   };
// }
