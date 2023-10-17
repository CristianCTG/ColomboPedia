<!doctype html>
<html lang="en">

<head>
    <title>ColomboPedia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/StyleInterfazUser.css') }}">

</head>

<body>

    <div class="wrapper d-flex align-items-stretch" id="contenedor">
        @auth
            <nav id="sidebar">
                <div class="p-4 pt-5">
                    <a href="#" class="img logo rounded-circle mb-2 border border-white"
                        style="background-image: url(imgs/logo.png);"></a>
                    <h2 class="text-center text-white overflow-hidden">{{ Auth::user()->nombre }}
                        {{ Auth::user()->apellido }}
                    </h2>
                    <ul class="list-unstyled components mb-5">
                        <li class="btn-lnk active" id="btn-biblioteca">
                            <a>Biblioteca</a>
                        </li>
                        <li class="btn-lnk " id="btn-favoritos">
                            <a>Favoritos</a>
                        </li>
                        <li class="btn-lnk " id="ajustes">
                            <a>Ajustes</a>
                        </li>
                        @if (Auth::user()->tipo == 'Administrador')
                            <li class="btn-lnk " id="admLibros">
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                                    class="dropdown-toggle">Administrar
                                    Usuario</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a href="#">Administrar Usuario</a>
                                    </li>
                                    <li>
                                        <a href="#">Crear Usuario</a>
                                        <a href="#">Sancionar Usuario</a>
                                        <a href="#">Editar Usuario</a>


                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if (Auth::user()->tipo == 'Bibliotecario')
                            <li class="btn-lnk " id="admLibros">
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                                    class="dropdown-toggle">Administrar
                                    Libro</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a href="#" id="btn-adminlibro">Administrar Libro</a>
                                    </li>
                                    <li>
                                        <a href="#" id="btn-subirlibro">Subir Libro</a>
                                        <a href="#">Eliminar Libro</a>
                                        <a href="#">Editar Libro</a>


                                    </li>
                                </ul>
                            </li>
                        @endif



                    </ul>
                    <div class="footer">
                        <a class="btn btn-primary" href="/logout">Salir</a>
                    </div>


            </nav>
        @endauth
        <!--   Page Content   -->
        <div id="content" class="p-4 p-md-5 bg-dwhite">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <div class="input-group rounded ml-3 mr-3 buscar">
                        <input type="search" class="form-control rounded" placeholder="Buscar" aria-label="Search"
                            aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-filter"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                </div>
            </nav>



            <div class="parte plibros activo">
                <div class="library">
                    @foreach ($books as $book)
                        
                    
                    <div class="carta">
                        <div class="carta-inner">
                            <div class="frente" style="background-image: url('{{ asset('/storage/assets/img/LibraryImgs/' . $book->titulo . '.jpg') }}'); height: 100%; width: 100%;">
                        
                                <h2>{{$book->titulo}}</h2>
                                
                                <p>{{$book->categoria}}</p>
                              
                                
                            </div>
                            <div class="trasero">
                                <img src="{{ '/storage/assets/img/LibraryImgs/'.$book->titulo.'.jpg' }}" alt="">
                                <h1> <span>{{$book->autor}}</span></h1>
                            
                                <p style="overflow: hidden;  text-overflow: ellipsis; max-height: 95px;">{{$book->descripcion}}</p>

                                <div class="rowu">
                                    <div class="colu">
                                        <h2>12K</h2>
                                        <p>Vistas</p>
                                    </div>
                                    <div class="colu">
                                        <h2>5K</h2>
                                        <p>Comentario</p>
                                    </div>
                                    <div class="colu">
                                        <h2>100K</h2>
                                        <p>Like</p>
                                    </div>
                                </div>
                                <div class="rowu">
                                    <Button>Leer</Button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="parte pfavoritos">

            </div>

            <div class="parte psubirlibro">
                <div class="container">
                    <div class="row">
                        <div>
                            <div class="card p-3" style="width: 900px">
                                <div class="card-text">
                                    <h1 class="p-3" style="text-align: center">Publicar Libro</h1>

                                </div>
                                <form action="/home" method="post" enctype="multipart/form-data">

                                    @csrf
                                    <div>

                                        <div class="form-group">
                                            <label for="form3Example1">Titulo: </label>
                                            <input type="text" id="form3Example1" placeholder="Titulo del libro"
                                                class="form-control" name="titulo" />

                                        </div>

                                        <div class="form-group">
                                            <label for="form3Example1">Autor: </label>
                                            <input type="text" id="form3Example1" placeholder="Autor del libro"
                                                class="form-control" name="autor" />

                                        </div>

                                        <div class="form-group">
                                            <label for="form3Example2">Categoria: </label>
                                            <select name="categoria" class="form-control" id="form3Example2">
                                                <option selected disabled>Elige una categoria</option>
                                                <option value="Terror">Terror</option>
                                                <option value="Romance">Romance</option>
                                                <option value="Aventura">Aventura</option>
                                                <option value="Ciencia Ficcion">Ciencia Ficcion</option>
                                                <option value="Misterio">Misterio</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="form3Example2">Descripcion: </label>
                                            <textarea name="descripcion" class="form-control" style="width: 90%; height: 80px;"
                                                placeholder="Descripcion del libro"></textarea>
                                        </div>


                                        <div class="form-group">

                                            <div>
                                                <label for="form3Example2">Portada: </label>
                                                <img id="vistaPrevia" src="" style="width: 100%; max-height: 200px;">
                                                <input class="form-control" type="file" name="imagen"
                                                    id="imagen">
                                                <script src="{{ asset('js/ScriptLector.js') }}"></script>
                                                <label for="form3Example2">Archivo PDF: </label>
                                                <input class="form-control" type="file" name="pdf"
                                                    id="pdf">
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button class="btn btn-success rounded-pill px-3">Agregar Libro</button>
                                           

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="parte padminlibro">
                <div class="Containert">
                    <h3>HOLA MUNDO </h3>
                    <table class="table">
                        <thead class="table-dark table-hover">
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Autor</th>
                                <th>Categoria</th>
                                <th>Descripcion</th>
                            </tr>

                        </thead>


                        <tbody class="table-light">
                            <tr>
                                <td>Si</td>
                                <td>Si</td>
                                <td>Si</td>
                                <td>Si</td>
                                <td>Si</td>



                            </tr>


                        </tbody>






                    </table>

                </div>





            </div>

        </div>
    </div>



    </div>
    </div>
    </div>
    </div>

    </div>


    </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
