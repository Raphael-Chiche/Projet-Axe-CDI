const votreCompte= document.querySelector(".parametreVotreCompte");
const btnCompte = document.querySelector("#idVotreCompte");

const notification= document.querySelector(".parametreNotification");
const btnNotif = document.querySelector("#idNotification");



let estVisibleCompte = false; 
// La variable isVisible est définie en dehors de la fonction et est initialisée à false, ce qui signifie que les div ne seront pas visibles au départ.
btnCompte.addEventListener("click", function (){
    estVisibleCompte = !estVisibleCompte; // true -> false et vice versa

    votreCompte.style.display = estVisibleCompte ? "flex" : "none"; // si c'est true, alors c'est none sinon c'est flex

    if(votreCompte.style.display=="flex"){
        notification .style.display="none";
    }
})
 
let estVisibleNotif = false; 
// La variable isVisible est définie en dehors de la fonction et est initialisée à false, ce qui signifie que les div ne seront pas visibles au départ.
btnNotif.addEventListener("click", function (){
    estVisibleNotif = !estVisibleNotif; // true -> false et vice versa
    
    notification.style.display = estVisibleNotif ? "flex" : "none"; // si c'est true, alors c'est none sinon c'est flex

    if(notification.style.display=="flex"){
        votreCompte .style.display="none";
    }
})

