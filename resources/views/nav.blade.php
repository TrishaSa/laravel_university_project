<!DOCTYPE html>
 <html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"/>
    </head>
    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
              .navbar{
          background-color: #052e59;
              }
              .logo{
          height: 90px;
          width: 90px;
        }
        </style>
        <nav class="navbar fixed-top navbar-expand-lg py-3">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <img src="{{ asset('images/aiub-logo.png') }}" class="logo">
            <h4 class=" text-white mx-2">American International University of Bangladesh</h4>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
              </ul>
        
                      <div class="d-flex">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="{{url('/')}}">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('/studentList')}}">Student</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('/gallery')}}">Gellary</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('/contact')}}">Contact</a>
                          </li>
                          <!-- <li class="nav-item">
                            <a class="nav-link" href="stepjs.html">stepjs</a>
                          </li> -->
                          @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                     </ul>
        </div>
      </div>
    </nav>
        
          <script src="https://kit.fontawesome.com/2b14fa03a7.js" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
    </html>