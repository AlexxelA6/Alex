export function generarOpcionesMenuUsuario(botonActivo) {

    const menuItems = [
        { nombre: "Inicio", enlace: "../Interfaces/Funcionalidad/menu.php" },
        { nombre: "Explorar", enlace: "../Planta/RegistrarPlanta.html" },
        { nombre: "Mis Historias", enlace: "../Lote/RegistrarLote.html" }
    ];

    const navMenu = document.querySelector('.nav-links');

    menuItems.forEach(item => {
        const a = document.createElement('a');
        a.href = item.enlace;

        a.appendChild(document.createTextNode(item.nombre));

        if (item.nombre === botonActivo) {
            a.classList.add('active');
        }

        navMenu.appendChild(a);
    });

}

export function eliminarHijos(claseElemento) {

    const elemento = document.querySelector(`.${claseElemento}`);
    
    if (elemento) {
        while (elemento.firstChild) {
            elemento.removeChild(elemento.firstChild);
        }
    } else {
        console.warn(`No se encontró ningún elemento con la clase "${claseElemento}"`);
    }
}
