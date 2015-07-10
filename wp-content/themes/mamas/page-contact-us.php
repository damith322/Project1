<?php get_header(); ?>
<?php

if(have_posts()):
    while(have_posts()) : the_post(); ?>

<!--<h2><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h2>-->

    <?php  //the_content();  ?>

<?php ?>
<div class="container">
    <div class="row marow-conainer">
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9696594098664!2d80.09995599999999!3d6.134778999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae177e2cc5e509b%3A0xebf3bbf2073236d1!2smamas+coral+beach+hotel!5e0!3m2!1sen!2slk!4v1434707419064" width="100%" height="400" frameborder="0" style="border:0"></iframe>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 contact_us">
            <form name="contact-form" action="<?php bloginfo('template_url'); ?>/contact.php" method="post" >
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h4>Contact Us Form</h4>
                            <p>Drop Us a Message and we will respond you soon.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="">First Name *</label>
                                <input type="text" name="FName" class="form-control" placeholder="" />
                                <span id='contact-form_FName_errorloc' class="label label-danger"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="LName" class="form-control" id="" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="">Email *</label>
                                <input type="text" name="Email" class="form-control" id="" placeholder="" />
                                <span id='contact-form_Email_errorloc' class="label label-danger"></span>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" name="PNumber" class="form-control" id="" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="message" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                            <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </div>
                
        </form>
            <script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("contact-form");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();

            frmvalidator.addValidation("FName", "req", "Please enter your First Name");
            frmvalidator.addValidation("FName", "maxlen=50", "Max length for FirstName is 50");

            frmvalidator.addValidation("Email", "maxlen=50");
            frmvalidator.addValidation("Email", "req", "Please enter your Email Address");
            frmvalidator.addValidation("Email", "email");
        </script>


                </div>
    </div>
</div>
<?php include 'contactus-content.php'; ?>
<?php include 'content.php'; ?>

<?php
    endwhile;
else:
    echo "<p>No Content Found Here... this gallery</p>";
endif;
?>

<?php get_footer(); ?>