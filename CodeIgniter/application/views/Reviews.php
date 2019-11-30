<section class="profile-section">
    <div class="profile-doctors-details">
        <div class="main-heading">
            <h5 class="modal-title text-center text-dark mb-4">My Reviews</h5>
        </div>
        <div class="doctors-my-detals">
            <div class="doctors-detail">
                <?php foreach($doc_details as $doc_detail){
                ?>
                <div class="doctors-profile">
                    <img src="../assets/images/doctors-profile.png" alt="doctors-profile">
                </div>
                <div class="doctors-name">
                    <p><?php echo $doc_detail->full_name; ?></p>
                </div>
                <div class="doctors-rating">
                    <div class="rateYo rating"></div>
                </div>
                <div class="doctors-speciality">
                    <p><?php echo $doc_detail->department; ?></p>
                </div>
                <?php
                }
                ?>
                
            </div>
            <div class="reg-form-div">
                <form method="post" class="reg-form reg-detail-pt">
                    <div class="form-group">
                        <input type="hidden" name="hidden-rate" class="hidden-rating">
                        <label class="col-form-label" for="Review">Your Reviews</label>
                        <textarea class="form-control" name="yourReview" cols="10" rows="10"></textarea>
                    </div>
                    <div class="col-20">
                        <input class="btn btn-danger" type="submit" name="submit-review" value="send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>