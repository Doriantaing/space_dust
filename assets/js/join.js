var buttonApply = document.querySelectorAll('.joinOffers__boxSummaryButton');
var joinJobs = document.querySelector('.joinOffers');
var joinForms = document.querySelector('.joinForm');

// Afficher le formulaire quand on clique sur Postuler

for (let i = 0; i < buttonApply.length; i++) {
   buttonApply[i].addEventListener('click',function(){
     joinJobs.style.display = 'none';
     joinForms.style.display = 'block';
   });    
}


// Quand on click sur Retour on remet les offres

var joinReturn = document.querySelector('.joinForm__return');

joinReturn.addEventListener('click',function(){
    joinJobs.style.display = 'block';
    joinForms.style.display = 'none';
})