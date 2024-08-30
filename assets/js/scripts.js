let menuVisible = false;
//funcion que oculta o muestra el menu
function mostrarOcultarMenu(){
    if (menuVisible) {
        document.getElementById("nav").classList = "";
        menuVisible = false;
    }else{
        document.getElementById("nav").classList = "responsive";
        menuVisible = true;
    }
}


function seleccionar(){
    //ocultar el menu una vez selecciono una opciopn
    document.getElementById("nav").classList = "";
    menuVisible = false;
}

//funcion que hace una animacion en el responsive
function efectoHabilidades(){
    var skills = document.getElementById("skills");
    var distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;
    if (distancia_skills) {
        let habilidades = document.getElementsByClassName("progreso");
        habilidades[0].classList.add("wordpress");
        habilidades[1].classList.add("htmlcss");
        habilidades[2].classList.add("javascript");
        habilidades[3].classList.add("php");
        habilidades[4].classList.add("photoshop");
        habilidades[5].classList.add("comunicacion");
        habilidades[6].classList.add("TrabajoenEquipo");
        habilidades[7].classList.add("Creatividad");
        habilidades[8].classList.add("Dedicacion");
        habilidades[9].classList.add("ProjectManager");
    }
}


//detecto el scrolling para aplicar la animacion de la barra de habilidades

window.onscroll = function(){
    efectoHabilidades();
}