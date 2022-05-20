const menu = document.querySelector('.menu')
const menu1 = document.querySelector('.menu-navegacion')

menu.addEventListener('click', ()=>{

menu1.classList.toggle("spread")
})

window.addEventListener('click', e=>{

 if(menu1.classList.contains('spread') && e.target != menu1 && e.target !=menu){
    menu1.classList.toggle("spread")
 }
    })