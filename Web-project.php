
<?php session_start();

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Restaurant</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/Style-web.css">

    </head>
    <body>
        <header>
           <img id="logo-head" src="img/icon.jpeg" style="border-radius: 50%; opacity: 75%">
           <div id="nav">
             <a class="nav-link" href="#">Home</a>
            <a class="nav-link" href="#Menu">Menu</a>
           <a class="nav-link" href="#Contact">Contact us</a>
            <a class="nav-link" href="#Infos">Infos</a>
            <a class="nav-link" href="#About">About us</a>
           
           
           </div> 
        </header>

        <main>
            <div class="homebox">
                <div id="homemsg">Welcome To Our Restaurant ! </div> 
            </br>  
                <a id="bookbutton" href="#Reservation-form">Book A Table</a> 
            </div>

<!-- reservation in the restaurant-->
  <div id="Reservation-form" >
                <div class="Reservation-header">
                    <h1 class="title">Reservation</h1>
                    <p id="description">Book your table</p>
                </div>
                <form id="survey-form" method="POST"  action="php/resr.php">
                
                <label id="prenom-label" for="prenom">First name</label><br>
                <input id="prenom" class="input-field" name="prenom" type="text" placeholder="Enter your first name" required><br>

                <label id="name-label" for="name">Last name</label><br>
                <input id="name" class="input-field" name="name" type="text" placeholder="Enter your last name" required><br>

                <label id="email-label" for="email">Email</label><br>
                <input id="email" class="input-field" name="email" type="email" placeholder="Enter your email" ><br>

                <label id="phone-label" for="phone">Phone number</label><br>
                <input id="phone" class="input-field" name="phone" type="tel" placeholder="0612345678"  required><br>

                <label id="date" for="date">Date of Reservation</label><br>
                <input id="date" class="input-field" name="date" type="date"  required><br>

                <label id="time" for="time">Time of Reservation</label><br>
                <input id="time" class="input-field" name="time" type="time"  required><br>

                <label id="number-label" for="number">Number of persons</label><br>
                <input id="number" class="input-field" name="number" type="number" min="1" max="8" placeholder="Number of persons"><br>
                
                <input id="submit" type="submit" name="submit"  value="Book" >
        
            
                </form>
            </div>

          
<!-- Menu -->

<<div id="Menu" class="Aboutbox">
    <h1 class="title">Menu</h1>
    <div id="menu_row">
        <div id="menu_col">
            <h2>Starter</h2>
            <div class="box">
                <div id="image">
                    <img src="img/ChocolatMilk.jpg">
                </div>
                    <h3>Chocolate milk</h3>
                    <h4>15 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/tea.jpg">
                </div>
                    <h3>Tes</h3>
                    <h4>6 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/yagourt.jpg">
                </div>
                    <h3>Yagourt</h3>
                    <h4>5 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/soupe.jpg">
                </div>
                    <h3>Soupe</h3>
                    <h4>15 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/Halloumi.jpg">
                </div>
                    <h3>Halloumi</h3>
                    <h4>15 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/Salade.jpg">
                </div>
                    <h3>Salade </h3>
                    <h4>12 DH</h4>
            </div>
        </div>
        <div id="menu_col">
            <h2>Main dish</h2>
            <div class="box">
                <div id="image">
                    <img src="img/pizza.jpg">
                </div>
                    <h3>Pizza</h3>
                    <h4>20 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/tajin.jpg">
                </div>
                    <h3>Tajine</h3>
                    <h4>40 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/sandwish.jpg">
                </div>
                    <h3>Sandwish</h3>
                    <h4>20 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/panini.jpg">
                </div>
                    <h3>Panini</h3>
                    <h4>25 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/couscous.png">
                </div>
                    <h3>Couscous</h3>
                    <h4>45 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/fish.jpg">
                </div>
                    <h3>Fish</h3>
                    <h4>120 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/meat.jpg">
                </div>
                    <h3>Meat</h3>
                    <h4>100 DH</h4>
            </div>
        </div>
        <div id="menu_col">
            <h2>Dessert</h2>
            <div class="box">
                <div id="image">
                    <img src="img/AppleJuice.jpg">
                </div>
                    <h3>Apple Juice</h3>
                    <h4>13 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/LimonJuice.jpg">
                </div>
                    <h3>Limon Juice</h3>
                    <h4>11 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/mousse.jpg">
                </div>
                    <h3>Orange mousse </h3>
                    <h4>30 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/Strawberry.jpg">
                </div>
                    <h3>Strawberry mousse </h3>
                    <h4>35 DH</h4>
            </div>
            <div class="box">
                <div id="image">
                    <img src="img/cupcake.jpg">
                </div>
                    <h3>Cup cake</h3>
                    <h4>8 DH</h4>
            </div>
                        <div class="box">
                <div id="image">
                    <img src="img/cake.jpg">
                </div>
                    <h3>Cake</h3>
                    <h4>15 DH</h4>
            </div>
        </div>
    </div>
    
</div>
                                                                                           
                                                                                           
                                                                                           
<!--Contact us-->
            <div id="Contact">
                <div class="Reservation-header">
                    <h1 class="title">Contact us</h1>
                    <p id="description">What can we help you with ?</p>
                </div>
                <form id="survey-form" method="POST"  action="php/contact.php">
                    <label id="name-label" for="name">Last name</label><br>
                    <input id="name" class="input-field" name="name" type="text" placeholder="Enter your last name" required><br>
                    <label id="prenom-label" for="prenom">First name</label><br>
                    <input id="prenom" class="input-field" name="prenom" type="text" placeholder="Enter your first name" required><br>
                    <label id="email-label" for="email">Email</label><br>
                    <input id="email" class="input-field" name="email" type="email" placeholder="Enter your email" required><br>
                    <label id="email-label" for="email">Message</label><br>
                    <textarea id="texta"class="input-field" name="message" placeholder="Write your message ..." required ></textarea>
                    <input id="submit" type="submit" value="Send" name="submit" >      
                </form>   

            </div>

 <!-- Infos -->         
        <div class="contact-wrap" id="Infos">
            <div class="contact-in">
                <h1 class="title">Infos</h1>
                <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
                <p>123-456-789</p>
                <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
                <p>info@inptrestaurant.com</p>
                <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
                <p>Madinat Al Irfane, Rabat, Morocco</p>
               
            </div>
            <div class="contact-in">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13233.886489288432!2d-6.8672307!3d33.9804179!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee9ee437a0cfbaea!2sInstitut%20national%20des%20postes%20et%20t%C3%A9l%C3%A9communications!5e0!3m2!1sfr!2sma!4v1671229260665!5m2!1sfr!2sma" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
  <!-- About us --> 
            <div class="Aboutbox" id="About">
                <h1 class="title">ABOUT US</h2>
                    <p id="abouttext" >Book your table easily and in a short time in our restaurant using our website. Reserve now and enjoy the experience.</p>
                   
                 
                <ul> <h3 id="abouttitles">Social media :</h3>
                    <li><a class="aboutlinks" href=""> FACEBOOK </a></li>
                    <li><a class="aboutlinks" href=""> INSTAGRAM </a></li>
                    <li><a class="aboutlinks" href=""> TWITTER </a></li>
                </ul>
    
            </div> 
  <!-- Burger builder -->  
            <div class="Aboutbox" id="About">
                <h1 class="title">build your burger</h2>
          
                    <input id="submit" type="button" onclick=window.location.href='http://localhost/WEBproject-main/burger/' value="START"> </button>
    
            </div> 

    
        </main>
        

    </body>
</html>
