<form method="post">
    <div>
        <label for="Name">Name</label>
        <input type="text" name="Name" value="<?php  echo set_value('Name'); ?>">
        <?php echo form_error('Name'); ?>
    </div>
    <div>
        <label for="Age">Age</label>
        <input type="text" name="Age" value="<?php echo set_value('Age'); ?>">
        <?php echo form_error('Age'); ?>
    </div>
    <div>
        <label for="Gender">Gender</label>
        <input type="radio" name="Gender" value="female"> Female
        <input type="radio" name="Gender" value="male"> Male
        <?php echo form_error('Gender'); ?>
    </div>
    <div>
        <label for="FatherName">Father Name</label>
        <input type="text" name="FatherName" value="<?php echo set_value('FatherName'); ?>">
        <?php echo form_error('FatherName'); ?>
    </div>
    <div>
        <label for="Lisence">Lisence Number</label>
        <input type="text" name="Lisence" value="<?php echo set_value('Lisence'); ?>">
        <?php echo form_error('Lisence'); ?>
    </div>
    <div>
        <label for="Type">Type</label>
        <input type="radio" name="Type" value="Medical">Medical 
        <input type="radio" name="Type" value="Dental">Dental 
        <?php echo form_error('Type'); ?>
    </div>
    <div>
        <label for="Location">Location</label>
        <select  name="Location">
            <option value="none">Choose City</option>
            <option value="<?php echo $area_ids[0] ?>">Abidabad</option>
            <option value="<?php echo $area_ids[1] ?>">Afridi Colony</option>
            <option value="<?php echo $area_ids[2] ?>">Bismillah Chowk</option>
            <option value="<?php echo $area_ids[3] ?>">Kumhar Colony</option>
            <option value="<?php echo $area_ids[4] ?>">Delhi Colony</option>
            <option value="<?php echo $area_ids[5] ?>">Dhoraji Colony</option>
            <option value="<?php echo $area_ids[6] ?>">Gujrat Colony</option>
            <option value="<?php echo $area_ids[7] ?>">Gulshan-e-Ghazi</option>
            <option value="<?php echo $area_ids[8] ?>">Islamnagar</option>
            <option value="<?php echo $area_ids[9] ?>">Ittehad Town</option>
            <option value="<?php echo $area_ids[10] ?>">Kokan Colony</option>
            <option value="<?php echo $area_ids[11] ?>">Muhajir Camp</option>
            <option value="<?php echo $area_ids[12] ?>">Muslim Mujahid Colony</option>
            <option value="<?php echo $area_ids[13] ?>">Nai Abadi</option>
            <option value="<?php echo $area_ids[14] ?>">Naval Colony</option>
            <option value="<?php echo $area_ids[15] ?>">Rasheedabad</option>
            <option value="<?php echo $area_ids[16] ?>">Saeedabad</option>
            <option value="<?php echo $area_ids[17] ?>">Turk Colony</option>
            <option value="<?php echo $area_ids[18] ?>">Kumhar colony</option>
            <option value="<?php echo $area_ids[19] ?>">Abdullah Goth</option>
            <option value="<?php echo $area_ids[20] ?>">Cattle Colony</option>
            <option value="<?php echo $area_ids[21] ?>">Gaghar</option>
            <option value="<?php echo $area_ids[22] ?>">Green Park City</option>
            <option value="<?php echo $area_ids[23] ?>">Gulshan-e-Hadeed</option>
            <option value="<?php echo $area_ids[24] ?>">Gulshan-e-Hadeed</option>
            <option value="<?php echo $area_ids[25] ?>">Landhi Colony</option>
            <option value="<?php echo $area_ids[26] ?>">Muzaffarabad</option>
            <option value="<?php echo $area_ids[27] ?>">Quaidabad</option>
            <option value="<?php echo $area_ids[28] ?>">Razzaqabad</option>
            <option value="<?php echo $area_ids[29] ?>">Rehri Goth</option>
            <option value="<?php echo $area_ids[30] ?>">Shah Latif Town</option>
            <option value="<?php echo $area_ids[31] ?>">Gulshan Town</option>
            <option value="<?php echo $area_ids[32] ?>">Sindh Baloch Cooperative Housing Society</option>
            <option value="<?php echo $area_ids[33] ?>">Delhi Mercantile Society</option>
            <option value="<?php echo $area_ids[34] ?>">Essa Nagri</option>
            <option value="<?php echo $area_ids[35] ?>">Gulshan-e-Iqbal I</option>
            <option value="<?php echo $area_ids[36] ?>">Gulshan-e-Iqbal II</option>
            <option value="<?php echo $area_ids[37] ?>">Gulzar-e-Hijri</option>
            <option value="<?php echo $area_ids[38] ?>">Gulistan-e-Johar</option>
            <option value="<?php echo $area_ids[39] ?>">Abbas Town</option>
            <option value="<?php echo $area_ids[40] ?>">Kokan Cooperative Housing Society</option>
            <option value="<?php echo $area_ids[41] ?>">Jamali Colony</option>
            <option value="<?php echo $area_ids[42] ?>">Metroville Colony</option>
            <option value="<?php echo $area_ids[43] ?>">Pehlwan Goth</option>
            <option value="<?php echo $area_ids[44] ?>">P.I.B. Colony</option>
            <option value="<?php echo $area_ids[45] ?>">Safoora Goth</option>
            <option value="<?php echo $area_ids[46] ?>">Shanti Nagar</option>
            <option value="<?php echo $area_ids[47] ?>">Sachal Goth</option>
            <option value="<?php echo $area_ids[48] ?>">KESC Society</option>
            <option value="<?php echo $area_ids[49] ?>">Sherpao Colony</option>
            <option value="<?php echo $area_ids[50] ?>">Steel Town</option>
            <option value="<?php echo $area_ids[51] ?>">Shah Bhitaie Town</option>
            <option value="<?php echo $area_ids[52] ?>">Neighbourhoods of Jamshed Town</option>
            <option value="<?php echo $area_ids[53] ?>">Abyssinia Lines</option>
        </select>
        <?php echo form_error('Location'); ?>
    </div>
    <div>
        <label for="Department">Department</label>
        <select name="Department">
            <option value="<?php echo $department_ids[0] ?>">Cardiologist</option>
            <option value="<?php echo $department_ids[1] ?> ">Dermatologist </option>
            <option value="Urologist">Urologist</option>
            <option value="audi">Audi</option>
        </select>
        <?php echo form_error('Department'); ?>
    </div>
    <div>
        <label for="Email">Email Address</label>
        <input type="email" name="Email_Address" value="<?php echo set_value('Email_Address'); ?>">
        <?php echo form_error('Email_Address'); ?>    
    </div>
    <div>
        <label for="Password">Password</label>
        <input type="password" name="Password" value="<?php echo set_value('Password'); ?>">
        <?php echo form_error('Password'); ?>
    </div>
    <div>
        <label for="Confirm_Password">Confirm Password</label>
        <input type="password" name="Confirm_Password" value="<?php echo set_value('Confirm_Password'); ?>">
        <?php echo form_error('Confirm_Password'); ?>
    </div>
    <div>
        <input type="submit" name="Submit" value="Submit">
    </div>
</form>
<a href="<?php echo site_url('Login') ?>">Log in</a>