// All variables from DOM
var dom = {
    firstStep: document.querySelector('.devis__firstStep'),
    secondStep: document.querySelector('.devis__secondStep'),
    thirdStep: document.querySelector('.devis__thirdStep'),
    inputSubmit: document.querySelectorAll('input[type=submit]'),
    devisStep: document.querySelectorAll('.devis__navStep'),
    sendMail: document.querySelector('.sendMail'),
    devis: document.querySelector('.devis'),
    firstValue: document.querySelectorAll('#firstValue'),
    secondValue: document.querySelectorAll('#secondValue'),
    infoList: document.querySelectorAll(".devis__thirdStepInfoList li"),
    summaryItems: document.querySelectorAll('.devis__thirdStepSummaryItems'),
}


var counter = 0;
var nbrValue = 0;


submitForms();



// Send Forms

function submitForms() {
    for (let i = 0; i < dom.inputSubmit.length; i++) {
        dom.inputSubmit[i].addEventListener('click', function (event) {
            if (dom.inputSubmit[i].dataset.submit === 'first') {
                event.preventDefault();
                dom.firstStep.style.display = 'none';
                dom.secondStep.style.display = 'block';

            } else if (dom.inputSubmit[i].dataset.submit === 'second') {
                event.preventDefault();
                dom.secondStep.style.display = 'none';
                dom.thirdStep.style.display = 'block';
                storeAllInput();
                changeLi();
                sendData();

            } 

            changeNavStep();
            clickNavSteps();
        })
    }
}


// Change Color of the steps
function changeNavStep() {
    if (counter < 2) {
        dom.devisStep[counter].classList.remove('--currentStep');
        counter++;
        dom.devisStep[counter].classList.add('--currentStep');
    }
}


// Make input value empty
function clearValues() {
    for (let i = 0; i < dom.firstValue.length; i++) {
        dom.firstValue[i].value = '';
    }
}

// Store all values of my inputs in the localstorage

function storeAllInput() {
    for (let i = 0; i < dom.firstValue.length; i++) {
        localStorage.setItem(nbrValue, dom.firstValue[i].value);
        nbrValue++;
    }

    for (let i = 0; i < dom.secondValue.length; i++) {
        localStorage.setItem(nbrValue, dom.secondValue[i].value);
        nbrValue++;
    }
}


// When you click on button suivant change steps

function clickNavSteps() {
    for (let i = 0; i < dom.devisStep.length; i++) {
        dom.devisStep[i].addEventListener('click', function () {
            if (dom.devisStep[i].textContent === 'Étape 1') {
                clickStepOne(i);
            } else if (dom.devisStep[i].textContent === 'Étape 2') {
                clickStepTwo(i);
            } else if (dom.devisStep[i].textContent === 'Étape 3') {
                clickStepThree(i);

            }
        })

        var summaryButton = document.querySelector('.devis__thirdStepSummaryButton');

        summaryButton.addEventListener('click', function () {
            clickStepTwo(i);
        })
    }
}

function clickStepOne(a) {
    dom.firstStep.style.display = 'block';
    dom.secondStep.style.display = 'none';
    dom.thirdStep.style.display = 'none';
    dom.devisStep[a].classList.add('--currentStep');
    dom.devisStep[1].classList.remove('--currentStep');
    dom.devisStep[2].classList.remove('--currentStep');
}

function clickStepTwo(a) {
    dom.firstStep.style.display = 'none';
    dom.secondStep.style.display = 'block';
    dom.thirdStep.style.display = 'none';
    dom.devisStep[a].classList.add('--currentStep');
    dom.devisStep[0].classList.remove('--currentStep');
    dom.devisStep[2].classList.remove('--currentStep');
}

function clickStepThree(a) {
    dom.firstStep.style.display = 'none';
    dom.secondStep.style.display = 'none';
    dom.thirdStep.style.display = 'block';
    dom.devisStep[a].classList.add('--currentStep');
    dom.devisStep[0].classList.remove('--currentStep');
    dom.devisStep[1].classList.remove('--currentStep');
}



// Change values of my li in the third step of the devis


var nbrInfo = 4;
var nbrSummary = 0;

function changeLi() {
    for (let i = 0; i < dom.infoList.length; i++) {
        dom.infoList[i].textContent += localStorage.getItem(nbrInfo);
        nbrInfo++;
        console.log(dom.infoList[i]);
    }


    for (let i = 0; i < dom.summaryItems.length; i++) {
        dom.summaryItems[i].textContent += localStorage.getItem(nbrSummary);
        nbrSummary++;
    }

}


// Disabled Percentage 

var inputCheck = document.querySelector('input[type=checkbox]');
var inputPercent = document.querySelector('.devis__firstStepInputPercent');

inputCheck.addEventListener('click', function () {
    if (inputCheck.checked === false) {
        inputPercent.style.opacity = '';
        inputPercent.disabled = true;
    } else if (inputCheck.checked === true) {
        inputPercent.style.opacity = '1';
        inputPercent.disabled = false;
    }
})



// send all items from localstorage to input form #send

var formSend = document.querySelectorAll('#send input');
var nbrCounter = 0;


function sendData() {
    for (let i = 0; i < formSend.length; i++) {
        formSend[i].value = localStorage.getItem(nbrCounter);
        nbrCounter++;
    }
}
