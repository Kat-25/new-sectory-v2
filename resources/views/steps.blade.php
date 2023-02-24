<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Certificate</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Personal Information</strong></li>
                                <li id="personal"><strong>Educational Background</strong></li>
                                <li id="payment"><strong>Family Background</strong></li>
                                <li id="payment"><strong>Contanct Information</strong></li>
                                <li id="confirm"><strong>Upload Evidence</strong></li>
                            </ul>
                            
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2>
                                    <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="fname" placeholder="Last Name"/>
                                    <input type="text" name="fname" placeholder="Middile Name"/>
                                    <input type="text" name="fname" placeholder="Suffix"/>
                                    <select id="" class="form-control mb-3">
                                            <option selected>Gender...</option>
                                            <option>male</option>
                                            <option>female</option>
                                    </select> 
                                    <input type="text" name="fname" placeholder="Birth Date"/>
                                    <input type="text" name="fname" placeholder="Birth Place"/>
                                    <input type="text" name="fname" placeholder="Age"/>
                                    <select id="" class="form-control mb-3">
                                            <option selected>Civil Status..</option>
                                            <option>Married</option>
                                            <option>Single</option>
                                            <option>Widowed</option>
                                    </select> 
                                    <input type="text" name="fname" placeholder="Occupation"/>
                                    <input type="text" name="fname" placeholder="Blood Type"/>
                                    <input type="text" name="fname" placeholder="Religion"/>
                                    <input type="text" name="fname" placeholder="Weight(kg)"/>
                                    <input type="text" name="fname" placeholder="Height(cm)"/>
                                    <input type="text" name="fname" placeholder="Citizenship"/>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Educational Background</h2>
                                    <h6 class="">Primary School</h6>
                                    <input type="text" name="fname" placeholder="Name of School"/>
                                    <input type="text" name="fname" placeholder="Year Graduated"/>
                                    <h6 class="">Secondary School</h6>
                                    <input type="text" name="fname" placeholder="Name of School"/>
                                    <input type="text" name="fname" placeholder="Year Graduated"/>
                                    <h6 class="">Tertiary School</h6>
                                    <input type="text" name="fname" placeholder="Name of School"/>
                                    <input type="text" name="fname" placeholder="Year Graduated"/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Family Background</h2>
                                    <h6 class="">Father's Name</h6>
                                    <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                    <input type="text" name="fname" placeholder="Middle Name"/>
                                    <input type="text" name="fname" placeholder="Suffix"/>
                                    <h6 class="">Mother's (Maiden Name)</h6>
                                    <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                    <input type="text" name="fname" placeholder="Middle Name"/>
                                    <input type="text" name="phno_2" placeholder="Suffix"/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Contact Information</h2>
                                    <input type="email" name="fname" placeholder="Permanent Address"/>
                                    <input type="text" name="fname" placeholder="Present Address"/>
                                    <input type="password" name="phno_2" placeholder="Contact number"/>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="next" class="next action-button" value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Upload Evidence</h2>
                                    <div class="radio-group">
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Example file input</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                </div> 
                                        </div>
                                        <div class="col-3">
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                <input type="button" name="make_payment" class="next action-button" value="Confirm"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>"Please wait for the text confirmation about the status of your request."</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>