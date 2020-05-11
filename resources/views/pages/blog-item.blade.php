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
    <link rel="stylesheet" href="../css/style.css">

    <title>Gala darbs</title>
  </head>
  <body>

  <?php include "nav.php";

?>

        <!-- unique blog item -->
      <section class="augsa">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-8  mx-auto">
                      <img class="rounded d-block img-fluid top_pic" src="{{ $post->img}}" alt="railway">
                      <h2 class="mt-4">{{ $post->title }}</h2>
                      <p class="writer"><i>By {{ $post->author }}  || {{$post->created_at->diffForHumans() }} </i></p>
                      <div class="mt-4">{!! $post->body !!} </div>

                  </div>
              </div>
              
          </div>



      </section>
      <div class="gray_line mt-5">

    </div>


        <!-- 3 different blog entries, fresh-older/left-right -->
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col text-center">
                    <h3>Other related posts</h3>


                </div>
            </div>
            <div class="row mt-5 d-flex justify-content-between">
                @foreach ($posts as $item)
                    @if($item->id != $post->id)

                    <div class="col small_post mx-2">
                        <p class="writer"><i>By {{ $item->author }} || {{$item->created_at->diffForHumans() }} </i></p>
                        <a href="/blog/{{$item->id}}"><h4><strong>{{ $item->title }}</strong></h4></a>
                        <p>{{$item->excerpt}}</p>


                    </div>

                    @endif
                @endforeach


        
            </div>

                <!--link to /blog page  -->
            <div class="row mt-4">
                <div class="col text-center">
                    <a href="/blog"><button type="button" class="btn btn-dark read_poga">READ ALL</button></a>
                </div>

            </div>
        </div>

        <div class="gray_line mt-5">

        </div>

        <?php include "footer.php";

?>

    </section>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../js/javascript.js"></script>
  </body>
</html>














    