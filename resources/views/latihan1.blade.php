<!doctype html>
<html lang="en">
<head>
    <title>Ivena Sabita</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</head>
    <body class="bg-dark">
        <div class="container-fluid px-0">
          <div class="row mx-0">
            <div class="col-12 px-0">
              <img src="{{asset('assets/latihan1/pizza.jpg')}}" alt="pizza" class="img-fluid w-auto" />
            </div>
          </div>
        </div>
        <div class="container mt-3">
          <div class="row mb-3 mx-auto">
            <img src="{{asset('assets/latihan1/pizza1.jpg')}}" alt="pizza1" class="col-3 img-fluid" />
            <img src="{{asset('assets/latihan1/pizza2.jpg')}}" alt="pizza2" class="col-3 img-fluid" />
            <img src="{{asset('assets/latihan1/pizza3.jpg')}}" alt="pizza3" class="col-3 img-fluid" />
            <img src="{{asset('assets/latihan1/pizza4.jpg')}}" alt="pizza4" class="col-3 img-fluid" />
          </div>
          <div class="row mb-2">
            <div class="col-8">
              <h4 class="text-white">Pepperoni Pizza</h4>
              <h4 class="text-danger">$10.00</h4>
            </div>
            <p class="col-4 small text-white">⭐ 4.5 [50+]</p>
          </div>
          <div class="row mb-3">
            <p class="col-12 text-white">
              A traditional Neapolitan pizza topped with tomato sauce, fresh
              mozzarella cheese, basil leaves, and drizzled with olive oil.
              <a href="https://google.com" class="text-success">Read more.</a>
            </p>
          </div>
          <div class="mb-4">
            <div class="row mb-1">
              <h5 class="col-12 text-white">Size</h5>
            </div>
            <div class="row">
              <div class="col-1 px-4 text-white">
                <button type="button" class="btn btn-outline-warning">S</button>
              </div>
              <div class="col-1 px-4 text-white">
                <button type="button" class="btn btn-outline-warning">M</button>
              </div>
              <div class="col-1 px-4 text-white">
                <button type="button" class="btn btn-outline-warning">L</button>
              </div>
              <div class="col-9"></div>
            </div>
          </div>

          <div class="mb-5">
            <div class="row mb-1">
              <h5 class="col-12 text-white">Ingredient</h5>
            </div>
            <div class="row">
              <div class="col-3 text-white">
                <div class="border border-white rounded">
                  <img src="{{asset('assets/latihan1/tomato.png')}}" alt="tomato" width="50px" class="mx-auto d-block">
                </div>
              </div>
              <div class="col-3 text-white">
                <div class="border border-white rounded">
                  <img src="{{asset('assets/latihan1/basil.png')}}" alt="tomato" width="50px" class="mx-auto d-block">
                </div>
              </div>
              <div class="col-3 text-white">
                <div class="border border-white rounded">
                  <img src="{{asset('assets/latihan1/shallot.png')}}" alt="tomato" width="50px" class="mx-auto d-block">
                </div>
              </div>
              <div class="col-3"></div>
            </div>
          </div>

          <div class="row mb-5 mt-2">
            <div class="col-3">
              <div class="border py-2 border-white rounded">
                <img src="{{asset('assets/latihan1/bag.png')}}" alt="bag" width="40px" class="mx-auto d-block">
              </div>
            </div>
            <div class="col-9">
              <div class="bg-success py-2 rounded border-0">
                <h3 class="text-white text-center">Order Now</h3>
              </div>
            </div>
          </div>
        </div>
      </body>
    </html>


