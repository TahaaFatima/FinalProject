<section class="contact-section">
    <div class="contact-parentdiv">
        <div class="contact-us-top">
            <div class="contact-us-head">
                <div class="contact-us-heading">
                    <h2>Contact Us</h2>
                </div>
                <div class="contact-us-para">
                    <p>Feel Free to drop us a line below</p>
                </div>
            </div>
            <div class="top-image">
                <img src="../assets/images/contactus-img-2.jpg" alt="contactus-img-2">
            </div>
        </div>
        <div class="contact-us-bottom">
            <div class="reg-form-div">
                <form class="reg-form contact-form" method="post">
                    <div>
                        <label class="col-form-label white-color"  for="Name">Full Name</label>
                        <input class="form-control" type="text" name="Name" >
                        <?php echo form_error('Name' , '<div class="error">', '</div>'); ?>
                    </div>
                    <div>
                        <label class="col-form-label white-color"  for="Age">Email</label>
                        <input class="form-control" type="text" name="Age" >
                        <?php echo form_error('Age' , '<div class="error">', '</div>'); ?>

                    </div>
                    <div>
                        <label class="col-form-label white-color"  for="Gender">Phone</label>
                        <input class="form-control" type="text" name="Gender" >
                        <?php echo form_error('Gender' , '<div class="error">', '</div>'); ?>

                    </div>
                    <div>
                        <label class="col-form-label white-color"  for="Message">Message</label>
                        <textarea class="form-control" type="number" name="Message"></textarea>
                        <?php echo form_error('Message' , '<div class="error">', '</div>'); ?>

                    </div>
                    <div class="button-submit contact-submit">
                        <input class="form-control button" type="submit" name="Submit" value="Submit">
                    </div>
                </form>    
            </div>
        </div>
    </div>
</section>