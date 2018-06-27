var input = document.querySelectorAll('input');
var label = document.querySelectorAll('label');

for (let i = 0; i < input.length; i++) {
     input[i].addEventListener('focus', function(){
         moveLabel();
     })
     input[i].addEventListener('blur',function(){
         removeLabel();
     })
}

function moveLabel(){
    for (let i = 0; i < label.length; i++) {
        label[i].style.transition= '1s'; 
       label[i].style.transform= 'translateY(-20px)'; 
       label[i].style.fontSize= '11px';               
    }
}

function removeLabel(){
    for (let i = 0; i < label.length; i++) {
       label[i].style.transition= '1s'; 
       label[i].style.transform= 'translateY(0px)'; 
       label[i].style.fontSize= '14px';               
    }
}