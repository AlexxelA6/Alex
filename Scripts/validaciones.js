const menuConfig = {
    "Ventas": {
        enlaces: [
            { nombre: "Registrar", href: "RegistrarVenta.html", icono: "fas fa-plus-circle" },
            { nombre: "Modificar", href: "ModificarVenta.html", icono: "fas fa-edit" },
            { nombre: "Eliminar", href: "EliminarVenta.html", icono: "fas fa-trash-alt" },
            { nombre: "Listar", href: "ListarVenta.html", icono: "fas fa-list" }
        ]
    },
    "Plantas": {
        enlaces: [
            { nombre: "Registrar", href: "RegistrarPlanta.html", icono: "fas fa-plus-circle" },
            { nombre: "Modificar", href: "ModificarPlanta.html", icono: "fas fa-edit" },
            { nombre: "Eliminar", href: "EliminarPlanta.html", icono: "fas fa-trash-alt" },
            { nombre: "Listar", href: "ListarPlanta.html", icono: "fas fa-list" }
        ]
    }
};

// Este metodo recibe como parametro un ID de un input, de está forma se agregan las validaciones correspondientes

export function configurarInput(id, tipo) {
    const input = document.getElementById(id);

    if (!input) {
        console.error(`No se encontró un elemento con id: ${id}`);
        return;
    }

    input.required = true; // Se indica que el campo es requerido desde el inicio

    switch (tipo) {
        case "correo":
            input.placeholder = "Ingrese su correo electrónico";
            input.maxLength = 40;
            
            break;
        case "correo":
            input.placeholder = "Ingrese su correo electrónico";
            input.maxLength = 40;
            break;
        case "nombre":
            input.placeholder = "Ingrese el nombre";
            input.maxLength = 30;
            break;
        case "lista":
            input.placeholder = "Selecciona una opción";
            break;
    }
}




















