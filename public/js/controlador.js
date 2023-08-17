function verPlaylist(codigoPlaylist){
    console.log('Ver playlist con codigo: ' + codigoPlaylist);
    $("#vista-playlist").show();
    $("#vista-artista").hide();
    $("#menutop10").hide();
  
   
}

function verArtista(codigoArtista){
    console.log('Ver artista con codigo: ' + codigoArtista);
    $("#vista-artista").show();
    $("#vista-playlist").hide();
    $("#menutop10").hide();
   
   
}

function agregarCancion(codigoCancion){
    console.log("Agregar cancion "+codigoCancion);
    $("#modal-playlists").modal('show');
}


// Función para mostrar la ventana modal y simular la reproducción de la canción
function mostrarModal() {
    var modal = document.getElementById('mimodall');
    modal.style.display = 'block';
    
    // Aquí podrías agregar código para simular la reproducción de la canción
    // Por ejemplo, cambiar el contenido del modal o iniciar una animación.
}

// Función para cerrar la ventana modal
function cerrarModal() {
    var modal = document.getElementById('mimodall');
    modal.style.display = 'none';}