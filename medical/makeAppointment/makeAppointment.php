


<!DOCTYPE html>
<html>
    <head>
        <title>MEDICAL WEBSITE</title>
        <link rel="stylesheet" type="text/css" href="appointmentC/colorA.css">
    </head>

    <body>
        <header>
            <div class="main">
                <div class="logo">
                <img src="https://www.freepnglogos.com/uploads/medicine-logo-png-1.png"> 
            </div>
                <ul>
                    <li><a href="../index.html">HOME</a></li>
                    <li><a href="#">ABOUT</a></li class="active"> 
                    <li><a href="../contacts/contact.html">CONTACT-US</a></li class="active">
                    <li class="active"><a href="#">MAKE APPOINTMENT</a></li>
                    <li><a href="../dokotela/login/index.php">DOCTOR SIGN IN</a></li>
                </ul>
            </div>
            <div class="wrapper">


            
             
              <form class="sign-up-htm" action="?" method="POST">

                <div class="contact-form">
                  <div class="input-fields">
                   
                  <div>
                  <input type="text" class="input" name="Name" placeholder="Name" >
                
                    </div>

                    <div>
                    <input type="email" class="input" name="Email" placeholder="Email Address" required="">
                   
                  </div>
                  
                    <input type="text" class="input"name="phone" placeholder="phone" required="">
                    <input type="text" id ='ID_number' class="input"name="ID_number" placeholder="ID NUMBER" > 


                    <div class="buttonD">
                      <label for="date">DATE</label>
                    </div>
                    <input type="date" name="dates" class="gui-input" required="">
                  
                    <div class="buttonT">
                      <label for="time">TIME</label>
                    </div>
    
                    <select id ="times"name="times" class="gui-input" required="">

                      <option >08:00</option>
                      <option >09:00</option> 
                      <option >10:00</option> 
                      <option >11:00</option> 
                      <option >12:00</option> 
                      <option >ELLOW</option> 
                      <option >14:00</option>
                      <option >15:00</option> 
                      <option >16:00</option> 
                     
                    </select>
    



                    <div class="buttonS">
                  <label for="speciality">SPECIALITY</label>
                </div>

                  <select id ="buttonS">
                    <option value = "fp">FAMILY PLANNING</option>
                    <option value = "consult">CONSULTATION</option>  
                  </select>

                  
                  <div class="button-panel">
                    <input type="submit" class="btn" title="MAKE AN APPOINTMENT" name="btn" value="MAKE AN APPOINTMENT"></input>
                    </div>
                
                </div>
                
                </div>
              </form>
              </form>

              </div>	
        </header>
    </body>
</html>