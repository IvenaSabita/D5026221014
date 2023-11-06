<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Ivena Sabita ETS</title>
  <link rel="stylesheet" href="{{asset('assets/ETS/ETSstyle.css')}}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,800;1,200&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <nav>
    <div class="icon">
      <span class="page">Ivena's</span>
      <span class="portofolio" data-theme="text-dark">Page</span>
    </div>
    <label class="changeTheme" data-theme="color-dark">
      <input type="checkbox" name="">
      <div class="check" data-theme="color-light"></div>
    </label>
    <div class="menu">
      <a href="{{asset('assets/ETS/Ivena CV.pdf')}}" download data-theme="text-dark"> Download CV </a>
      <a href="" data-theme="text-dark"> About Me </a>
      <a href="https://github.com/IvenaSabita" class="contact"> My Github </a>
    </div>
  </nav>

  <header data-theme="style-background-gradient" id="up">
    <div class="judul" data-theme="text-dark">
      Welcome! <br>Wall of Exploration <br>
    </div>
    <div class="deskripsi font-weight-bold" data-theme="text-dark">
      <br>  Whatsupp! <br>
      Hello! I'm Ivena Sabita,currently a third-semester undergraduate student majoring in Information Systems
      at Sepuluh Nopember Institute of Technology. My current coursework covers a wide range of subjects,
      including Web Development using CSS, HTML, and BS4, Algorithm and Data Structure using Java, Business Process Management,
      Database System, Operation Research, and Requirements Engineering. I also have a keen interest in Bussines and data analytic.
    </div>
    <div class="explore">
      <a href="#tipe-karya">
        <i class="fa-regular fa-compass"></i> EXPLORE
      </a>
    </div>
    <div class="gambar">
      <div class="cycle-1" data-theme="color-light">
        <img class="ven1" src="{{asset('assets/ETS/ven1.png')}}" alt="foto">
        <img class="ven2" src="{{asset('assets/ETS/ven2.png')}}" alt="foto">
        <img class="ven3" src="{{asset('assets/ETS/ven3.png')}}" alt="foto">
        <div class="cycle-2"></div>
      </div>
    </div>
    <div class="info">
      <div class="txt">
        <i class="fa fa-circle-info"></i>
        Buka Halaman ini Pakai Laptop untuk Pengalaman yang lebih baik
      </div>
    </div>
  </header>

  <div class="isi-content" id="tipe-karya" data-theme="color-light">
    <div class="tipe-karya">
      <div class="judulKarya" data-theme="text-dark">About Me</div>
      <div class="tipe" data-theme="style-background-gradient">

        <a href="#mc" class="cardtype mc" data-theme="color-light">
          <div class="gambar"></div>
          <span data-theme="text-dark">MC</span>
        </a>
        <a href="#collage" class="cardtype collage" data-theme="color-light">
          <div class="gambar"></div>
          <span data-theme="text-dark">Collage</span>
        </a>
        <a href="#throwback" class="cardtype throwback" data-theme="color-light">
          <div class="gambar"></div>
          <span data-theme="text-dark">Throwback</span>
        </a>
        <a href="#fact" class="cardtype fact" data-theme="color-light">
          <div class="gambar"></div>
          <span data-theme="text-dark">Fact</span>
        </a>
      </div>
    </div>

    <div class="kumpulankarya mc" id="mc">
      <div class="judulKarya">
        <div class="line left"></div>
        <span class="text" data-theme="text-dark">MC Recap</span>
        <div class="line right"></div>
      </div>

      <div class="karyas" data-theme="color-light-2">
        <a href="https://www.instagram.com/bbunkasai/" class="karya" target="_blank"
          data-theme="color-light">
          <div class="card" data-theme="color-light">
            <div class="thumb" data-thumbnail="{{asset('assets/ETS/bunka.jpg')}}"></div>
            <div class="judulthumb" data-theme="text-dark">
              Bhawikarsu Bunkasai 2019 <br>
            </div>
          </div>
        </a>

        <a href="https://www.instagram.com/garkabhasu2023/" class="karya" target="_blank"
          data-theme="color-light">
          <div class="card" data-theme="color-light">
            <div class="thumb" data-thumbnail="{{asset('assets/ETS/garkabhas.jpg')}}"></div>
            <div class="judulthumb" data-theme="text-dark">
              Garkabhasu 2020
            </div>
          </div>
        </a>

        <a href="https://www.instagram.com/bifbhawikarsu/" class="karya" target="_blank"
          data-theme="color-light">
          <div class="card" data-theme="color-light">
            <div class="thumb" data-thumbnail="{{asset('assets/ETS/bif.jpg')}}"></div>
            <div class="judulthumb" data-theme="text-dark">
             BIF 2020 <br>
             Islamic Debate Competition
            </div>
          </div>
        </a>

        <a href="https://www.instagram.com/ddt.2023/" class="karya" target="_blank"
          data-theme="color-light">
          <div class="card" data-theme="color-light">
            <div class="thumb" data-thumbnail="{{asset('assets/ETS/sef.jpg')}}"></div>
            <div class="judulthumb" data-theme="text-dark">
              DDT 2021 <br>
              From Zero to Hero
            </div>
          </div>
        </a>
        <a href="https://www.instagram.com/s/aGlnaGxpZ2h0OjE4MjM0MTkxNDEwMjA4OTAz?story_media_id=2975496522007272072_9244248662&igshid=MzRlODBiNWFlZA==" class="karya" target="_blank"
        data-theme="color-light">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/standup.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
          MABA CUP 2022 <br>
          Stand Up Comedy Competition
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/is_expo/" class="karya" target="_blank"
        data-theme="color-light">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/gts.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
          ISE 2023 <br>
          Grand Talkshow
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/its_diesnatalis63/" class="karya" target="_blank"
        data-theme="color-light">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/idm.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
              IDM 2023 <br>
              ITS Diesnat
          </div>
        </div>
      </a>


      <a href="https://www.instagram.com/veve_core/" class="karya full" target="_blank">
        <div class="judulthumb">
          <i class="fa-brands fa-instagram"></i>
          <span>Check My <br>INSTAGRAM</span>
        </div>
      </a>

      <div>
        <h2 class="judul bg-success text-center">Some Facts</h2>
       <p class="description" >
        "I first started being an MC in elementary school, and it was for school birthday events. Surprisingly, I used to be the quietest kid in class. But ever since then, I've been working on improving my speaking skills by taking on various MC-ing opportunities.".
        </p>
      </div>
  </div>
