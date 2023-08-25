const logo = document.getElementById('logo');
const aside =document.querySelector('.aside')
const spans = document.querySelectorAll('span');

logo.addEventListener('click',()=>{
    aside.classList.toggle('-aside');
    spans.forEach((span)=>{
        span.classList.toggle('oculto');
    });
}); 
const card = document.querySelectorAll('.card');

card.addEventListener('visibilitychange', () => {
  if (card.hidden) {
    // El div de clase card ha desaparecido
    console.log('El div ha desaparecido');
  } else {
    // El div de clase card ha aparecido
    console.log('El div ha aparecido');
  }
});

