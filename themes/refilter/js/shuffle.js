(function($) {
  const shuffleBtn = document.querySelector('#reshuffle-btn');

  shuffleBtn.addEventListener('click', e => {
    e.preventDefault();
    // shuffleAnimation();

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
        $('.quotes-grid').empty();

        for (let i = 0; i < 9; i++) {
          $('.quotes-grid')
            .append(
              `
        <li class="single-quote" style="background: linear-gradient(rgba(1, 1, 1, 0.5), rgba(1, 1, 1, 0.5)), url('${final[i].single_quote_image_background}') no-repeat center center/cover">
        ${final[i].single_quote}
        </li>`
            )
            .hide()
            .show('slow');
        }
      });
  });
})(jQuery);
