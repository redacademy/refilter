const shuffleBtn = document.querySelector('#reshuffle-btn');
const quotesGrid = document.querySelector('.quotes-grid');
// const quoteList = document.createElement('li');
// const quoteListClass = quoteList.className('single-quote');

shuffleBtn.addEventListener('click', e => {
  e.preventDefault();

  quotesGrid.innerHTML = '';

  const quotes =
    'https://refilter.van.cp.academy.red//wp-json/acf/v3/pages/16/quotes';

  fetch(quotes)
    .then(quotes => quotes.json())
    .then(data => {
      const final = [];
      data.quotes.forEach((quote, i) => {
        const rand = Math.floor(Math.random() * i);
        final.splice(rand, 0, quote);
      });

      for (let i = 0; i < 8; i++) {
        quotesGrid.innerHTML += `
        <li style="background: linear-gradient(rgba(1, 1, 1, 0.5), rgba(1, 1, 1, 0.5)), url('${final[i].single_quote_image_background}') no-repeat center center/cover">
        ${final[i].single_quote}
        </li>
        <button id="reshuffle-btn" class="reshuffle-btn" type="submit">
        <i class="fas fa-random"></i>Reshuffle Cards
        </button>`;
      }
    });
});
