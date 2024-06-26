<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <style>
        hr.solid {
            border-top: 1px solid #bbb;
        }

        img.img_logo:hover {
            transition: transform 0.5s ease-in-out;
            transform: scale(1.3);
        }

        a.text-muted:hover {
            text-decoration: underline;
            color: black !important;
        }

        #efeito:hover{
            text-decoration: underline;
            transition: transform 0.5s ease-in-out;
            transform: scale(1.1);
        }

        .persofooter{
            background-color: #fff !important;
        }


    </style>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
                <a class="navbar-brand" href="{{  route('home')  }}" id="efeito">
                    Receitas
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{  route('home')  }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link active dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Receitas <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    Salgadas
                                </a>
                                <hr>
                                <a class="dropdown-item" href="#">
                                    Doces
                                </a>
                                <hr>
                                <a class="dropdown-item" href="{{  route('receitas.addrec')  }}">
                                    Adicionar Receitas
                                </a>
                                <hr>
                                <a class="dropdown-item" href="{{ route('receitas.admrec')  }}">
                                    Gerenciar Receitas
                                </a>

                            </div>

                            @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest

                        <form class="d-flex ms-5" role="search">
                            <input class="form-control me-2" type="search" placeholder="Pesquisar..."
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>

                    </ul>
                </div>
            </div>
        </nav>

        <div id="pageloader">
            <img src="{{ url('images/loading.gif') }}" alt="processing..." />
        </div>

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('warning') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')

        <footer class="d-flex flex-wrap persofooter justify-content-between align-items-center py-3 mt-2 px-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© @php echo date('F j, Y'); @endphp Mkilian05</p>

            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="{{  route('home')  }}" class="nav-link px-2 text-muted ">Home</a></li>
                <li class="nav-item"><a href="{{  route('receitas.addrec'  )}}" class="nav-link px-2 text-muted">Adicionar Receitas</a></li>
                <li class="nav-item"><a href="{{  route('login'  )}}" class="nav-link px-2 text-muted">Login</a></li>
                <li class="nav-item"><a href="{{  route('register')  }}" class="nav-link px-2 text-muted">Registre-se</a></li>
                <li class="nav-item"><a href="https://github.com/Mkilian05/Projeto_Receitas" class="nav-link px-2 text-muted">Github</a></li>
            </ul>
        </footer>

    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('pageScripts')
</body>

</html>
