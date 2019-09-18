
const tabs = document.querySelectorAll('.tabs');
const content = document.querySelectorAll('.tab-container');
  for (let i = 0; i < tabs.length; ++i) {
    tabs[i].addEventListener('click',  e => {  
      const siblingElement = (e.target.nextElementSibling ? e.target.nextElementSibling : e.target.previousElementSibling);
      e.target.classList.add('active')
      for (let i = 0; i < content.length; ++i) {
        content[i].style.display = 'none';
      }
      const id = e.target.dataset.tab;
      const element = document.getElementById(id);
      element.style.display = 'block';
      siblingElement.classList.remove('active');
    });
  }