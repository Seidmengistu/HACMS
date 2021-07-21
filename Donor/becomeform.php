<?php

include('includes/config.php');
?>
<div class="row">
    <div class="col-md-6 ">
        <div class="x_panel">

            <div class="x_content" style="background-image:url('includes/images/blood-donor.jpg')">
                <br />
                <form class="form-label-left input_mask" action="Donor/become-donarinc.php" method="POST">

                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="text" name='fullname' class="form-control has-feedback-left"
                            placeholder="First Name" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="text" name='age' class="form-control" id="inputSuccess3" placeholder="age"
                            required="required">

                    </div>

                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input name="emailid" type="text" class="form-control has-feedback-left"
                            id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Email"
                            class="required">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>


                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="text" name="mobileno" required="required" class="form-control" id="inputSuccess5"
                            placeholder="Phone">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Gender<span style="color:red">*</span></label>
                        <div class="col-md-9 col-sm-9 "><select name="gender" class="form-control" required="required">
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Blood Group<span style="color:red">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 "><select name="bloodgroup" class="form-control"
                                required="required">
                                <?php $sql = "SELECT * from bloodgroup";
                                    $query = $dbh -> prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);

                                    $cnt=1;
                                    if($query->rowCount() > 0)
                                    {
                                    foreach($results as $result)
                                    {               ?>
                                <option value="<?php echo htmlentities($result->BloodGroup);?>">
                                    <?php echo htmlentities($result->BloodGroup);?></option>
                                <?php }} ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Address<span style="color:red">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="date-picker form-control" name="address" type="text"
                                required="required"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Message<span style="color:red">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 ">
                            <textarea class="date-picker form-control" name="message" type="text"
                                required="required"></textarea>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9  offset-md-3">

                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
    </form>