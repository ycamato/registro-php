const formulario = document.getElementById("formulario")
const enviar = document.getElementById("enviar")
const contenido = document.getElementById("contenido")

enviar.addEventListener("click", (e) => {
    e.preventDefault()

    const datos = new FormData(formulario)

    fetch("php/usuario.php", {
        method: "POST",
        body: datos
    }).then(res => res.text()).then(info => {

        if (info == 2) {
            alert("mal")
        } else {
            contenido.innerHTML = info
            alert("bien")
        }
    })
})