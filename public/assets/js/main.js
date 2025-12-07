// main.js (minimal)
document.addEventListener('DOMContentLoaded', function(){

  /* -----------------------------
     MOBILE MENU TOGGLE
  ------------------------------ */
  const btn = document.getElementById('mobileMenuBtn');
  const panel = document.getElementById('mobilePanel');
  if(btn && panel){
    btn.addEventListener('click', () => {
      const open = panel.classList.toggle('hidden');
      btn.setAttribute('aria-expanded', (!open).toString());
    });
  }

  /* -----------------------------
     COURSE SEARCH (only if exists)
  ------------------------------ */
  const search = document.getElementById('searchInput');
  const grid = document.getElementById('coursesGrid');
  const level = document.getElementById('levelFilter');

  if(search && grid){
    search.addEventListener('input', () => applyFilters());
    level.addEventListener('change', () => applyFilters());

    function applyFilters(){
      const q = search.value.toLowerCase();
      const lvl = level.value;
      const cards = grid.querySelectorAll('article');

      cards.forEach(card => {
        const title = card.querySelector('h3')?.textContent?.toLowerCase() || '';
        const desc = card.querySelector('p')?.textContent?.toLowerCase() || '';
        const levelTag = card.querySelector('span')?.textContent || '';
        const matches = (title+desc).includes(q) && (lvl === '' || levelTag === lvl);
        card.style.display = matches ? '' : 'none';
      });
    }
  }

});
