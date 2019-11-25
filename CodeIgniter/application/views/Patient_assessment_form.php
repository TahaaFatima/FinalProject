<section class="reg-section">
    <div class="main-heading">
        <h5 class="modal-title text-center text-dark mb-4">PATIENT'S ASSESSMENT FORM</h5>
    </div>
    <div class="reg-form-div">
        <form class="reg-form" method="post">
            <div>
                <label class="col-form-label" for="weight">Weight</label>
                <input class="form-control" type="text" name="Weight" >
                <?php echo form_error('Weight', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label class="col-form-label" for="ailments">Previous Ailments</label>
                <input class="form-control" type="text" name="ailments" >
                <!-- <input class="form-check" type="text" name="ailments[]" value="High Blood Pressure"><label for="Ailments">High Blood Pressure</label>
                <input class="form-check" type="text" name="ailments[]" value="Low Blood Pressure"><label for="Ailments">Low Blood Pressure</label>
                <input class="form-check" type="text" name="ailments[]" value="Diabetes"><label for="Ailments">Diabetes</label>
                <input class="form-check" type="text" name="ailments[]" value="Lung Diseases"><label for="Ailments">Lung Diseases</label>
                <input class="form-check" type="text" name="ailments[]" value="Liver Diseases"><label for="Ailments">Liver Diseases</label>
                <input class="form-check" type="text" name="ailments[]" value="Asthma"><label for="Ailments">Asthma</label>
                <input class="form-check" type="text" name="ailments[]" value="Kidney Diseases"><label for="Ailments">Kidney Diseases</label>
                <input class="form-check" type="text" name="ailments[]" value="Neurological Problems"><label for="Ailments">Neurological Problems</label>
                <input class="form-check" type="text" name="ailments[]" value="Thyroid"><label for="Ailments">Thyroid</label>
                <input class="form-check" type="text" name="ailments[]" value="Cancer"><label for="Ailments">Cancer</label> -->
                <?php echo form_error('ailments', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label class="col-form-label" for="health">Current health concerns</label>
                <input class="form-control" type="text" name="health_concern" >
                <?php echo form_error('health_concern', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label class="col-form-label" for="medicines">List your current medicines</label>
                <input class="form-control" type="text" name="medicines" >
                <?php echo form_error('medicines', '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label class="col-form-label" for="Allergies">Do you suffer from any allergies? List in detail.</label>
                <textarea name="allergies" class="form-control" cols="30" rows="5"></textarea>
                <?php echo form_error('allergies', '<div class="error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="exercise">How often do you exercise?</label>
                <input class="form-radio" type="radio" name="exercise" value="never"><label for="exercise">Never</label> 
                <input class="form-radio" type="radio" name="exercise" value="1-2days-week"><label for="exercise">1 – 2 days a week</label>
                <input class="form-radio" type="radio" name="exercise" value="3-4days-week"><label for="exercise">3 – 4  days a week</label> 
                <input class="form-radio" type="radio" name="exercise" value="1-2days-months"><label for="exercise">1 – 2 days a month</label> 
                <?php echo form_error('exercise' , '<div class="error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="Alcohol">Alcohol Consumption</label>
                <input class="form-radio" type="radio" name="Alcohol" value="Don’t Drink"><label for="Alcohol">Don’t Drink</label> 
                <input class="form-radio" type="radio" name="Alcohol" value="1-2Glasses/day"><label for="Alcohol">1 - 2 Glasses/day</label>
                <input class="form-radio" type="radio" name="Alcohol" value="3-5 Glasses/day"><label for="Alcohol">3 - 5 Glasses/day</label> 
                <input class="form-radio" type="radio" name="Alcohol" value="5+ Glasses/day"><label for="Alcohol">5+ Glasses/day</label> 
                <?php echo form_error('Alcohol' , '<div class="error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="Caffeine">Caffeine Consumption</label>
                <input class="form-radio" type="radio" name="Caffeine" value="Don’t Drink"><label for="Caffeine">I avoid completely.</label> 
                <input class="form-radio" type="radio" name="Caffeine" value="1-2 cups/day"><label for="Caffeine">1 - 2 cups/day</label>
                <input class="form-radio" type="radio" name="Caffeine" value="3-5 cups/day"><label for="Caffeine">3 - 5 cups/day</label> 
                <input class="form-radio" type="radio" name="Caffeine" value="5+ cups/day"><label for="Caffeine">5 + cups/day</label> 
                <?php echo form_error('Caffeine' , '<div class="error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="Smoke">Smoke Habits</label>
                <input class="form-radio" type="radio" name="Smoke" value="No"><label for="Smoke">No</label> 
                <input class="form-radio" type="radio" name="Smoke" value="0-1 Pack/day"><label for="Smoke">0 - 1 Pack/day</label>
                <input class="form-radio" type="radio" name="Smoke" value="2-3 Pack/day"><label for="Smoke">2 - 3 Pack/day</label> 
                <input class="form-radio" type="radio" name="Smoke" value="3+ Pack/day"><label for="Smoke">3 + Pack/day</label> 
                <?php echo form_error('Smoke' , '<div class="error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="Sleeping">Sleeping Hours</label>
                <input class="form-radio" type="radio" name="Sleeping" value="Less than 8 hours"><label for="Sleeping">Less than 8 hours</label> 
                <input class="form-radio" type="radio" name="Sleeping" value="8-12 hours"><label for="Sleeping">8 - 12 hours</label>
                <input class="form-radio" type="radio" name="Sleeping" value="More than 12 hours"><label for="Sleeping">More than 12 hours</label>
                <?php echo form_error('Sleeping' , '<div class="error">', '</div>'); ?>
            </div>
            <div>
                <label class="col-form-label" for="other_details">Include others details regarding medical history</label>
                <textarea name="other_details" class="form-control" cols="30" rows="7"></textarea>
                <?php echo form_error('other_details', '<div class="error">', '</div>'); ?>
            </div>
            <div class="button-submit">
                <input class="form-control button" type="submit" name="assess_submit" value="Submit">
            </div>
            <div class="login-link">
                <span class="login-span">Already on Revitalize ? </span><a href="<?php echo site_url('Login') ?>">Log in</a>
            </div>
        </form>    
    </div>
</section>    