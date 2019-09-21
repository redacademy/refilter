const shuffleBtn = document.querySelector('#reshuffle-btn');

shuffleBtn.addEventListener('click', () => {
  alert('hey');
});

const quotes =
  'https://refilter.van.cp.academy.red//wp-json/acf/v3/pages/16/quotes';

fetch(quotes)
  .then(quotes => quotes.json())
  .then(data => {
    console.log();
    data.quotes.forEach((quote, i) => {
      console.log(quote, i);
    });
  });
