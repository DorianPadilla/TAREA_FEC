const logo = document.getElementById('logo');
const aside =document.querySelector('.aside')
const spans = document.querySelectorAll('span');


logo.addEventListener('click',()=>{
    aside.classList.toggle('-aside');
    spans.forEach((span)=>{
        span.classList.toggle('oculto');
    });
}); 