<section class="prescription-section">
    <div class="container">
        <div class="reg-form-div prescrition-form-div">
            <form method="post" class="reg-form reg-detail-pt">
                <div class="main-heading">      
                    <h5 class="modal-title text-center text-dark mb-4">Prescriptions</h5>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="prescriptions" cols="10" rows="10"></textarea>
                </div>
                <div class="head-pris">
                    <div class="col-20">
                        <input class="btn btn-danger" type="submit" name="submit-prescrition" value="send">
                    </div>
                    <div class="right">
                        <a class="back btn btn-danger" href="<?php echo site_url('doctors-appointments') ?>">Back</a>
                    </div>
                </div> 
           </form>
        </div>
    </div>
</section>