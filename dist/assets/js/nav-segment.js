function mostrarPestana(n) {
    var pestanas = document.getElementsByClassName("m-tabs__topic");
    var cabecera = document.getElementsByClassName("m-tabs__item");
    for(i = 0; i<pestanas.length; i++){
        if(pestanas[i].className.includes("-isActive")){
            pestanas[i].className = pestanas[i].className.replace("-isActive", "");
            cabecera[i].className = cabecera[i].className.replace("-isActive", "");
            break;
        }
    }
    pestanas[n].className += " -isActive";
    cabecera[n].className += " -isActive";
}