const destContainer = document.querySelector("#dest-card-container");

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

  card.addEventListener("click", () => {
    vid.pause();
    gradient.style.opacity = "100";
  });
});

function setDestination(title, fileName, enable = true) {
  let src = `images/destinos/${fileName}`;
  let _link = enable ? `pages/destino.php?dest_id=${fileName}` : "#";
  destContainer.innerHTML += `<a id="destCard" class="col-3 p-0" href=${_link}  style="overflow:hidden; color: #fff;">
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
              <p id="destName" class="position-absolute w-100 m-0 text-center fw-medium">${title}</p>
            </div>
            
          </a>`;
}
