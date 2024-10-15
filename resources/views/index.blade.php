<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Qur'an</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="https://kit.fontawesome.com/8b969e22b4.js" crossorigin="anonymous"></script>

</head>
<body>
    {{-- navbar --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
        <div class="container">
          <a class="navbar-brand" href="#">Digital <span class="food">Qur'an</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 800px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Quran</a>
              </li>
              </ul>
          </div>
        </div>
      </nav>
      
      {{-- muncululin content di show.blade --}}
      <div class="container" style="margin-top: 250px;">
      @yield('content')
     </div>

      {{-- click to action --}}
      <div id="cta">
        <div class="dark-overlay">
            <div class="cloud-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto text-center">
                            <h3 class="display-4">Media <span style="color:green">Quran</span></h3>
                            <h5>Informasi Mengenai Ajaran Islam dan <br>Ilmu Al-Qur'an</h5>
                            <h3 style="margin-top: 25px;">CONTACT INFORMATION</h3>
                            <div class="py-3">
                                <i class="fas fa-phone mr-3"><br>
                                    <p style="color: aliceblue">phone <br>
                                    <h5>+62 812 1234 5678</h5>
                                    </p>
                                </i>
            
                                <i class="fas fa-map-marked-alt mr-3"><br>
                                    <p style="color: aliceblue">Address <br>
                                    <h5>jl. Jendral Aimir Nasution No. 123</h5>
                                    </p>
                                </i>

                                <i class="fas fa-envelope mr-3"><br>
                                    <p style="color: aliceblue">Email<br>
                                    <h5>WqH4x@example.com</h5>
                                    </p>
                                </i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>


      {{-- footer --}}

      <footer class="py-5 bg-dark text-center text-white">
        <p>copyright &copy; 2023 | Digital Qur'an</p>
      </footer>
      


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>