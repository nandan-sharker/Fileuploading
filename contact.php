<?php

$page = 'contact';

session_start();
$con = mysqli_connect("localhost", "root", "", "nayem") or die("Error " . mysqli_error($con));
?>

<?php require_once( 'header.php' ); ?>

<?php require_once( 'top_nav.php' ); ?>

 
 

<!--==========================
  Contact Section
============================--> 
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
           <center><h2 class="lead" style="color:white;">Contact With Me</h2> </center>
		  <button type="button" class="btn btn-primary btn-lg btn-block"></button> 
          <div class="section-title-divider"></div>
      
        </div>
		</br>
		</br>
		</br>
		</br>
		</br>
      </div>
      
      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
             
              <span class="glyphicon glyphicon-user"></span><p>Binodpur<br>Rajshahi,Bangladesh.</p>
            </div>
			
             <div>
                <span class="glyphicon glyphicon-envelope"></span><p>nayemcseru@gmail.com</p>
            </div>
            
            <div>
               <span class="glyphicon glyphicon-earphone"></span><p>+880 1782 771803</p>
            </div>
            
          </div>
        </div>
        
        <div class="col-md-5 col-md-push-2">
          <div class="form">
 			
            <div id="errormessage">
 
			</div>
            <form action="welcome.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
 
  </section>


 
 <?php require_once( 'footer.php' ); ?>