</div>



  <div class="kumpulankarya throwback" id="throwback">
    <div class="judulKarya">
      <div class="line left"></div>
      <span class="text" data-theme="text-dark">Senior Highschool Recap</span>
      <div class="line right"></div>
    </div>

    <div class="karyas" data-theme="color-light-2">

      <a href="https://www.instagram.com/dysprosium_bwks/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/dy.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            Dysprosium's Core
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/mbakdindump/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/mbak.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
           Squad
          </div>
        </div>
      </a>

      <a href="https://www.youtube.com/live/R7cWIAP-4B8?si=lUfSxanIumNc1Qad" class="karya" target="_blank">
        <div class="card" data-theme="color-light" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/bnight.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            B-NIGHT
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/brc_smanti/" class="karya" target="_blank">
        <div class="card" data-theme="color-light" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/brc.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            BRC
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/pscsbhawikarsu/" class="karya" target="_blank">
        <div class="card" data-theme="color-light" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/pscs.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
           Pagelaran Seni Citra Smanti
          </div>
        </div>
      </a>

      <a href="https://www.youtube.com/live/t8y9b0pzTw4?si=v4keKx0ufDqS1pl9" class="karya" target="_blank">
        <div class="card" data-theme="color-light" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/Sip.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            MPLS 2021
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/bwks.warriors/" class="karya" target="_blank">
        <div class="card" data-theme="color-light" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/depinik.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            Devynix 22
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/smantiedufest/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/sip2021.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            Bhawikarsu Education Fest
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/osispkbhawikarsu/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/sispk.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            OSIS/PK <br>
            Bhawikarsu

          </div>
        </div>
      </a>

      <a href="https://kamalw13.github.io/latihanProgate/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/purna.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            Purnawiyata Moment
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/bedholbhawikarsu/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/bedhol.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            Bedhol Bhawikarsu
          </div>
        </div>
      </a>


      <a href="https://www.instagram.com/officialgeny/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/geny.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            Gen-Y
          </div>
        </div>
      </a>
      <div>
        <h2 class="judul bg-success text-center">Some Facts</h2>
       <p class="description" >
        "Among the many moments during my high school years, being a part of the OSISPK Bhawikarsu cabinet was the most precious one, as it marked the first time I served as the Head Organizer and Project Officer for two events in our work program."
        </p>
      </div>
      </div>
      </div>

  <div class="kumpulankarya collage" id="collage">
    <div class="judulKarya">
      <div class="line left"></div>
      <span class="text" data-theme="text-dark">College Recap</span>
      <div class="line right"></div>
    </div>

    <div class="karyas" data-theme="color-light-2">
      <a href="https://www.instagram.com/mabacupits/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/mabacup.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            MABA CUP 2022
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/gerigiits/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/gerigi.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            GERIGI 2023
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/is_expo/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/ise.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            ISE 2023
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/sisforits22/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/22.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            SISFOR 22
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/hmsi_its/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/manage.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            MANAGE 2023
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/hmsi_its/" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/supp.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            SUPPORTERAN
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/p/CwNVwUiRrMC/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==" class="karya" target="_blank">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/okkbk.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            OKKBK 2023
          </div>
        </div>
      </a>
      <div>
        <h2 class="judul bg-success text-center">Some Facts</h2>
       <p class="description" >
        About Sisfor 22 "We are not just a group of individuals; we are a community, a united force, and a source of inspiration. Lets make ANGKATAN 2022 stand for excellence and a strong commitment to our important values.
        Sisfor 22 finally being part of Warga!!""
        </p>
      </div>
    </div>
  </div>

  <div class="kumpulankarya fact" id="fact">
    <div class="judulKarya">
      <div class="line left"></div>
      <span class="text" data-theme="text-dark">More about Me!</span>
      <div class="line right"></div>
    </div>

    <div class="karyas" data-theme="color-light-2">
      <a href="https://padlet.com/hamadasahi010820_/ven-s-movie-recommendation-n3dwioecwtyp8927" class="karya" target="_blank"
        data-theme="color-light">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/movie.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            Movie Recommendation
          </div>
        </div>
      </a>

      <a href="https://padlet.com/hamadasahi010820_/ven-s-reading-list-uzfas08lfjmp6a92" class="karya" target="_blank"
        data-theme="color-light">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/music.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            Music Playlist
          </div>
        </div>
      </a>

      <a href="https://www.instagram.com/reel/CqXf8N-MnuT/?utm_source=ig_web_copy_link" class="karya" target="_blank"
        data-theme="color-light">
        <div class="card" data-theme="color-light">
          <div class="thumb" data-thumbnail="{{asset('assets/ETS/books.jpg')}}"></div>
          <div class="judulthumb" data-theme="text-dark">
            Books
          </div>
        </div>
      </a>
    </div>
  </div>
        <h1 class="heading">Current Repeat Songs?</h1>

            <h5 class="notes">Do you have any recommendation for me?</h5>
            <div class="song">
                <a href="#"><iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1zxfRSZcaonV1VXcY0PgY5?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></a>
                <a href="#"><iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/7AMGgAPFczs3wJgMqu6Eqi?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></a>
            </div>

  </a>
  <h2 class="judul bg-info text-center">Some Facts</h2>
 <p class="description" >
    I've been a big Niki fan for a while now, ever since she made her comeback on her SoundCloud. When she joined 88rising, I made it a point to listen to all of her albums and tracks because I really look up to her. Niki's music has always been a great source of inspiration and motivation for me as an enthusiastic young girl.
  </p>
