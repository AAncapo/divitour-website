const collapsableTextElements =  document.querySelectorAll('.collapsable-text');

collapsableTextElements.forEach(ct => {
  let dots = ct.querySelector('.dots'),
  moreText = ct.querySelector('.more'),
  toggleCollapseBtn = ct.querySelector('.toggle-more');

  toggleCollapseBtn.addEventListener('click', () => {
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      toggleCollapseBtn.textContent = "Read more";
      moreText.style.display = "none" // no --- change display from webkit
    } else {
      dots.style.display = "none";
      toggleCollapseBtn.textContent = "Read less";
      moreText.style.display = "inline";
    }
  })
});
