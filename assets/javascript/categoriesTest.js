
function Categories(chatCategorie) {
  const btns = document.querySelectorAll(".tag-button")// tag que je met sur tout les btn

  btns.forEach(function(tagButton) {
    tagButton.style.backgroundColor = 'white'
  })
  const titleChat = document.querySelector(".navbarTitle")
  // titleChat.style.color = chatCategorie == "chatRap" ? "var(--cat1)" : "var(--white)"; 

    titleChat.style.color = 
    chatCategorie == "chatRap" ? "var(--cat1)" : 
    chatCategorie == "chatKpop" ? "var(--cat2)" : 
    chatCategorie == "chatClassique" ? "var(--cat3)" :
    chatCategorie == "chatElectro"? "var(--cat4)" : 
    chatCategorie == "chatJazz" ? "var(--cat5)" : 
    chatCategorie == "chatRock" ? "var(--cat6)" : 
    chatCategorie == "chatMetal" ? "var(--cat7)" :
    chatCategorie == "chatPop"? "var(--cat8)" :
    chatCategorie == "chatFunk" ? "var(--cat9)" :
    chatCategorie == "chatCountry" ? "var(--cat10)" : "var(--white)";
    
    const categoriesTweet = document.querySelectorAll(".tweet"); 

    categoriesTweet.forEach(function (cat) {
      let tag = cat.getAttribute('data-categorie')
      cat.style.display = tag != chatCategorie ? "none" : "flex" 
    });
}

function Reset(){
  const categoriesTweet = document.querySelectorAll(".tweet"); 
  const titleChat = document.querySelector(".navbarTitle")
  titleChat.style.color = "white" ;
    categoriesTweet.forEach(function (cat) {
      cat.style.display = "flex" ;
    });
}
