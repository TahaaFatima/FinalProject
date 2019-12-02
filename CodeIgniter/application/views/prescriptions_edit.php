<section class="prescription-section">
    <div class="container">
        <div class="reg-form-div prescrition-form-div">
        <?php foreach($prescription as $prescriptions){
            ?>
            <form method="post" class="reg-form reg-detail-pt">
                <div class="main-heading">      
                    <h5 class="modal-title text-center text-dark mb-4">Prescriptions</h5>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="prescriptions" cols="10" rows="10"><?php echo $prescriptions->prescription ?></textarea>
                </div>
                <div class="col-20">
                    <input class="btn btn-danger" type="submit" name="edit-prescrition" value="Edit">
                </div>
            </form>
            <?php
                }
            ?>    
        </div>
    </div>
</section>