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
    <?php if ($main_menu || $secondary_menu): ?>
      <div class="navbar-collapse collapse">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix', 'nav', 'navbar-nav', 'navbar-right')))); ?>
        <!--<ul class="nav navbar-nav navbar-right">-->
        <!--<li><a href="#login">Already a member?</a></li>-->
        <!--</ul>-->
      </div><!--/.nav-collapse -->
    <?php endif; ?>
  </div>
</div>

  <div class="container">
    <div class="row mt centered">
      <div class="col-lg-6 col-lg-offset-3">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>
    </div><!-- /row -->

    <div id="main-wrapper" class="row mt">
      <div id="content" class="column">
        <?php if ($page['sidebar_first']): ?>
          <div id="sidebar-first" class="col-lg-2">
            <?php print render($page['sidebar_first']); ?>
          </div> <!-- /.section, /#sidebar-first -->
        <?php endif; ?>
        <div class="col-lg-10">
          <?php print render($page['content']); ?>
        </div>
      </div>
    </div>
  </div><!-- /container -->

<hr>
<p class="centered">halms - 2013</p>
