const imagenes = document.querySelectorAll('.img-galeria')
const imagenesLigth = document.querySelector('.agregar-imagen')
const contenedorLigth = document.querySelector('.imagen-ligth')


imagenes.forEach(imagen => {

    imagen.addEventListener('click', () => {
        aparecerImagen(imagen.getAttribute('src'))

    })
})
contenedorLigth.addEventListener('click', (e) => {
    if (e.target !== imagenesLigth) {
        contenedorLigth.classList.toggle('show')
        imagenesLigth.classList.toggle('showImage')
    }
})

const aparecerImagen = (imagen) => {
    imagenesLigth.scr = imagen;
    contenedorLigth.classList.toggle('show')
    imagenesLigth.classList.toggle('showImage')
}