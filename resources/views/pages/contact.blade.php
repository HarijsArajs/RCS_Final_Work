<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Gala darbs</title>
  </head>
  <body>
  <?php include "nav.php";

?>
    <div class="container">
      <div class="row augsa">
        <div class="col text-center">
          <h1>Contact me</h1>

        </div>
      </div>

      <!-- physical location on google maps -->
      <div class="row mt-5 d-flex justify-content-center ">
        <div class="col-md-5 col-sm-12 col-12">
          <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.4478369185663!2d24.178833215447355!3d56.958260905843666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eece6bd0c4ef83%3A0x7ba09497fe8c99a3!2sDzelzavas%20iela%2044%2C%20Vidzemes%20priek%C5%A1pils%C4%93ta%2C%20R%C4%ABga%2C%20LV-1035!5e0!3m2!1slv!2slv!4v1586722387319!5m2!1slv!2slv" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>

        <!-- feedback form -->
        <div class="col-md-5 col-sm-12 col-12 survey">
        <form action="/contact-us" method="POST">
            @csrf
          <input type="text" name="email" id="email_input" placeholder="Enter your email address" class="form-control" autocomplete="off">
          <span class="emailMessage"></span>

          <select id="dropdown" name="rating" required class="mt-3">
            <option disabled selected value>How would you rate this website?</option>
            <option>Amazing</option>
            <option>Good</option>
            <option>Average</option>
            <option>Bad</option>
            
            
          </select>
          
          <textarea id="textarea" name="comment" placeholder=" Add Comments" class="mt-3"></textarea>

          <button type="submit" class="btn btn-dark contact_poga mt-4">Submit</button>
          </form>


        </div>
      </div>
    </div>

    <div class="gray_line mt-5">

    </div>

            <!-- links to external platforms -->
    <div class="about me">
      <div class="container">
        <div class="row mt-5">
          <div class="col text-center">
            <h2>About me</h2>
            <div class="post mx-auto">
            <img class="author_pic mt-4 img-fluid" src="img/me.jpg" alt="author of the page">
            <div class="post-s d-flex flex-column">
              <h5>CONNECT</h5>
              <a target="_blank" href="https://www.facebook.com/harijs.arajs"><img class="soc_pic2 img-fluid mt-2" src="img/fb2.png" alt=""></a>
              <a target="_blank" href="https://www.youtube.com/channel/UC8_uHJbadygauqiiblGZlRg"><img class="soc_pic2 img-fluid mt-1" src="img/yt.png" alt=""></a>
              <a target="_blank" href="#"><img class="soc_pic img-fluid mt-2" src="img/linkedin.png" alt=""></a>
              <a target="_blank" href="https://vimeo.com/user5128760/about"><img class="soc_pic img-fluid mt-3" src="img/vimeo.png" alt=""></a>

            </div>
            
          </div>

          <p class="mt-3"><strong>HARIJS ARĀJS</strong></p>
          <p>Aspiring web developer based in Riga, Latvia. Has 7+ year experience in audiovisual media post-production.</p>
      
         

    </div>
    </div>
    </div>
    </div>

    <div class="gray_line mt-5">

    </div>

    <?php include "footer.php";

?>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/javascript.js"></script>
  </body>
</html>































<!-- @extends("layouts/main")


@section("content") -->






<!-- <h1>Šis ir contact</h1>
<p>lorem ipsum</p>
<p>lorem ipsum</p>


<form method="POST" action="/contact-us">
    @csrf
    <input type="text" name="name">
    <input type="text" name="email">
    <textarea name="question" id="" cols="30" rows="10"></textarea>
    <button type="submit">Search</button>

</form>


@endsection


@section("title", "Contact Us") -->