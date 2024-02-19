const destContainer = document.querySelector("#dest-card-container");

const events = [
  {
    name: "FotoSub International",
    desc: 'Divitour, Pipin Ferreras and Marinas Marlin call for the International Underwater Photography Event <strong>"PhotoSub Trinidad - 2024"</strong>. It will take place at the Trinidad International Marina under CMAS rules.',
    date: "From March 18th to 23th, 2024",
    image: "images/eventos/fotosub.jpg",
  },
  {
    name: "Ernest Hemingway<br>International Bill Fishing Tournament",
    desc: "",
    date: "From March 27th to the 1st of June, 2024",
    image: "images/eventos/torneo-pesca-hemingway.JPG",
  },
  {
    name: "Jardines del Rey Big Game Trolling",
    desc: "",
    date: "From 24th to 29th of October, 2024",
    image: "images/eventos/big-game-trolling.JPG",
  },
];

// set event cards data
let evCards = document.querySelectorAll("#evCard");
evCards.forEach((card, index) => {
  let evImage = card.querySelector("#evImage"),
    evTitle = card.querySelector("#evTitle"),
    evDesc = card.querySelector("#evDesc"),
    evDate = card.querySelector("#evDate");

  evImage.src = events[index].image;
  evTitle.innerHTML = events[index].name;
  evDesc.innerHTML = events[index].desc;
  evDate.innerHTML = events[index].date;
});

setDestination("HAVANA", "havana");
setDestination("VARADERO", "varadero");
setDestination("CAYO LARGO DEL SUR", "cayolargo");
setDestination("JIBACOA", "jibacoa");
setDestination("SANTA LUCIA", "stlucia");
setDestination("TRINIDAD", "trinidad");
setDestination("CAYO GUILLERMO", "guillermo");
setDestination("PENINSULA DE ZAPATA", "zapata");

const destCards = document.querySelectorAll("#destCard");
// play video on mouseover
destCards.forEach((card) => {
  let vid = card.querySelector("#destVideo");
  let gradient = card.querySelector("#cardGradient");
  //play video
  gradient.addEventListener("mouseover", () => {
    vid
      .play()
      .then(() => {
        // console.log("is playing");
      })
      .catch(() => {
        console.log("the video cannot be played yet");
      });
  });

  //pause video
  gradient.addEventListener("mouseleave", () => {
    if (!vid.paused) {
      setTimeout(() => {
        vid.pause();
      }, 400);
    }
  });
});

function setDestination(title, fileName) {
  let src = `images/destinos/${fileName}`;
  destContainer.innerHTML += `<a id="destCard" class="col" href="pages/destino.php?destination=${fileName}">
            <div id="vidContainer">
              <video
                id="destVideo"
                loop
                muted
                preload="metadata"
                loading="lazy"
                frameborder="0"
                src="${src}.mp4"
                poster="${src}.jpg"
              ></video>
              <div id="cardGradient"></div>
            </div>
            <h4 id="destName" class="text-center w-100 mb-2">${title}</h4>
          </a>`;
}
