<?php include('koneksi.php'); ?>
<html>
    <head>
        <title>Donasiku</title>
    <link rel="icon" href="assets/img/donate.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <header>
        <nav class = "fixed-top">
            <a href="index.php">
                <img id="logo" src="assets/img/donasiku.png">
            </a>
            <ul id="ul">
                <li class="li"><a href="?module=about" class="nav">Tentang</a></li>
                <?php
			session_start(); 
			if(isset($_SESSION['member'])){ ?>
			<li class="li"><a href="#" class="nav" id="prof">Profile</a>
				<ul id="down">
					<li id="li1"><b><?php echo $_SESSION['nama']; ?></b></li>
					<li id="li2"><i>Uang yang sudah didonasikan</i></li>
					<li id="li3">Rp. 1.000.000,-</li>
				</ul>
				
			</li>
			<?php 
			if(isset($_SESSION['member'])):?>
			<li class="li"><a href="../Donasiku/logout.php" class="nav" id="login" >Logout</a>
			<?php else: ?>
			<li class="li"><a href="?module=login" class="nav" id="login">Login</a>
			
			<?php endif; 
			
			?>
				<?php }
			if(isset($_SESSION['admin'])):?>
			<li class="li"><a href="?module=donatur" class="nav">Donatur</a>
			<li class="li"><a href="../Donasiku/logout.php" class="nav" id="login" >Logout</a>
			<?php 
			elseif(isset($_SESSION['member'])):?>
			<?php else: ?>
			<li class="li"><a href="?module=login" class="nav" id="login">Login</a>
			
			<?php endif; 
			
			?>
        </nav>
        <img id="bg" src="assets/img/bgc.jpg">
        <aside>
            <div >
                <p id="text"><b>Mereka membutuhkan <br> Kita !</b></p>
               <p id="text2"><i>Donasiku merupakan website <br>
                   donasi yang aman dan terpercaya. <br>
                   Donasi yang anda berikan pasti <br>
                   akan terkirim kepada mereka <br>
                   terkirim kepada mereka yang <br>
                   membutuhkan.
             </i></p>
              </div>
        </aside>
        
        
    </header>
<body>
    <main>
    
   <?php include('main.php'); ?>
				
</main>
</body>

<footer>
    <p id="cpy">&copy; Andika Hilmi Hamdani</p>
		<div id="smd">
			<a href="https://id-id.facebook.com/" id="url">
  	  <img src="assets/img/socmed-01.png" class="socmed">
  	  </a>
  	  <a href="https://twitter.com/login?lang=id" id="url">
  	  <img src="assets/img/socmed-02.png" class="socmed">
  	  </a>
  	  <a href="https://www.instagram.com/accounts/login/?hl=id" id="url">
  	  <img src="assets/img/socmed-03.png" class="socmed">
  	  </a>
  	  <a href="https://www.whatsapp.com/" id="url">
  	  <img src="assets/img/socmed-04.png" class="socmed">
    	</a>
		</div>
</footer>
</html>