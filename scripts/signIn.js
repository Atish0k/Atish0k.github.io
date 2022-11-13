/*let reg = /[А-Яа-яЁё]+(\s+[А-Яа-яЁё]+)?/;

let inp = document.querySelector("#name");
let span = document.querySelector('.span');
const button = document.querySelector('.button');
const paragraph = document.querySelector('p');

document.querySelector('.button-1').onclick = function (e) {
    e.preventDefault()
    if(!validate(reg, inp.value)){
        notValid(inp, span, 'Проверка не пройдена');
    }else {
        valid(inp, span, '');
        button.addEventListener('click', updateButton);
    }
}


function updateButton() {
    if (button.value === 'Отправить') {
        button.value = 'Отправлено';
        paragraph.textContent = 'Данные отправлены';
    } else {
        button.value = 'Отправить';
    }
}
function validate(regex, inp){
    return regex.test(inp);
}
function notValid(inp, el, mess){
    inp.classList.add('is-invalid');
    el.innerHTML = mess;
}
function valid(inp, el, mess){
    inp.classList.add('is-invalid');
    inp.classList.remove('is-valid');
    el.innerHTML = mess;
}*/

let form = document.querySelector('.js-form'),
    formInputs = document.querySelectorAll('.js-input'),
    inputEmail = document.querySelector('.js-input-email'),
    inputCheckbox = document.querySelector('.js-input-checkbox');

function validateEmail(email){
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase())
}


form.onsubmit = function (){
    let emailVal = inputEmail.value;
    emptyInputs = Array.from(formInputs).filter(input => input.value === '')

    formInputs.forEach(function (input){
        if(input.value === ''){
            input.classList.add('error');
            console.log('input not filed');
        }else{
            input.classList.remove('error');
        }
    });

    if(emptyInputs.length !== 0){
        console.log('input not filed')
        return false;
    }


    if(!validateEmail(emailVal)){
        console.log('email not valid');
        inputEmail.classList.add('error');
        return false;
    }else{
        inputEmail.classList.remove('error')
    }



}



