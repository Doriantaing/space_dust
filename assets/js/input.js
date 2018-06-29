var input = document.querySelectorAll('input');
var label = document.querySelectorAll('label');

for (let i = 0; i < input.length; i++) {
     input[i].addEventListener('focus', function(e){
         var elem = e.srcElement.parentElement.children[1];
         elem.style.transition= '.3s';
         elem.style.transform= 'translateY(-20px)';
         elem.style.fontSize= '11px';
     })
     input[i].addEventListener('blur',function(e){
         if (input[i].value === '') {
            var elem = e.srcElement.parentElement.children[1];
              elem.style.transition= '.3s';
              elem.style.transform= 'translateY(0px)';
              elem.style.fontSize= '14px';
        }
     })
}
