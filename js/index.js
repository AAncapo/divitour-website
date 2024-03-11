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


