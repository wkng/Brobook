<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Brobook</title>
    <meta name="description" content="Da shit">
    <meta name="author" content="Brobook">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='css/maincss.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">BroBook</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="profile.php">Profile</a></li>
                <li><a href="message.php">Messages</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"> Preferences</a></li>
                    <li><a href="#"> Contact Support</a></li>
                    <li class="#"></li>
                    <li><a href="#"> Logout</a></li>
                   </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid profile-header">
  <div class="container">

    <div class="row profile-header-content">
      <div class="col-md-3 col-sm-3 col-xs-4 profile-pic">
      <img src="http://gfx.bloggar.aftonbladet-cdn.se/wp-content/blogs.dir/428/files/2014/11/78.jpg" class="img-thumbnail"></div>
      <div class="col-md-9 col-sm-9 col-xs-8 profile-about">
        <h2>Per Hammar</h2>
        <p><i class="glyphicon glyphicon-globe"></i>Sweden</p>

        <div class="col-xs-8 col-md-12 feed_textarea">
              <textarea class="form-control" rows="2"></textarea>
        <div class="pull-right col-xs-4 col-md-2 profile_button">
          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-bullhorn"></i></button>
          </div>
        </div>



        <div class="col-xs-12 col-md-12 feed">
        <div class="feed_body">
          <div class="row">
            <div class="col-xs-4 col-md-2 feed_profile">
              <img src="http://gfx.bloggar.aftonbladet-cdn.se/wp-content/blogs.dir/428/files/2014/11/78.jpg" alt="meta image" class="meta_image" />
              <a href="#">Per Hammar</a>
            </div>
            <div class="col-xs-12 col-md-10 feed_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam rerum aliquid ipsum officiis tempore corrupti qui voluptate ullam non eius fugit totam facilis id vero reprehenderit praesentium, beatae enim eum.</p>
            </div>
          </div>
        </div>
        <hr class="feed_hr" />
        <div class="bottom">
          <div class="row">
            <div class="bottom_left">
              <p>left</p>
            </div>
            <div class="bottom_right">
              2 days ago
            </div> 
          </div>
        </div>
      </div>
      </div>
    </div>

  </div>
</div>
<div class="container">
  <div class="row">

    </div> <!-- End Row -->
    </div> <!-- container -->

      <script src="js/jquery.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/brobook.js"></script>
</body>
</html>