const shuffleBtn = document.querySelector('#reshuffle-btn');

shuffleBtn.addEventListener('click', () => {
  alert('hey');
});

const quotes =
  'https://refilter.van.cp.academy.red//wp-json/acf/v3/pages/16/quotes';

fetch(quotes)
  .then(quotes => quotes.json())
  .then(data => {
    // const final = [];
    data.quotes.forEach(quote => {
      console.log(quote);
      const random = quote[Math.floor(Math.random() * quote.length)];
      //   const rand = Math.floor(Math.random() * i);
      //   final[rand] = quote;
      console.log(random);
    });
    // console.log(final);
  });
