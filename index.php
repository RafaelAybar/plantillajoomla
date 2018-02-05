<?php defined( 'JEXEC') or die('RESTRICTED ACCES');?>
<!DOCTYPE html>
	<html xmlns="http://www.w3.org/xhtml" xml:lang="<?php echo $this->languaje; ?>">
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>css/plantilla.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>css/plantilla.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>css/plantilla.css/<?php echo $this->template; ?>css/plantilla.css" type="text/css" />
</head>
<body>
<jdoc:include type="modules" name="top" />
<jdoc:include type="modules" name="right" />
<jdoc:include type="modules" name="left" />
<jdoc:include type="component" />
<jdoc:include type="modules" name="footer" />
</body>
</html>
