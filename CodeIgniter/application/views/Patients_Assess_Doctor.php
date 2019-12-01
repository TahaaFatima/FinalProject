<section class="reg-section">
   <div class="container">
        <div class="main-heading">
            <h5 class="modal-title text-center text-dark mb-4">PATIENT'S ASSESSMENT FORM</h5>
        </div>
        <div class="reg-form-div">
            <form class="reg-form" method="post">
                <div>
                    <label class="col-form-label" for="weight">Weight</label>
                    <input class="form-control" type="text" name="Weight" value="<?php echo $doctors_App_data->weight ?>" readonly>
                </div>
                <div>
                    <label class="col-form-label" for="ailments">Previous Ailments</label>
                    <input class="form-control" type="text" name="ailments"value="<?php echo $doctors_App_data->previous_ailments ?>" readonly>
                </div>
                <div>
                    <label class="col-form-label" for="health">Current health concerns</label>
                    <input class="form-control" type="text" name="health_concern"value="<?php echo $doctors_App_data->current_health_concerns ?>" readonly>
                </div>
                <div>
                    <label class="col-form-label" for="medicines">List your current medicines</label>
                    <input class="form-control" type="text" name="medicines"value="<?php echo $doctors_App_data->current_medicines ?>" readonly>
                </div>
                <div>
                    <label class="col-form-label" for="Allergies">Do you suffer from any allergies? List in detail.</label>
                    <textarea name="allergies" class="form-control" cols="30" rows="5" readonly><?php echo $doctors_App_data->allergies ?></textarea>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="exercise">How often do you exercise?</label>
                    <input class="form-control" type="text" name="medicines"value="<?php echo $doctors_App_data->exercise ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Alcohol">Alcohol Consumption</label>
                    <input class="form-control" type="text" name="medicines" value="<?php echo $doctors_App_data->alcohol_consumption ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Caffeine">Caffeine Consumption</label>
                    <input class="form-control" type="text" name="medicines"value="<?php echo $doctors_App_data->caffiene_consumption ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Smoke">Smoke Habits</label>
                    <input class="form-control" type="text" name="medicines"value="<?php echo $doctors_App_data->smoke_habits ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="Sleeping">Sleeping Hours</label>
                    <input class="form-control" type="text" name="medicines"value="<?php echo $doctors_App_data->sleeping_hours ?>" readonly>
                </div>
                <div>
                    <label class="col-form-label" for="other_details">Include others details regarding medical history</label>
                    <textarea name="other_details" class="form-control" cols="30" rows="7" readonly><?php echo $doctors_App_data->medical_history ?></textarea>
                </div>
            </form>    
        </div>
   </div>
</section>    