<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-image.jpeg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am şafak ertaş</h3>
      <span data-aos="fade-up">web designer & developer</span>
      <p data-aos="fade-up">Currently studying at college but can work for part time.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Hi I'm Şafak Ertaş. I'm currently third year in college. My department is Computer and Software engineer.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Şafak Ertaş </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> safak_ert@hotmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Mersin Türkiye </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +90 5079179462 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Java</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>C#</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>C++</span> <span>90%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-center">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2020 )</span>
               <h3>First two year at Toros University</h3>
               <p>Between these years, I studied at Toros University. My GPA was 3.40 so I made horizontal transition to Çukurova University. </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2023 )</span>
               <h3>Second year at Çukurova University</h3>
               <p>Then I studied second year at Çukurova University. But in the end of second year, for economic reasons and massive earthquake happened in Turkey I comeback to Toros University. </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2023 - continues )</span>
               <h3>Third year at Toros University</h3>
               <p>I'm currently studying at Toros University. I'm at third year right now.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>
   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>I completed a lot of web development bootcamp and have some experiences.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>I also completed a lot of bootstrap courses and have some experience in bootstrap.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>c languages</h3>
         <p>My main coding language is c languages which is c, c++ and c#.</p>
      </div>
      <div class="box" data-aos="zoom-in">
         <i class="fab fa-java"></i>
         <h3>Java</h3>
         <p>My second language is java and I have completed some projects in Java.</p>
      </div>

   </div>

</section>

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="">
         <h3>web development</h3>
         <span>( 2021 - )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>c++</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.jpg" alt="">
         <h3>c#</h3>
         <span>( 2019 -  )</span>
      </div>
      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
         <h3>java</h3>
         <span>( 2022 -  )</span>
      </div>

   </div>

</section>

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+90 5079179462</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>safak_ert@hotmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Mersin, Türkiye Yenişehir</p>
      </div>

   </div>

</section>

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Safak Ertas</span> </div>

<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>