<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eyes Wide open</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    
</head>
<body>
  <!-- This modal displays the authors information -->
    <button type="button" class="btn-secondary float-right" data-toggle="modal" data-target=".bd-example-modal-md">
      <div class="text-right">About the Author</div>
    </button><br><br>

    
      <div class="modal fade bd-example-modal-md" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           
            <div class="row">
              <div class="card">
                <div class="col">
                    <button class="close" type="button" data-dismiss="modal" aria-label="close"><span aria-hidden="true"></span>X</button>
                  <div class="card-title authorname">
                    <h1> Author's Name</h1>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <p class="authordescription">Here is where you write your description of who you are and what makes you special...</p>
                        <img class="fluid" src="Images/author.jpg">
                        <p class="secondblurb">Another chance to say something special</p>
                      </div>
                    </div>

                    <!-- inside the modal will be a contact form to reach out to the author -->
                      <h2 class="text-center"> Got some good vibes to share? Please contact the author here.</h2>
                    <form>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="First Name">
                      </div>
                    </div><br>

                    <div class="form-row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div><br>

                      <div class="row">
                          <div class="col">
                            <input type="email" class="form-control" placeholder="Email">
                          </div>
                      </div><br>

                      <div class="row">
                          <div class="col">
                            <textarea class="form-control" rows="10" id="comment"></textarea>
                          </div>
                      </div>

                      <button class="btn btn-secondary btn-md">Submit</button>
                  </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<h3 class="text-center title"> Living With Your Eyes Open</h3>
<br>

<!-- Main Navigation buttons -->

<button type="button" class="btn btn-secondary float-left popular" data-toggle="modal" data-target="#exampleModalLong1">
    Most Popular
  </button>


  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle1">Most Popular Posts</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- this will loop through the various iterations of the posts -->
          <div class="card">
          <a href="#">
          <div class="blogtitle">
            Blog Title
          </div>
          <div class="blogDescription">
            Blog Description
          </div>
          </a>
          </div>
          <!-- end loop -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>











<!-- Here will be a modal displaying the most recent blog posts -->

<button type="button" class="btn btn-secondary float-right previous" data-toggle="modal" data-target="#exampleModalLong">
    Previous Posts
  </button>
  <br><br>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Previous Posts</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- this will loop through the various iterations of the posts -->
            <div class="card">
                <a href="#">
                <div class="blogtitle">
                  Blog Title
                </div>
                <div class="blogDescription">
                  Blog Description
                </div>
                </a>
                </div>
                <!-- end loop -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>








<!-- slider for displaying the featured posts -->
<div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <a href="#"></a>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/deep.png" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>   
          </div>
          </a>

          <div class="carousel-item">
            <img src="Images/pexels-photo-247314.jpeg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="Images/think.png" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    <br>

      <!-- This section with display the most recent Posts -->

      <div class="container mt-2">
      
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="card card-block">
                  <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                    <h5 class="card-title mt-3 mb-3">Sierra Web Development • Owner</h5>
                    <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
              </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="card card-block">
                  <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
                    <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                    <p class="card-text">This is a company that builds websites, web .</p> 
              </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="card card-block">
                  <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                <img src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg" alt="Photo of sunset">
                    <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                    <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
              </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="card card-block">
                  <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
                    <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                    <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
              </div>
                </div>    
              </div>
              
            </div>


            <footer>
                    <body class="body">
                            <footer id="red">
                              <h1 class="text">DMC</h1>
                              <h2 class="text2">&copy;	DIMENSIONMC - DESIGNED BY DEN & FLASH</h2>
                              <h2 class="text3">-POWERED BY ENJIN-</h2>
                            </footer>
                            </body>
            </footer>


    <script src="jquery-3.3.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>