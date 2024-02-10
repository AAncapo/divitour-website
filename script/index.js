// import { loadPage } from "./destination";

const evSliderBtns = document.querySelectorAll(".ev-slider-btn");
// const eventContact = document.querySelector(".ev-contact-a");
// const contactForm = document.querySelector(".contact-form");
const popDestContainer = document.querySelector(".pop-destinations");
const navBtns = document.querySelectorAll(".nav-btn");
const evContainer = document.querySelector(".event-container");
const imgPath = "images/destinos/";

evSliderBtns.forEach((button) => {
  button.addEventListener("click", () => {
    if (button.classList.contains("prev")) {
      // previous image
      console.log("prev image");
    } else if (button.classList.contains("next")) {
      // next image
      console.log("next image");
    }
  });
});

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

// event animation
evContainer.addEventListener("mouseover", () => {
  let poster = evContainer.firstElementChild.firstElementChild;
  poster.style.transitionProperty = "width";
  poster.style.transitionDuration = "3s";
  poster.style.width = "170%";
});
evContainer.addEventListener("mouseleave", () => {
  let poster = evContainer.firstElementChild.firstElementChild;
  poster.style.transitionProperty = "width";
  poster.style.transitionDuration = "4s";
  poster.style.width = "150%";
});

// Handle destinations previews
const VRDRO_VID = "videos/varadero-vid.mp4";
const VRDRO_IMG = "videos/varadero-poster.jpg";
const CAYOLAR_VID = "videos/cayolargo-vid.mp4";
const CAYOLAR_IMG = "videos/cayolargo-poster.jpg";
const JIB_VID = "videos/jibacoa-vid.mp4";
const JIB_IMG = "videos/jibacoa-poster.jpg";
const HAV_VID = "videos/havana-vid.mp4";
const HAV_IMG = "videos/havana-poster.jpg";
const PZAP_VID = "videos/zapata-vid.mp4";
const PZAP_IMG = "videos/zapata-poster.jpg";
const STLUC_VID = "videos/stlucia-vid.mp4";
const STLUC_IMG = "videos/stlucia-poster.jpg";
const TRIN_IMG = `videos/trinidad-poster.jpg`;
const TRIN_VID = "videos/trinidad-vid.mp4";
const GUILL_IMG = "videos/guillermo-poster.jpg";
const GUILL_VID = "videos/guillermo-vid.mp4";

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

  popDestContainer.innerHTML += `<a class="dest-container" href="pages/destination.html"> <div class="dest-image"> <video muted loop disablepictureinpicture class="dest-video" allow="autoplay;" loading="lazy" src=${videoSrc} poster=${imgSrc} frameborder="0"></video><div class="dest-gradient"></div><h3 class="dest-name">${dstName} </h3> </div> </a>`;
}

function setData() {
  //create data
  let destHabana = {
    havana: createDestino(
      "Havana",
      "descripcion de la Habana",
      [imgPathPrefix + "havana/havana.JPG"],
      [
        createHotel("Hotel1", "prueba descripcion del hotel1", [
          "https://www.memoriesresorts.com/assetsTransformed/assets/images/site/9497/OPB_IB_POOL_MAIN_D1704_013_5d115737bb40693b26d0f189b7a2eb16.jpg",
        ]),
        createHotel("Hotel2", "prueba de hotel 2", [
          "https://www.memoriesresorts.com/assetsTransformed/assets/images/site/9497/OPB_IB_POOL_MAIN_D1704_013_5d115737bb40693b26d0f189b7a2eb16.jpg",
        ]),
      ],
      [
        createServicio(
          "seafari test",
          "description del servicio este",
          [""],
          [230.32, "USD"],
          "detalles del precio",
          [24, "Horas"]
        ),
      ]
    ),
  };
  //clear data.json

  //populate data.json
  console.log("HEY!");

  fs.writeFileSync("../data.json", JSON.stringify(destHabana));
}

function createDestino(_name, desc, imgsPaths, hotels, services) {
  return {
    nombre: _name,
    descripcion: desc,
    images: imgsPaths,
    hoteles: hotels,
    servicios: services,
  };
}

function createHotel(_name, desc, imgsPaths) {
  return {
    nombre: _name,
    descripcion: desc,
    imagenes: imgsPaths,
  };
}

function createServicio(_name, desc, imgPaths, cost, costDetail, dur) {
  return {
    nombre: _name,
    decripcion: desc,
    coste: cost, // la info sobre los precios debe permanecer en el server !!!!!
    coste_detalle: costDetail, // para agregar detalles sobre costes por PAX
    duracion: dur,
    imagenes: imgPaths,
  };
}
