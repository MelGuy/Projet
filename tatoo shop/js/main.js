"use strict";

$(document).ready(function(){
    $('.show').on('click', showBook);
    //$('.contact').on('submit', nonEnvoie);
});

function showBook(){
  
    $(".hide").toggle('fast');

};

function surligne(champ, erreur)
{
   if(erreur){
      champ.style.backgroundColor = "#fba";
    } else{
      champ.style.backgroundColor = "";
}
};

function verifName(champ){
    if(champ.value.length < 2 || champ.value.length > 25){
        console.log(champ);
      surligne(champ, true);
      return false;
   }
   else
   {
       console.log(champ);
      surligne(champ, false);
      return true;
   }
};

function verifMess(champ){
    if(champ.value.length < 12 || champ.value.length > 250){
        console.log(champ);
      surligne(champ, true);
      return false;
   }
   else
   {
       console.log(champ);
      surligne(champ, false);
      return true;
   }
};

function verifForm(f)
{
   var pseudoOk = verifName(f.name);
   var messageOk = verifMess(f.message);
   
   if(pseudoOk && messageOk)
      return true;
   else
   {
    $('<div class="alert"><h3>Veuillez remplir tous les champs</h3></div>').insertAfter("#contact");
  //alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
