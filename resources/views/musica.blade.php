<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LanguageMusic</title>
  <link rel="icon" href="{{ asset('img/cover1.jpg') }}" >
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <script src="https://kit.fontawesome.com/b9da7bb172.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
      {{-- <img src="{{ asset('img/spotify-white-logo.png') }}" style="width: 180px;"> --}}
      <i class="fa-solid fa-music"></i>
      LanguageMusic
    </a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="{{route('login.index')}}">Cerrar Sesion</a>
      </li>
    </ul>
  </nav>
  
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Artistas</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <li class="nav-item"><div class="nav-link" onclick="verArtista(1)"><i class="fas fa-music"></i> Artista 1</div></li>
          </ul>
  
          <ul class="nav flex-column">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Playlists</span>
              {{-- <a class="d-flex align-items-center text-muted" href="#"> --}}
                <span data-feather="plus-circle">
                  <button data-bs-toggle="modal" data-bs-target="#modal-agregar-playlist">
                    <i class="fa-regular fa-square-plus"></i>
                  </button>
                </span>
              {{-- </a> --}}
            </h6>
            <li class="nav-item"><div class="nav-link" onclick="verPlaylist(1)"><i class="fas fa-play"></i> Playlist 1</div></li>
            <li class="nav-item"><div class="nav-link" onclick="verPlaylist(2)"><i class="fas fa-play"></i> Playlist 2</div></li>
            <li class="nav-item"><div class="nav-link" onclick="verPlaylist(3)"><i class="fas fa-play"></i> Playlist 3</div></li>
            <li class="nav-item"><div class="nav-link" onclick="verPlaylist(4)"><i class="fas fa-play"></i> Playlist 4</div></li>
            <li class="nav-item"><div class="nav-link" onclick="verPlaylist(5)"><i class="fas fa-play"></i> Playlist 5</div></li>
            <li class="nav-item"><div class="nav-link" onclick="verPlaylist(6)"><i class="fas fa-play"></i> Playlist 6</div></li>
          </ul>
        </div>
      </nav>
  
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div id="menutop10" class="col-8" style="display:">
          Top 10 canciones más escuchadas
        
          <div class="row song-item">
            <div class="col-1"><i class="fas fa-play"></i></div>
            <div class="col-10">
              <div class="song-title">Cancion</div>
              <div class="song-description">Artista - Album</div>
            </div>
            <div class="col-1">
                <span>3:56</span>
                <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
            </div>
          </div>

          </div>

        <div id="vista-playlist" style="display: none">
          <section class="container-fluid">
            <div class="row">
              <div class="col-4 text-center">
                <h5>Playlist 1</h5>
                <div class="cover-image">
                    <i class="fas fa-music fa-9x"></i>
                </div>
                <button   onclick="mostrarModal()"  class="btn btn-success"type="button">Play</button>
              </div>
              <div class="col-8">
                
                <!--Item 1 -->
                <div class="row song-item">
                  <div class="col-1"><i  class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                  </div>
                </div>
  
                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                  </div>
                </div>
  
                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                  </div>
                </div>
  
                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                  </div>
                </div>
  
                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                  </div>
                </div>
  
                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                  </div>
                </div>
  
                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                  </div>
                </div>
  
                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                  </div>
                </div>
  
              </div>
            </div>
          </section>
        </div>

        <!------------------------------->

        <div id="vista-artista" style="display:none;">
          <section class="container-fluid">
            <div class="row">
              <div class="col-4 text-center">
                <div class="cover-image" style="background-image:url(img/cover1.jpg);">
                </div><br>
                <h5 class="text-muted">Album 1</h5>
                <button  class="btn btn-success"type="button">Play</button>
              </div>
              <div class="col-8">
                
                <!--Item 1 -->
                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                      <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                  </div>
                </div>

                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                      <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                  </div>
                </div>

                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                      <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                  </div>
                </div>

                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                      <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                  </div>
                </div>

                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                      <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                  </div>
                </div>

                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                      <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                  </div>
                </div>

                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                      <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                  </div>
                </div>

                <div class="row song-item">
                  <div class="col-1"><i class="fas fa-play"></i></div>
                  <div class="col-10">
                    <div class="song-title">Cancion</div>
                    <div class="song-description">Artista - Album</div>
                  </div>
                  <div class="col-1">
                      <span>3:56</span>
                      <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                  </div>
                </div>

              </div>
            </div>
          </section>

          <hr>
          
          <section class="container-fluid">
              <div class="row">
                <div class="col-4 text-center">
                  <div class="cover-image" style="background-image:url(img/cover2.jpg);">
                  </div>
                  <h5 class="text-muted">Album 2</h5>
                  <button  class="btn btn-success"type="button">Play</button>
                </div>
                <div class="col-8">
                  
                  <!--Item 1 -->
                  <div class="row song-item">
                    <div class="col-1"><i class="fas fa-play"></i></div>
                    <div class="col-10">
                      <div class="song-title">Cancion</div>
                      <div class="song-description">Artista - Album</div>
                    </div>
                    <div class="col-1">
                        <span>3:56</span>
                        <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
    
                  <div class="row song-item">
                    <div class="col-1"><i   class="fas fa-play"></i></div>
                    <div class="col-10">
                      <div class="song-title">Cancion</div>
                      <div class="song-description">Artista - Album</div>
                    </div>
                    <div class="col-1">
                        <span>3:56</span>
                        <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
    
                  <div class="row song-item">
                    <div class="col-1"><i class="fas fa-play"></i></div>
                    <div class="col-10">
                      <div class="song-title">Cancion</div>
                      <div class="song-description">Artista - Album</div>
                    </div>
                    <div class="col-1">
                        <span>3:56</span>
                        <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
    
                  <div class="row song-item">
                    <div class="col-1"><i class="fas fa-play"></i></div>
                    <div class="col-10">
                      <div class="song-title">Cancion</div>
                      <div class="song-description">Artista - Album</div>
                    </div>
                    <div class="col-1">
                        <span>3:56</span>
                        <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
    
                  <div class="row song-item">
                    <div class="col-1"><i class="fas fa-play"></i></div>
                    <div class="col-10">
                      <div class="song-title">Cancion</div>
                      <div class="song-description">Artista - Album</div>
                    </div>
                    <div class="col-1">
                        <span>3:56</span>
                        <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
    
                  <div class="row song-item">
                    <div class="col-1"><i class="fas fa-play"></i></div>
                    <div class="col-10">
                      <div class="song-title">Cancion</div>
                      <div class="song-description">Artista - Album</div>
                    </div>
                    <div class="col-1">
                        <span>3:56</span>
                        <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
    
                  <div class="row song-item">
                    <div class="col-1"><i class="fas fa-play"></i></div>
                    <div class="col-10">
                      <div class="song-title">Cancion</div>
                      <div class="song-description">Artista - Album</div>
                    </div>
                    <div class="col-1">
                        <span>3:56</span>
                        <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
    
                  <div class="row song-item">
                    <div class="col-1"><i class="fas fa-play"></i></div>
                    <div class="col-10">
                      <div class="song-title">Cancion</div>
                      <div class="song-description">Artista - Album</div>
                    </div>
                    <div class="col-1">
                        <span>3:56</span>
                        <button onclick="agregarCancion(1)" class="btn btn-outline-success btn-sm" title="Agregar a playlist"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
    
                </div>
              </div>
            </section>
        <div><!--vista-artista-->
          
          
      </main>
    </div>
  </div>
  
  
  <!--Modal Playlists-->
  <div class="modal fade" id="modal-playlists" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Agregar a playlist</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Seleccione una playlist
          <select class="form-control">
            <option value="1">Playlist 1</option>
            <option value="2">Playlist 2</option>
            <option value="3">Playlist 3</option>
            <option value="4">Playlist 4</option>
            <option value="5">Playlist 5</option>
            <option value="6">Playlist 6</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-success">Guardar en playlist</button>
        </div>
      </div>
    </div>
  </div>
 
    <!-- Ventana modal -->
    <div id="mimodall" class="modalclas">
        <div class="modal-content1">
            <span onclick="cerrarModal()" style="float: right; cursor: pointer;">&times;</span>
            <h3>Reproduciendo Canción</h3>
            <p>Simulación de reproducción de canción aquí...</p>
        </div>
    </div>

    <!--modal para agregar playlist-->
    <div class="modal fade" id="modal-agregar-playlist" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Agregue una PlayList</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Nombre: 
            <input type="text" placeholder="Nombre de la playlist">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline-success">Guardar en playlist</button>
          </div>
        </div>
      </div>
    </div>
  

    <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/all.js"></script>
 
  <script src="/js/controlador.js"></script> 
</body>
</html>