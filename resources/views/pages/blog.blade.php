
@extends("layouts/main")


@section("content")

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="css/style.css">

    <title>Gala darbs</title>
  </head>
  <body>
  <?php include "nav.php";

?>

        <!-- newest blog entry -->
      <section class="augsa">
          <div class="container">
              <div class="row">
                  <div class="col">
                    <h2>Latest blog post</h2>
                  </div>

              </div>
              <div class="row mt-3 justify-content-center">

      
              <div class="col-12">
                    <a href="/blog/{{$manyPosts[0]->id}}"><img class="rounded d-block img-fluid main_pic" src="{{$manyPosts[0]->img}}" alt="railway">
                  </div>
                  </div>
                  <div class="col-6 ml-3 main_description">
                    <h3>{{$manyPosts[0]->title}}</h3>
                    <p>{{$manyPosts[0]->excerpt}}</p>
                  </div></a>

                  


              
          </div>


            <!-- all blog entries -->
          <div class="container mt-5">
              <div class="row">
                  <div class="col">
                  <h4>Older blog posts</h4>
                </div>

              </div>
              <div class="row mt-3">

              @foreach ($manyPosts as $postItem)
              
              @if($postItem->id != $manyPosts[0]->id)
            
              <div class="col-md-3 col-sm-6 col-6">
            <div class="div d-flex flex-column blog_post mt-3">


        <img class="blog_img img-fluid"  src="{{ $postItem->img}}" alt="">


     <div class="pl-2">

        <p class="mt-1 writer"> By {{ $postItem->author}} || {{$postItem->created_at->diffForHumans()}}</p>


        <a href="/blog/{{$postItem->id}}"><h4 class="pr-1"><strong>{{ $postItem->title}}</h4></strong></a>


        <p class="mt-1 pr-1">{{$postItem->excerpt}}</p>

        </div>
    
         </div>
        </div>

      @endif
    @endforeach
              
              
              </div>
</div>
              


      </section>

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














































<!-- @foreach ($manyPosts as $postItem)

    <div clas="div d-flex flex-column blog_post">


    <img src="{{ $postItem->img}}" class="blog_img img-fluid" alt="">


    <div class="pl-2">

        <p class="mt-1 writer"> By {{ $postItem->author}}</p>


        <a href=""><h4><strong>={{ $postItem->title}}</h4></strong></a>


        <p class="mt-1">{{$postItem->excerpt}}</p>

        </div>
    
    </div>

    @endforeach
@endsection


@section("title", "Blog Page") -->
