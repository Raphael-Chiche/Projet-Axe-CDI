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


accepter.addEventListener("click", () => {
  localStorage.removeItem(storageContenu);
});