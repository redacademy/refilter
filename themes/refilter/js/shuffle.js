const shuffleBtn = document.querySelector('#reshuffle-btn');
const quotesGrid = document.querySelector('.quotes-grid');
const singleQuote = document.querySelectorAll('.single-quote');

const shuffleAnimation = () => {
  [...singleQuote].forEach(quote => {
    quote.style.transition = '1s all ease-in';
    quote.style.transform += 'rotate(360deg)';
    quote.style.opacity = '0';
    quote.style.transform += 'scale(0)';

    setTimeout(() => {
      quote.style.opacity = '1';
      quote.style.transform = 'scale(1)';
    }, 1300);
  });
};

shuffleBtn.addEventListener('click', e => {
  e.preventDefault();

  const quotes =
    'https://refilter.van.cp.academy.red/wp-json/acf/v3/pages/16/quotes';

  fetch(quotes)
    .then(quotes => quotes.json())
    .then(data => {
      const final = [];
      data.quotes.forEach((quote, i) => {
        const rand = Math.floor(Math.random() * i);
        final.splice(rand, 0, quote);
      });

      for (let i = 0; i < 8; i++) {
        quotesGrid.innerHTML = `
        <li class="single-quote" style="background: linear-gradient(rgba(1, 1, 1, 0.5), rgba(1, 1, 1, 0.5)), url('${final[i].single_quote_image_background}') no-repeat center center/cover">
        ${final[i].single_quote}
        </li>`;
      }
    });

  shuffleAnimation();
});
