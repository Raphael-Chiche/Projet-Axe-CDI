const textArea = document.querySelector('textarea');
const accepter = document.querySelector('.envoyerChat');
const storageContenu = 'contenu';

const init = () => {
  
  textArea.value = localStorage.getItem(storageContenu);
  
  textArea.addEventListener('input', () => {
    localStorage.setItem(storageContenu, textArea.value);
  });
}

init();




// LocalStorage pour le select

// récupération du select
var SelectChoice = document.getElementById('choixTheme');

var selectedValue = localStorage.getItem('selectedOption');
if (selectedValue) {
  // remettre a 0 l'option
  SelectChoice.value = selectedValue;
}

// change sert à detecter un changement d'une valeur et a lancer la fonction dés qu'il voit un changement
SelectChoice.addEventListener('change', function() {
  localStorage.setItem('selectedOption', SelectChoice.value);
});

accepter.addEventListener("click", () => {
  localStorage.removeItem(storageContenu);
  localStorage.removeItem('selectedOption');
});

