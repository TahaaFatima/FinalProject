<section class="departments">
		<div class="departments-1 py-lg-5">
			<div class="container py-5">
				<div class="text-center wthree-title pb-sm-5 pb-3">
					<h3 class="w3l-sub text-white">DEPARTMENTS</h3>
					<h4 class="sub-title py-3 text-white">Find doctor by health concern!</h4>
                </div>
                <div class="row py-lg-5">
                <?php 
                foreach($department_ids as $department){
                ?>
                        <div class="col-sm-4 w3-ab">
                            <div class="w3-ab-grid text-center">
                                <div class="w3-aicon p-4">
                                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                    <h4 class="my-3 text-capitalize text-white"><?php echo $department->department;  ?></h4>
                                </div>
                            </div>
                        </div>		
                        <?php 
                }
                ?>    
                </div>
			</div>
		</div>
	</section>
?>