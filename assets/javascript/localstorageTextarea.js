const textArea = document.querySelector('textarea');
const storageKey = 'contenu';

const init = () => {
  
  textArea.value = localStorage.getItem(storageKey);
  
  textArea.addEventListener('input', () => {
    localStorage.setItem(storageKey, textArea.value);
  });
}

init();