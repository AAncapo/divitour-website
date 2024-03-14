const collapsableTextElements =  document.querySelectorAll('.collapsable-text');

collapsableTextElements.forEach(ct => {
  let toggleCollapseBtn = ct.querySelector('.toggle-more');
  if (!toggleCollapseBtn) return;
  toggleCollapseBtn.addEventListener('click', () => {
    let isExpanded = ct.classList.contains('text-expanded');
    if (isExpanded) {
      //collapse
      ct.classList.remove('text-expanded');
      ct.classList.add('text-collapsed');
      toggleCollapseBtn.textContent = "Read more";
    } else {
      //expand
      ct.classList.remove('text-collapsed');
      ct.classList.add('text-expanded');
      toggleCollapseBtn.textContent = "Read less";
    }
  })
});

