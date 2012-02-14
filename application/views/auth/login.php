<!doctype html>
<html lang="en-us">
<head>
  <meta charset="utf-8">
  
  <title>LabService Login</title>
  
  <meta name="description" content="">
  <meta name="author" content="Reinaldo Zurita">
  
  
  <!-- Apple iOS and Android stuff -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-icon-precomposed" href="img/icon.png">
  <link rel="apple-touch-startup-image" href="img/startup.png">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1">
  
  <!-- Google Font and style definitions -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold">
  <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
  
  <!-- include the skins (change to dark if you like) -->
  <link rel="stylesheet" href="<?php echo base_url('css/light/theme.css'); ?>" id="themestyle">
  <!-- <link rel="stylesheet" href="css/dark/theme.css" id="themestyle"> -->
  
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link rel="stylesheet" href="css/ie.css">
  <![endif]-->
  
  <!-- Use Google CDN for jQuery and jQuery UI -->
  <script src="<?php echo base_url('js/jquery-1.7.1.min.js'); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
  
  <!-- Loading JS Files this way is not recommended! Merge them but keep their order -->
  
  <!-- some basic functions -->
  <script src="<?php echo base_url('js/functions.js'); ?>"></script>
    
  <!-- all Third Party Plugins -->
  <script src="<?php echo base_url('js/plugins.js') ?>"></script>
    
  <!-- Whitelabel Plugins -->
  <script src="<?php echo base_url('js/wl_Alert.js'); ?>"></script>
  <script src="<?php echo base_url('js/wl_Dialog.js'); ?>"></script>
  <script src="<?php echo base_url('js/wl_Form.js'); ?>"></script>
    
  <!-- configuration to overwrite settings -->
  <script src="<?php echo base_url('js/config.js'); ?>"></script>
    
  <!-- the script which handles all the access to plugins etc... -->
  <script src="<?php echo base_url('js/login.js'); ?>"></script>
</head>
<body id="login">
    <header>
      
    </header>
    <section id="content">
    <form action="submit.php" id="loginform">
      <fieldset>
        <section><label for="username">Usuario</label>
          <div><input type="text" id="username" name="username" autofocus></div>
        </section>
        <section><label for="password">Password <a href="#">Recuperar Password?</a></label>
          <div><input type="password" id="password" name="password"></div>
          <div><input type="checkbox" id="remember" name="remember"><label for="remember" class="checkbox">recordarme</label></div>
        </section>
        <section>
          <div><button class="fr submit">Ingresar</button></div>
        </section>
      </fieldset>
    </form>
    </section>
    <footer>Labservice 2012</footer></body>
</html>
<!--

<div class='mainInfo'>

	<div class="pageTitle">Login</div>
    <div class="pageTitleBorder"></div>
	<p>Please login with your email/username and password below.</p>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php echo form_open("auth/login");?>
    	
      <p>
      	<label for="identity">Email/Username:</label>
      	<?php echo form_input($identity);?>
      </p>
      
      <p>
      	<label for="password">Password:</label>
      	<?php echo form_input($password);?>
      </p>
      
      <p>
	      <label for="remember">Remember Me:</label>
	      <?php echo form_checkbox('remember', '1', FALSE);?>
	  </p>
      
      
      <p><?php echo form_submit('submit', 'Login');?></p>

      
    <?php echo form_close();?>

</div>
-->