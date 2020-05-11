@extends("layouts/main")


@section("content")

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Gala darbs</title>
  </head>
  <body>
    

  <?php include "nav.php";

?>


        <!-- welcome screen -->
      <section class="welcome d-flex align-items-center">
          <div class="container">
              <div class="row">
                  <div class="col-6">
                      <h1>Welcome To Our Blog Collection</h1>
                  </div>


              </div>
              <div class="row mt-3">
                  <div class="col-6">
                      <p>Go on, indulge yourself.
                      That's right, kick off your shoes, put your feet up.
                      Lean back and just enjoy the flow.
                       After all, reading soothes even the savage beasts.</p>
                  </div>
              </div>
              <div class="row mt-3">
                <a href="/blog"><button type="button" class="btn btn-dark read_poga ml-3">START NOW</button></a>

              </div>


          </div>




      </section>

       <!-- latest blog posts -->
      <section class="main_blog mt-5">
          <div class="container">
              <div class="row">
                <div class="col-12 text-center">
                  <h3>Latest blog posts</h3>
                </div>
              </div>
              <div class="row mt-5 tleft">


                <!-- gives 4 latest blog entries  -->
                  @foreach ($somePosts as $item)
                  <div class="col-md-3 col-sm-6 col-9">

                  <div class="div d-flex flex-column blog_post">
                      <img class="blog_img img-fluid" src="{{$item->img}}" alt="">
                      <div class="pl-2">
                      <p class="mt-1 writer">By {{$item->author}} || {{$item->created_at->diffForHumans()}}</p>
                      <a href="/blog/{{$item->id}}" class="mr-1"><h4><strong> {{$item->title}}</strong></h4></a>
                      <p class="pr-1">{{$item->excerpt}}</p>
                    </div>
                    </div>
                    </div>



                  @endforeach
                
                
  
                 
                
            </div>
              <div class="row mt-5">
                <div class="col-12 text-center">
                  <a href="/blog"><button type="button" class="blog_poga">See More</button></a>

                </div>
              </div>
          </div>




      </section>

      <div class="gray_line mt-5">

      </div>


      <!-- slider that includes 3 upcoming blog entries -->
      <section class="testimonials pt-5">

      <div class="container">
  <div class="row">
    <div class="col">
      <h4>Upcoming blog posts</h4>
    </div>
  </div>
  <div id="carouselExampleControls" class="carousel slide align-middle mt-3" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row justify-content-center">
        <div class="col-6">
        <img class="carousel_photo rounded img-fluid" src="{{$upcomingPosts[0]->img}}" alt="First slide">
      </div>
      <div class="col-6">
        <div class="carousel-caption d-none d-md-block mr-5 pr-5">
        {!! $upcomingPosts[0]->excerpt !!}
          <div class="upcoming_data">
          <h5 class="upcoming_title">{{$upcomingPosts[0]->title}}</h5>
          {!! $upcomingPosts[0]->release_date !!}
        </div>
      </div>
    </div>
  </div>
</div>
</div>
      <div class="carousel-item">
        <div class="container">
          <div class="row justify-content-center">
        <div class="col-6">
        <img class="carousel_photo rounded img-fluid" src="{{$upcomingPosts[1]->img}}" alt="Second slide">
      </div>
      <div class="col-6">
        <div class="carousel-caption d-none d-md-block mr-5 pr-5">
        {!! $upcomingPosts[1]->excerpt !!}
          <div class="upcoming_data">
            <h5 class="upcoming_title">{{$upcomingPosts[1]->title}}</h5>
            {!! $upcomingPosts[1]->release_date !!}
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="carousel-item">
<div class="container">
  <div class="row justify-content-center">
<div class="col-6">
<img class="carousel_photo rounded img-fluid" src="{{$upcomingPosts[2]->img}}" alt="Third slide">
</div>
<div class="col-6">
<div class="carousel-caption d-none d-md-block mr-5 pr-5">
{!! $upcomingPosts[2]->excerpt !!}
  <div class="upcoming_data">
    <h5 class="upcoming_title">{{$upcomingPosts[2]->title}}</h5>
    {!! $upcomingPosts[2]->release_date !!}
  </div>
</div>
</div>
</div>
</div>
</div>
      

      <!-- slider controls -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
</div>
        
        



      </section>


        <!-- link to contact-us section -->
      <section class="contact">
        <div class="container">
          <div class="row d-flex justify-content-center pt-5">
            <div class="col-5 text-center">
              <h4>If you wish to contact me</h4>
              <p>Your information is secure and encrypted. Don't forget to leave some feedback and connect to my content platforms.</p>
              <a href="/contact-us"><button type="button" class="btn btn-light mt-1 con_btn">Contact Me</button></a>
            </div>
          </div>
        </div>



      </section>
      <div class="gray_line">

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



  