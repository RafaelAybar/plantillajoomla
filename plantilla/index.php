<?php defined( '_JEXEC') or die( 'Restricted access' );?>
<!doctype html>
<html     class="no-js"
          xmlns="http://www.w3.org/1996/xhtml"
          xml:lang="<?php echo $this->language; ?>"
          lang="<?php echo $this->language; ?>"
          >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" href="/<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.min.css" type="text/css" />
<link rel="stylesheet" href="/<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css" type="text/css" />
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
	<h1>
      Blog de Ángel y Rafa
      </h1>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>windows.jquery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="/<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<script>window.jQuery || document.write('<script src="/<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="/<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>
      <div class="logo">
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/img/logo.png " alt="logotipo">
      </div>
      <nav class="mainmenu">
        <jdoc:include type="component"/> </nav>
      <section class="main">
        	<article class="content">
              <jdoc:include type="component"/>
        </article>
        <aside class="left">
        <jdoc:include type="modules" name="left" style="xhtml"/>
        </aside>
        <aside class="right">
        <jdoc:include type="modules" name="right" style="xhtml"/>
        </aside>
      </section>
    </body>
</html>
