
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Brobook</title>
  <meta name="description" content="Da shit">
  <meta name="author" content="Brobook">
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href='../css/maincss.css' rel='stylesheet' type='text/css'>
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
          <li><a href="../status/showStatus">Home</a></li>
          <li><a href="../user/showUser">Profile</a></li>
          <li class="active"><a href="start_message.php">Messages</a></li>
        </ul>
         <div class="col-xs-8 col-md-8 center-block">
          <div class="search"> 
            <div class="input-group stylish-input-group">
              <input type="text" class="form-control"  placeholder="Search" >
              <span class="input-group-addon">
                <button type="submit">
                  <span class="glyphicon glyphicon-search"></span>
                </button>  
              </span>
            </div>
          </div>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php $user = $_SESSION["user"]; echo($user);?><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"> Preferences</a></li>
              <li><a href="#"> Contact Support</a></li>
              <li class="#"></li>
              <li><a href="logout.php"> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
  <div class="panel panel-default">
  <div class="panel-heading">
  <!--
    <div class="search"> 
      <div class="input-group stylish-input-group">


      </div>
    </div>
-->

  </div>
  <div class="panel-body">
    <div class="col-xs-6 col-md-4">
      <nav class="nav-sidebar">
        <span class="">
          <button type="submit" name="" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Create Conversation</button>
       </span>
        <ul class="nav tabs">
          <?php
          if($showConversationListStm->execute()){
            $tabNr = 1;
            while($convRow = $showConversationListStm->fetch()){
                if($tabNr == 1){
                    $isActive = "active";
                }
                else{
                    $isActive = "";
                }
          ?>
              <li class="<?php echo($isActive)?>"><a href="#tab<?php echo($convRow["conversation_id"])?>" data-toggle="tab"><?php echo($convRow["name"])?></a></li>
            <?php
                $tabNr++;
            }
          }
          ?>
        </ul>
      </nav>
    </div>

    <!-- tab content -->
    <div class="col-xs-12 col-md-8">
      <div class="tab-content">
        <?php
        //$messageStm = $db->prepare("SELECT * FROM messages WHERE conversation_id = :conv_id");
        //$messageStm->bindParam(":conv_id", $convRow);
        ?>
        <div class="tab-pane active text-style" id="tab1">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="" alt="...">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading"></h4>
            <p>HEJ</p>
          </div>
        </div><!-- end message -->
        <div class="media">
          <div class="media-left">
            <img class="media-object" src="" alt="...">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"></h4>
          <p>Dåå</p>
        </div>
      </div><!-- end message -->
        <div class="input-group text-box"><!-- textarea -->
          <form method="post" action="">
            <textarea class="form-control" rows="3" style="width:630px; height:78px;"></textarea>
              <span class="group-addon pull-right">
                  <button type="submit" name="send_message_button" class="btn btn-primary btn-text"><i class="glyphicon glyphicon-bullhorn"></i></button>
               </span>   
          </form>
        </div><!-- textarea -->
    </div>
        <div class="tab-pane text-style" id="tab2">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading"></h4>
        <p>Tjena</p>
      </div>
    </div><!-- end message -->
    <div class="media">
      <div class="media-left">
        <img class="media-object" src="" alt="...">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading"></h4>
      <p>hej</p>
    </div>
  </div><!-- end message -->
  <div class="input-group text-box"><!-- textarea -->
    <form method="post" action="">
      <textarea class="form-control" rows="3" style="width:630px; height:78px;"></textarea>
        <span class="group-addon pull-right">
            <button type="submit" name="send_message_button" class="btn btn-primary btn-text"><i class="glyphicon glyphicon-bullhorn"></i></button>
         </span>   
    </form>
  </div><!-- textarea --> 
</div>
        <div class="tab-pane text-style" id="tab3">
  <div class="media">
    <div class="media-left">
      <img class="media-object" src="" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"></h4>
    <p>hehhehehehe</p>
  </div>
</div><!-- end message -->
<div class="media">
  <div class="media-left">
    <img class="media-object" src="" alt="...">
  </a>
</div>
<div class="media-body">
  <h4 class="media-heading"></h4>
  <p>hehhehehehe</p>
</div>
</div><!-- end message -->
  <div class="input-group text-box"><!-- textarea -->
    <form method="post" action="">
      <textarea class="form-control" rows="3" style="width:630px; height:78px;"></textarea>
        <span class="group-addon pull-right">
            <button type="submit" name="send_message_button" class="btn btn-primary btn-text"><i class="glyphicon glyphicon-bullhorn"></i></button>
         </span>   
    </form>
  </div><!-- textarea -->
</div>
</div> <!-- tab end -->
</div> <!-- conv end -->
</div> <!-- panel body -->
</div> <!-- panel end -->
</div> <!-- container -->


<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script src="js/brobook.js"></script>
</body> 
</html>