<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@include('layouts.app')

<style>
  #backContainer
    {
        background-image: url("/Images/News.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100%;
        margin-top: 50px;

        align-items: center;
        display: flex;
        justify-content: center
    }

    .flex-center
    {
        text-align: center;
        font-size: 150px;
        background: -webkit-linear-gradient(black, #2b2d42);
    }

    #p1
    {
        font-size: 15px;
        background: -webkit-linear-gradient(black, #2b2d42);
    }
    .image-aboutus-banner {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("/Images/covidbg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    /* padding-top: 110px;
    padding-bottom:110px; */
}
.footer {
  padding: 20px;
  text-align: center;
  background: rgba(0, 132, 168, 0.88);
  margin-top: 20px;
}

h1 {
  padding-top: 50px;
  font-size: 30px;
  text-indent: 50px;
}

p {
  font-size: 15px;
  text-indent: 50px;
}


OURTEAMbody {
    background: #e8cbc0;
    background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
    background: linear-gradient(to right, #e8cbc0, #636fa4);
    min-height: 100vh;
}

.social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.social-link:hover, .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
}

FOOTER
.bg-primary {
 background-color: #000 !important;
}

.bg-circle
{
  display: inline-block;
  width: 60px;
  height: 60px;
  padding: 14px 4px;
  color: #ececec;
  text-align: center;
  border-radius: 50%;
}

.bg-circle-outline
{
  width: 50px;
  height: 50px;
  color:smoke;
  padding: 8px 2px;
  border: 2px solid;
  border-color: smoke;
  border-radius: 50%;
}


.bg-circle a, a:hover, .media a:focus
{
  text-decoration: none !important;
  outline: none;
  color: #ececec;
}
.bg-circle-outline a, a:hover, .media a:focus
{
  text-decoration: none !important;
  outline: none;
  color: #ececec;
}

   


</style>
</head>
<body>

<div class="image-aboutus-banner">
   <div class="container py-5">
      <div class="row text-center">
        <div class="col-lg-8 mx-auto" style="padding-top:20px;">
             <div class="about">
            
              <div class="col-md-12">
             <h1 class="lg-text">About Us</h1>
         <p class="image-aboutus-para">In this modern day fake news is everywhere, everyone can be a victim. Misleading information can be a problem, especially with social media sites, it can be passed to anyone at a rapid rate. Giving the readers a hard time to see the truth of the news. That’s why we want to propose a system that can solve this problem. By creating a website that will rate from (1-5) the credibility of the source and the news, so that misleading news will have low ratings and the genuine news will have higher rating that will be posted at the top of the page. People who have accounts on the website can filter out fake news so that we can lessen the effect of fake news. We want this website to be one of the trustworthy news page that will be available in the Philippines. On this website we also have categories for each news like technology, sports, health, automotive, economy and etc. Also to raise the awareness about the Covid-19 cases, and it will display the total cases, deaths and recoveries by using a graph that will be always placed at the top of the page.
          </p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container py-5">
    <div class="row text-center">
        <div class="col-lg-8 mx-auto">
             <div class="about">
        <div class="title">
            <h1>Our Team</h1>
        </div>
        <div class="desc">
            <p>We are the students of Computer Engineering in PUP that designed this website, if you have question and suggestions just email one of us.</p>
        </div>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/Images/bry.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">Bryan James Casimero</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>

        
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/Images/gor.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Samuel Hardy</h5><span class="small text-uppercase text-muted">Rigor Emmanuel Sagun</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>

        
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/Images/omar.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Tom Sunderland</h5><span class="small text-uppercase text-muted">Jomari Salting</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/Images/lem.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">Lemuel John Ami</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
<div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/Images/jaks.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">Jeraldine Cagatin</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>

        
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/Images/dan.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Samuel Hardy</h5><span class="small text-uppercase text-muted">Daniella Sevial</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>

       
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/Images/ana.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Tom Sunderland</h5><span class="small text-uppercase text-muted">Analou Edma</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="/Images/kiara.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">Kiara Baliwagan</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<footer class="mt-5">
    <div class="container py-5">
    <div class="row text-center">
        <div class="col-lg-8 mx-auto">
  
    <div class="container">
      <div class="row py-3">
        
        <div class="col-md-4">

          <div class="row py-2">
            <div class="col-sm-3 hidden-md-down">
              <a class="bg-circle bg-info" href="https://twitter.com/ ">
                <i class="fa fa-2x fa-fw fa-twitter" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-9">
              <h4>Tweets</h4>
              Embed here?
            </div>
          </div>
         
        </div>
       
        <div class="col-md-4">
         
          <div class="row py-2">
            <div class="col-sm-3 hidden-md-down">
              <a class="bg-circle bg-info" href="#">
                <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-9">
              <h4>Contact us</h4>
              <p>Why not?</p>
            </div>
          </div>
          
          <div class="row py-2">
            <div class="col-sm-3 hidden-md-down">
              <a class="bg-circle bg-info" href="#">
                <i class="fa fa-2x fa-fw fa-laptop" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-9">
              <h4>Cookie policy</h4>
              <p class=" ">We use <a class=" " href="/# ">cookies </a></p>
            </div>
          </div>
          
        </div>
        
        <div class="col-md-4">
         
          <div class="row py-2">
            <div class="col-sm-3 hidden-md-down">
              <a class="bg-circle bg-danger" href="# ">
                <i class="fa fa-2x fa-fw fa-file-pdf-o" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-9">
              <h4>Download pdf</h4>
              <p> You like print?</a></p>

            </div>
          </div>

          <div class="row py-2">
            <div class="col-sm-3 hidden-md-down">
              <a class="bg-circle bg-info" href="https://twitter.com/ ">
                <i class="fa fa-2x fa-fw fa-info" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-9">
              <h4>Info</h4>
              About us.
            </div>
          </div>
          <!-- row ended -->
        </div>
        <!-- footer column 3 end -->
      </div>
    </div>
  </div>


 
</footer>
      
      </body>
</html>
