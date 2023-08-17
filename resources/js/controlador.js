function verPlaylist(codigoPlaylist){
    console.log('Ver playlist con codigo: ' + codigoPlaylist);
    $("#vista-playlist").show();
    $("#vista-artista").hide();
    $("#menutop10t").hide();
   
}

function verArtista(codigoArtista){
    console.log('Ver artista con codigo: ' + codigoArtista);
    $("#vista-artista").show();
    $("#vista-playlist").hide();
    $("#menutop10t").hide();
   
}

function agregarCancion(codigoCancion){
    console.log("Agregar cancion "+codigoCancion);
    $("#modal-playlists").modal('show');
}
