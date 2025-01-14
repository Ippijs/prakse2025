<!doctype html>
<html lang="en">
    <head>
        <title>Reģistrācija</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

<style>
        body {
            margin: 0;
            padding: 0;
        }
        .hero {
            background: url('https://picsum.photos/1920/800') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 150px 20px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero button {
            margin-top: 20px;
        }
        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .card img {
            object-fit: cover;
            height: 200px;
        }
        .card-body {
            flex-grow: 1;
        }
    </style>

        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
          <div class="bg-dark p-4">
            <h5 class="text-body-emphasis h4"></h5>
            <span class="text-body-secondary"></span>
            <ul class="nav flex-column mt-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Sakums">Sakums</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Galerija">Galerija</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Produkti">Produkti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Kontakti">Kontakti</a>
              </li>
            </ul>
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark sticky-top">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </nav>

        <section class="hero" id="Sakums">
            <h1>Laipni lūdzam mūsu lapā!</h1>
            <p>Atklājiet mūsu jaunākos produktus un pakalpojumus.</p>
            <button class="btn btn-primary btn-lg">Uzzināt vairāk</button>
        </section>


    </head>
    <div id="Galerija" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://picsum.photos/id/15/2500/1667" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/id/28/4928/3264" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/id/29/4000/2670" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <body>
        <header>
            <!-- place navbar here -->

            <!-- Produktu sadaļa -->
            <section class="container my-5" id="Produkti">
                <h2 class="text-center mb-4">Mūsu produkti</h2>
                <div class="row">
                    <!-- Kartīte 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="Produkts 1">
                            <div class="card-body">
                                <h5 class="card-title">Produkts 1</h5>
                                <p class="card-text">Šis ir pirmais produkts ar īsu aprakstu.</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Kartīte 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="Produkts 2">
                            <div class="card-body">
                                <h5 class="card-title">Produkts 2</h5>
                                <p class="card-text">Šis ir otrais produkts ar īsu aprakstu.</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Kartīte 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="Produkts 3">
                            <div class="card-body">
                                <h5 class="card-title">Produkts 3</h5>
                                <p class="card-text">Šis ir trešais produkts ar īsu aprakstu.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </header>
        <main>
            <form class=" py-3 px-3" id="Kontakti">
                <div class="mb-3">
                  <label for="exampleEmail" class="form-label">Vards</label>
                  <input type="email" class="form-control" id="exampleEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">E-pasts</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="komentars" class="form-label">Jusu komentars</label>
                  <input type="koment" class="form-control" id="komentars">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Es piekrītu <a href="#">Terms & Conditions</a></label>
                </div>
                <button type="submit" class="btn btn-primary">Nosutīt</button>
              </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