</div>
</div>

<script src="{{asset('assets/ETS/ETSscript.js')}}"></script>

<div data-theme="text-dark" class="container">
<form action="" method="get">
    <h2 data-theme="text-dark" > GET IN TOUCH </h2>
    <input type="text" id="name" placeholder="Enter Your Name" autofocus minlength="3" >
    <input type="email" id="email" placeholder="Enter Your Email" required >
    <input type="tel" id="phone" placeholder="Enter Your Phone Number" required maxlength="3">

    <textarea id="message" rows="3" placeholder="Write Something"  required maxlength="1000"></textarea>
    <button data-theme="text-dark" type="submit">Send</button>
</form>
</div>

<div>
<div class="deskripsi font-weight-bold" data-theme="text-dark">
<footer class="text-black-50 text-center text-lg-start bg-secondary"data-theme="text-dark">
<div>
  <!--Grid row-->
  <div class="row mt-4">
    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
      <br>
      <h5 data-theme="text-dark"class="text-center font-weight-bolder mb-4">Post Note</h5>

      <p data-theme="text-dark" class="text-justify" >
        I've created this website not only as a requirement for my Web Development course but also to expand my knowledge in web programming. This sums up my academic pursuits.
      </p>


      <div class="mt-4">
      </div>
    </div>

    <br>
    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
      <br>
      <h5 class="text-uppercase mb-4 pb-1 font-weight-bolder">Details</h5>

      <ul class="fa-ul" style="margin-left: 1.65em;">
        <li class="mb-3">
          <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Indonesia, Surabaya</span>
        </li>
        <li class="mb-3">
          <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">ivenawiranda@gmail.com</span>
        </li>
        <li class="mb-3">
          <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 64 881 0260 5050</span>

      </ul>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
      <br>
      <h5 data-theme="text-dark"class="font-weight-bolder mb-4">Collage Schedule</h5>
      <br>
      <table class="table text-center text-white">
        <tbody class="font-weight-bold">
          <tr>
            <td>Mon - Wed:</td>
            <td>7am - 7pm</td>
          </tr>
          <tr>
            <td>Thur:</td>
            <td>10am - 12am</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2023 Copyright:
  <a class="text-white" href="https://ivenasabita.github.io/">ivenasabita.com</a>
</div>
</div>
<!-- Copyright -->
</footer>
</div>
</body>
</html>
