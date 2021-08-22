<?php

include_once("header.php");


?>


<style>


    
form#contactForm input {
  width: 600px;
  border: none;
  border-bottom: 2px solid #a6a6d3;
  padding: 10px;
  font-size: 20px;
  outline: none;
}

form#contactForm textarea {
  width: 600px;
  border: 2px solid #a6a6d3;
  border-radius: 10px;
  font-size: 20px;
  padding: 10px;
  outline: none;
}

form#contactForm button {
    padding: 2px 21px;
    border-radius: 6px;
    background: #6a6a95;
    color: white;
    font-size: 20px;
    outline: none;
    font-weight: 700;
    border: none;
}
</style>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <!-- data-sb-form-api-token="API_TOKEN" -->


                
     
                <form enptype="multipart/form-data" action="contact_core.php" method="post" id="contactForm">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input id="name" name="usrname" type="text" placeholder="full name" required/>
                        <div></div>

              
                        
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input id="email" name="email_addr" type="email" placeholder="Email Address" required/>
                      
                      
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input id="phone" name="phonenum" type="tel" placeholder="Phone number" required/>
                      
                       
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea id="message" name="massage" type="text" placeholder="massage" style="height: 10rem"></textarea>
                    
                    </div>

                    <button type="submit" name="submitbutton">Sent</button>
                    <div id="success">
                    <font color='green'>
                  

                    <?php
        
        if(isset($_REQUEST['done'])){


            echo ($_REQUEST['done']);
       
        }
        
        ?>
    </font>
                    </div>
                </form>

                <!-- <script>

                    jQuery('#contactForm').on('submit',function(e){

                            jQuery('#submitbutton').html('Please Wait');
                            jQuery('#submitbutton').attr('disabled',true);


                    //    jQuery.ajax({

                    //        url:'contact_core.php',
                    //        type:'post',
                    //        data:jQuery('#contactForm').serialize(),
                    //        success:function(result){

                    //            jQuery.('#success').html(result);

                    //         jQuery('#submitbutton').html('Submit');
                    //         jQuery('#submitbutton').attr('disabled',false);



                    //        }
                    //    
                    }
                    );

                       alert('a');

                        e.preventDefault();

                    }
                    
                    );
                </script> -->
               
            </div>
        </div>
    </div>
</section>
                 
<?php

include_once("footer.php");

?>