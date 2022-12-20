<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- link cutsom css  here -->
    <link rel="stylesheet" href="styles.css">
    <title>Hello, world!</title>

     <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  </head>
  <body>
   

    <!-- navigation bar -->
    <header class="header">

        <a href="#" class="logo"> <span>BE</span>FIT </a>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#features">features</a>
            <a href="#pricing">pricing</a>
            <a href="#trainers">trainers</a>
            <a href="#banner">banner</a>
            <a href="">Login</a>
        </nav>
    
    </header>

    <section class="home" id="home">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2017/08/07/14/02/man-2604149_960_720.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, mollitia. Voluptas tempora tempore, temporibus quisquam molestias quae excepturi debitis blanditiis.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aperiam consequuntur, facere impedit tenetur blanditiis velit tempora! Sunt nulla aliquam laborum voluptates! A, deleniti adipisci vero aspernatur quam praesentium saepe assumenda vitae excepturi necessitatibus.</p>
                     
                    
                    <a href="login.php">login</a>

                    
                   
                    
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/images/banner-bg.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, mollitia. Voluptas tempora tempore, temporibus quisquam molestias quae excepturi debitis blanditiis.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aperiam consequuntur, facere impedit tenetur blanditiis velit tempora! Sunt nulla aliquam laborum voluptates! A, deleniti adipisci vero aspernatur quam praesentium saepe assumenda vitae excepturi necessitatibus.</p>
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                    
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/images/banner-bg.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, mollitia. Voluptas tempora tempore, temporibus quisquam molestias quae excepturi debitis blanditiis.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aperiam consequuntur, facere impedit tenetur blanditiis velit tempora! Sunt nulla aliquam laborum voluptates! A, deleniti adipisci vero aspernatur quam praesentium saepe assumenda vitae excepturi necessitatibus.</p>
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                    
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
</section>


<section class="about" id="about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>about us</span>
        <h3 class="title">Every day is a chance to become better</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione quia accusamus dicta inventore nobis obcaecati vero odio, id dolorum. Consequatur ex, aperiam deserunt nostrum perferendis illum unde ipsa? Consequatur, distinctio?</p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>body and mind</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>healthy life</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>strategies</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>workout</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
        </div>
        <a href="#" class="btn">read more</a>
    </div>

</section>
<br>
br
<br>
<section class="features" id="features">

    <h1 class="heading"> <span>gym features</span> </h1>

    <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="images/f-img-1.jpg" alt="Card image cap">
        
        </div>
        <div class="card">
          <img class="card-img-top" src="images/f-img-2.jpg" alt="Card image cap">

        </div>
        <div class="card">
          <img class="card-img-top" src="images/f-img-3.jpg" alt="Card image cap">
         
        </div>
      </div>
      <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="images/f-img-1.jpg" alt="Card image cap">
          
        </div>
        <div class="card">
          <img class="card-img-top" src="images/f-img-2.jpg" alt="Card image cap">
          
        </div>
        <div class="card">
          <img class="card-img-top" src="images/f-img-3.jpg" alt="Card image cap">
          
        </div>
      </div>
</section>

<section class="pricing" id="pricing">

    <div class="information">
        <span>pricing plan</span>
        <h3>affordable pricing plan for your</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam dolore excepturi ea suscipit fugiat cum quae, rerum optio mollitia! Tempora?</p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
        <a href="#" class="btn">all pricing</a>
    </div>

    <div class="plan basic">
        <h3>basic plan</h3>
        <div class="price"><span>$</span>30<span>/mo</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <a href="#" class="btn">get started</a>
    </div>

    <div class="plan">
        <h3>premium plan</h3>
        <div class="price"><span>$</span>90<span>/mo</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <a href="#" class="btn">get started</a>
    </div>

</section>
<br>
<br>
<section class="trainers" id="trainers">

    <h1 class="heading"> <span>expert trainers</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/trainer-1.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>


        <div class="box">
            <img src="images/trainer-2.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-3.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
    </section>


    <section class="banner" id="banner">

        <span>join us now</span>
        <h3>get upto 50% discount</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat architecto nesciunt aut sapiente quis inventore quam vitae quod illum incidunt.</p>
        <a href="#" class="btn">get discount</a>
    
    </section>
    
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>