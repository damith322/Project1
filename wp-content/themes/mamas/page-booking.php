<?php get_header(); ?>
<?php

if(have_posts()):
    while(have_posts()) : the_post(); ?>

<!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
<?php //get_template_part( 'content', get_post_format() ); ?>
    

<div class="container">
    <div class="row row-container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="mabooking-content">
                <div class="table-responsive">
                <?php  the_content();  ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="mabooking-content">
                <div class="table-responsive">
                <?php echo the_field('booking'); ?>
                </div>
            </div>
        </div> 
    </div>
<form name="booking_form" role="form" action="" method="post">
            <div class="row row-container">

                <h2 class="matitle">Booking Form</h2>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">First Name *</label>
                        <input type="text" name="FName"  class="form-control" placeholder="" value=''>
                        <span id='booking_form_FName_errorloc' class="label label-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="LName" class="form-control" id="" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="">Email *</label>
                        <input type="text" name="Email" class="form-control" id="" placeholder="">
                        <span id='booking_form_Email_errorloc' class="label label-danger"></span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" name="PNumber" class="form-control" id="" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="">No. of Adults</label>
                        <select name="NAdults" id="nodate" class="form-control">
                            <option selected="selected" disabled="disabled" value="">--Select--</option>
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>                        </select>
                        <span id='booking_form_NAdults_errorloc' class="label label-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="">No. of  Children</label>
                        <select name="NChildren" id="nodate" class="form-control">
                            <option selected="selected" disabled="disabled" value="">--Select--</option>
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>                        </select>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Select an Option</label>
                        <select name="SOption" class="form-control">

                            <option selected="selected" disabled="disabled" value="">--Select--</option>
                            <option value="Mamas Cottage">Mamas Cottage</option><option value="Mamas Villa">Mamas Villa</option><option value="Mamas Hottel">Mamas Hottel</option>                        </select>
                        <span id='booking_form_SOption_errorloc' class="label label-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Check - in Date</label>
                        <input type="text" name="CIDate" class="form-control" id="check_in_date" placeholder="">
                        
                        <span id='booking_form_CIDate_errorloc' class="label label-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Check - out Date</label>
                        <input type="text" name="CODate" class="form-control" id="check_out_date" placeholder="">
                        
                        <span id='booking_form_CODate_errorloc' class="label label-danger"></span>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Special Wishes</label>
                        <textarea name="SWishes" class="form-control" rows="5"></textarea>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top: 25px;">
                    <div class="form-group">
                        <label for="">Need transport from airport ? </label>&nbsp;
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="Yes" checked>
                                Yes
                            </label>
                        </div>
                        <div class="radio-inline">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="No">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="CopyMail" value="send">
                            Send me a copy of this message
                        </label>
                    </div>

                    <button type="submit" class="btn btn-warning">Send</button>
                </div>
            </div>
        </form>
</div>

<script language="JavaScript" type="text/javascript" xml:space="preserve">
            var frmvalidator = new Validator("booking_form");
            frmvalidator.EnableOnPageErrorDisplay();
            frmvalidator.EnableMsgsTogether();

            frmvalidator.addValidation("FName", "req", "Please enter your First Name");
            frmvalidator.addValidation("FName", "maxlen=50", "Max length for FirstName is 50");

            frmvalidator.addValidation("Email", "maxlen=50");
            frmvalidator.addValidation("Email", "req", "Please enter your Email Address");
            frmvalidator.addValidation("Email", "email");

            frmvalidator.addValidation("NAdults", "req", "Please select Value");
            frmvalidator.addValidation("SOption", "req", "Please select an Option");
            frmvalidator.addValidation("CIDate", "req", "Please select In Date");
            frmvalidator.addValidation("CODate", "req", "Please select Out Date");
//name aka venuvata id eka unath use karanna puluvan...
        </script>


<?php endwhile;
else:
    echo "<p>No Content Found Here... this is gallery</p>";
endif;

?>
        

<?php include 'content.php'; ?>
<?php get_footer(); ?>