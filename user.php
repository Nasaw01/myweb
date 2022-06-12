<?php 

    session_start();
    require_once 'con_db/con_db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="main.css">

</head>
<body>
      <!--bar-->
    <div class="tabbar">
    <ul>
        <a href="index.php"><li>Home</li></a>
        <a href="index.php"><li>Logout</li></a>
    </div>
      </ul>
   </div>

    <!-- Header -->
    <header>
        <img class="h-img" src="http://f.ptcdn.info/411/025/000/1415602955-dota2offic-o.jpg">
    </header>


    <div class="Sefont">
        <h3>รายการ</h3>
      </div>


<div class="miansection">
<div class="contairner">

<div class="responsive">
    <div class="gallery">
        <img src="img/อเมริกัน.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <a href="American Shorthair.html"><button class="button">สายพันธุ์ อเมริกันช็อตแฮร์</button></a>
    </div>
  </div>
  
  
  <div class="responsive">
    <div class="gallery">
        <img src="img/บริ.png" alt="Forest" width="600" height="400">
      </a>
      <a href="British Shorthair.html"><button class="button">สายพันธุ์ บริติช ช็อตแฮร์</button></a>
    </div>
  </div>
  
  <div class="responsive">
    <div class="gallery">
        <img src="img/เบงกอล.jpg" alt="Northern Lights" width="600" height="400">
      </a>
      <a href="Bengal.html"><button class="button">สายพันธุ์ เบองกอล</button></a>
    </div>
  </div>

  
<div class="responsive">
    <div class="gallery">
        <img src="img/อเมริกัน เคิร์ล.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <a href="American curl.html"><button class="button">สายพันธุ์ อเมริกัน เคิร์ล </button></a>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
        <img src="img/Exotic Shorthair.1.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <a href="Exotic Shorthair.html"><button class="button">สายพันธุ์ เอ็กซ์โซติก ช็อตแฮร์</button></a>
    </div>
  </div>


  <div class="responsive">
    <div class="gallery">
        <img src="img/50-CAT-Persian_Cover-1200-x-630.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <a href="Persian cat.html"><button class="button">สายพันธุ์ แมวเปอร์เซีย </button></a>
    </div>
  </div>


  <div class="responsive">
    <div class="gallery">
        <img src="img/33-CAT-Maine-Coon_Cover-1200-x-630.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <a href="Maine Coon.html"><button class="button">สายพันธุ์ เมนคูน </button></a>
    </div>
  </div>


  <div class="responsive">
    <div class="gallery">
        <img src="img/bc8h-hub-ragdoll-adult-black-and-white.png" alt="Cinque Terre" width="600" height="400">
      </a>
     <a href="Ragdoll Cat.html"><button class="button">สายพันธุ์ แมวแร็กดอลล์</button></a>
    </div>
  </div>

</div>
</div>
</body>
</html>