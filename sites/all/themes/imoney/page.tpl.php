<?php
$this_path = drupal_get_path('theme', 'imoney');

$element = array(
    '#tag' => 'link', // The #tag is the html tag - <link />
    '#attributes' => array(// Set up an array of attributes inside the tag
        'href' => 'http://fonts.googleapis.com/css?family=Lato:300,400,900',
        'rel' => 'stylesheet',
        'type' => 'text/css',
    ),
);
drupal_add_html_head($element, 'google_font_lato');
?>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b><?php print_r($site_name); ?></b></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#login">Already a member?</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div id="headerwrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1>Trust the force. Choose your plan wisely.</h1>
        
        <?php print(render(drupal_get_form('user_login_block'))); ?>
        
        
      </div><!-- /col-lg-6 -->
      <div class="col-lg-6">
        <img class="img-responsive" src="<?php echo $this_path; ?>/img/ipad-hand.png" alt="">
      </div><!-- /col-lg-6 -->

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /headerwrap -->


<div class="container">
  <div class="row mt centered">
    <div class="col-lg-6 col-lg-offset-3">
      <h1>Your Landing Page<br/>Looks Wonderful Now.</h1>
      <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>
    </div>
  </div><!-- /row -->

  <div class="row mt centered">
    <div class="col-lg-4">
      <img src="<?php echo $this_path; ?>/img/ser01.png" width="180" alt="">
      <h4>1 - Browser Compatibility</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
    </div><!--/col-lg-4 -->

    <div class="col-lg-4">
      <img src="<?php echo $this_path; ?>/img/ser02.png" width="180" alt="">
      <h4>2 - Email Campaigns</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

    </div><!--/col-lg-4 -->

    <div class="col-lg-4">
      <img src="<?php echo $this_path; ?>/img/ser03.png" width="180" alt="">
      <h4>3 - Gather Your Notes</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

    </div><!--/col-lg-4 -->
  </div><!-- /row -->
</div><!-- /container -->

<div class="container">
  <hr>
  <div class="row centered">
    <div class="col-lg-6 col-lg-offset-3">
      <form class="form-inline" role="form">
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
        </div>
        <button type="submit" class="btn btn-warning btn-lg">Invite Me!</button>
      </form>					
    </div>
    <div class="col-lg-3"></div>
  </div><!-- /row -->
  <hr>
</div><!-- /container -->

<div class="container">
  <div class="row mt centered">
    <div class="col-lg-6 col-lg-offset-3">
      <h1>Flatty is for Everyone.</h1>
      <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>
    </div>
  </div><!-- /row -->

  <! -- CAROUSEL -->
  <div class="row mt centered">
    <div class="col-lg-6 col-lg-offset-3">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="<?php echo $this_path; ?>/img/p01.png" alt="">
          </div>
          <div class="item">
            <img src="<?php echo $this_path; ?>/img/p02.png" alt="">
          </div>
          <div class="item">
            <img src="<?php echo $this_path; ?>/img/p03.png" alt="">
          </div>
        </div>
      </div>			
    </div><!-- /col-lg-8 -->
  </div><!-- /row -->
</div><! --/container -->

<div class="container">
  <hr>
  <div class="row centered">
    <div class="col-lg-6 col-lg-offset-3">
      <form class="form-inline" role="form">
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
        </div>
        <button type="submit" class="btn btn-warning btn-lg">Invite Me!</button>
      </form>					
    </div>
    <div class="col-lg-3"></div>
  </div><!-- /row -->
  <hr>
</div><!-- /container -->

<div class="container">
  <div class="row mt centered">
    <div class="col-lg-6 col-lg-offset-3">
      <h1>Our Awesome Team.<br/>Design Lovers.</h1>
      <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>
    </div>
  </div><!-- /row -->

  <div class="row mt centered">
    <div class="col-lg-4">
      <img class="img-circle" src="<?php echo $this_path; ?>/img/pic1.jpg" width="140" alt="">
      <h4>Michael Robson</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
    </div><!--/col-lg-4 -->

    <div class="col-lg-4">
      <img class="img-circle" src="<?php echo $this_path; ?>/img/pic2.jpg" width="140" alt="">
      <h4>Pete Ford</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
    </div><!--/col-lg-4 -->

    <div class="col-lg-4">
      <img class="img-circle" src="<?php echo $this_path; ?>/img/pic3.jpg" width="140" alt="">
      <h4>Angelica Finning</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
    </div><!--/col-lg-4 -->
  </div><!-- /row -->
</div><!-- /container -->

<div class="container">
  <hr>
  <div class="row centered">
    <div class="col-lg-6 col-lg-offset-3">
      <form class="form-inline" role="form">
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
        </div>
        <button type="submit" class="btn btn-warning btn-lg">Invite Me!</button>
      </form>					
    </div>
    <div class="col-lg-3"></div>
  </div><!-- /row -->
  <hr>
  <p class="centered">halms - 2013</p>
</div><!-- /container -->

