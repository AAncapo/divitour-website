const evPoster = document.querySelector(".ev-poster");
const evSliderBtns = document.querySelectorAll(".ev-slider-btn");
const eventContact = document.querySelector(".ev-contact-a");
const contactForm = document.querySelector(".contact-form");
const popDestContainer = document.querySelector(".pop-destinations");
const navBtns = document.querySelectorAll(".nav-btn");

const imgPath = "images/destinos/";

// eventContact.addEventListener("click", () => {
//   contactForm.style.height = `300px`;
// });

// event poster zoom transition
evPoster.addEventListener("scroll", () => {
  if (evPoster.style.top <= window.screenY / 1.5) {
    console.log("dadas");
  }
});

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
    let elem;
    if (btn.firstElementChild) {
      if (btn.lastElementChild.style.opacity > 0) {
        btn.lastElementChild.style.opacity = 0;
      } else {
        btn.lastElementChild.style.opacity = 100;
      }
    }
  });
});

// async function playVideo() {
//   try {
//     await
//   }
// }
const VRDRO_VID = "";
const VRDRO_IMG = `${imgPath}varadero/varadero.jpg`;
const CAYOLAR_VID = "";
const CAYOLAR_IMG = "";
const JIB_VID = "";
const JIB_IMG = "";
const HAV_VID = "";
const HAV_IMG = "";
const PZAP_VID = "";
const PZAP_IMG = "";
const STLUC_VID = "";
const STLUC_IMG = "";
// set destination cards in home Destinations section
// jibacoa
setDestination(
  `videos/jibacoa-poster.jpg`,
  "JIBACOA",
  "videos/jibacoa-vid.mp4"
);
// santa lucia
setDestination(
  `videos/stlucia-poster.jpg`,
  "SANTA LUCIA",
  "videos/stlucia-vid.mp4"
);
// trinidad
setDestination(
  `videos/trinidad-poster.jpg`,
  "TRINIDAD",
  "videos/trinidad-vid.mp4"
);
//cayo guillermo
setDestination(
  `videos/guillermo-poster.jpg`,
  "CAYO GUILLERMO",
  "videos/guillermo-vid.mp4"
);
// varadero
setDestination(VRDRO_IMG, "VARADERO");
// cayo largo
setDestination(`${imgPath}cayolargo/cayolargo1.png`, "CAYO LARGO DEL SUR");
// havana
setDestination(`${imgPath}havana/havana.JPG`, "HAVANA");
// peninsula de zapata
setDestination(`${imgPath}zapata/zapata.jpg`, "PENINSULA DE ZAPATA");

// play video
const destContainers = document.querySelectorAll(".dest-container");
const destVids = document.querySelectorAll(".dest-video");

destContainers.forEach((destC) => {
  let vid = destC.firstElementChild.children[0];
  let poster = destC.firstElementChild.children[1];

  //play video
  poster.addEventListener("mouseover", () => {
    vid
      .play()
      .then(() => {
        poster.style.opacity = 0;
      })
      .catch(() => {
        // fake interaction or wait until video loads
        console.log("the video cannot be played yet");
      });
  });

  poster.addEventListener("mouseleave", () => {
    //TODO: reduce playback speed (playbackRate) over time
    if (!vid.paused) {
      let done = false;
      let start, prevTimestamp;

      function animatePlaybackRate(timestamp) {
        if (start === undefined) start = timestamp;

        const elapsed = timestamp - start;
        console.log(elapsed);
        if (prevTimestamp !== timestamp) {
          let count = Math.min(0.1 * elapsed, 0);
          vid.playbackRate = count;
          console.log(vid.playbackRate);
          if (count === 0) done = true;
        }

        if (elapsed < 2000) {
          prevTimestamp = timestamp;
          if (!done) {
            console.log("not done");
            window.requestAnimationFrame(animatePlaybackRate);
          } else {
            console.log("done, is paused");
            vid.pause();
          }
        }
      }

      window.requestAnimationFrame(animatePlaybackRate);
    }
  });
});

function setDestination(imgPath, dstName, videoSrc) {
  let imgSrc = "" ? imgPath.length <= 0 : imgPath;

  popDestContainer.innerHTML += `<div class="dest-container"> <div class="dest-image"> <video loop class="dest-video" allow="autoplay;" src=${videoSrc} frameborder="0"></video> <img src=${imgSrc}></img><div class="dest-gradient"><h3 class="dest-name">${dstName} </h3></div> </div> </div>`;
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
