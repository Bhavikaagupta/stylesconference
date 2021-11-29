<?php 

include 'config.php';

error_reporting(0);

//session_start();

?>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    </head>
    <body>
        <div class="row">
            <div class="col-12">
              <div class="topnav" style="text-align: right;background-color:#293f50;">
                    <h3 style="color:white; text-align:left;font-family:sans-serif;font-size:50px; padding-left: 70px;padding-top: 10px;">STYLES<br>CONFERENCE</h3>
                    <h3 class="tagline" style="padding-right: 70px;font-size: x-large;padding-top: 5px;color: white;position: relative;bottom:90px;">AUGUST 24-25-Chicago,IL</h3>
                        <a href="firstpage.php" style="color: white; padding: 20px;position: relative;bottom: 80px;">Home</a>
                     <a href="speakers.html"style="color: white;padding: 20px;position: relative;bottom: 80px;">Speakers</a>
                     <a href="schedule.html"style="color: white;padding: 20px;position: relative;bottom: 80px;">Schedule</a>
                    <a href="venue.html"style="color: white;padding: 20px;position: relative;bottom: 80px;">Venue</a>
                    <a href="reg.php"style="color: white;padding:20px;position: relative;bottom: 80px;">Register</a>
              </div>
            </div>
        </div>
                
                <h2 style="font-family: 'Courier New', Courier, monospace; text-align: center;font-weight: 400px;">Register</h2>
                <h4 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;text-align: center;">Every year we aim to have an unbelievable time, and this year we would love it for you to join us. Conference passes only cost $99, one of the best values you will find.</h4>
                 <div class="row">  
                    <div class="col-lg-6">
                        <h2 style="text-align: left;padding-left: 250px;">Purchase a Conference Pass</h2>
                            <h6 style="color: grey;padding-left: 250px;">$99 PER PASS</h6>
                            <p style="text-align: left;padding-left: 250px;">Purchase your Styles Conference pass using the form to the right. Multiple passes<br> may be purchased within the same order, so feel free to bring a friend or two along.<br>Once your order is finished we will follow up and provide a receipt for your purchase.<br> See you soon!</p>
                            <h4 style="padding-left: 250px;">Why Attend?</h4>
                            <ul style="padding-left: 250px;">
                                <li>Over twenty world-class speakers</li>
                                <li>One full day of workshops and two full days of presentations</li>
                                <li>Hosted at The Chicago Theatre, a historical landmark</li>
                                <li>August in Chicago is simply amazing</li>
                            </ul>
                    </div>
                    <div class="col-lg-6">
                                                
                            <form action="" method="POST">  
                             
                        <div style="text-align: right;padding-right: 250px;">
                            <label for="name" style="text-align: left;">Name</label>
                        <input type="text" id="name" name="name" style="padding: 10px;" placeholder="fullname" required><br><br>
                        <label for="email">Email </label>
                        <input type="email" id="email" name="email" style="padding: 10px;" placeholder="Email Address" required><br><br>
                        <label for="number_of_passes" style="position: relative;right: 150px;">Number of Passes</label>
                        <select name="number_of_passes" id="number_of_passes" class="quantity" style="position: relative;right:130px;padding: 10px;" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select><br><br>
                        
                       
                        <!-- <input type="submit" name="submit" value="submit" style="padding: 20px;padding-right: 100px;position: relative;right:20px;border-color:#888;background-color: #293f50;color: white;"><a style="color: white;">PURCHASE</a></button> -->

                        <input type="submit" name="submit" value="Submit" style="padding: 20px;padding-right: 100px;position: relative;right:20px;border-color:#888;background-color: #293f50;color: white;"/>
                          
                    </div>
                        </form> 
                    </div>
                <footer class="primary-footer-grp" style="background-color:#293f50;color: black;padding: 30px;left: 0; bottom: 0; width: 100%;">&#169 StyleConference
           <!-- <a href="#" class="fa fa-facebook" style="font-size:20px;position: relative;left:995px;padding: 10px;display:inline-block;"></a>
            <a href="#" class="fa fa-twitter" style="position: relative;left:1000px;font-size:20px;padding: 10px;"></a> 
            <a href="#" class="fa fa-google" style="position: relative;left:1005px;font-size:20px;padding: 10px;"></a>-->
        </footer>

       
    </body>
</html>
