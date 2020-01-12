<main>
    <h1 class="page-title">Personality Assessment</h1>

    <div class="personality-assessment-form">
        <form method="POST" action="./thankyou.php" name="personalityform" onsubmit="return userSubmit();">
            <div class="form-group row">
                <label for="firstNameInput" class="col-sm-3 col-form-label col-form-label-lg">First Name</label>
                <input type="text" name="firstname" class="form-control-lg col-8" id="firstNameInput" placeholder="John">
            </div>

            <div class="form-group row">
                <label for="lastNameInput" class="col-sm-3 col-form-label col-form-label-lg">Last Name</label>
                <input type="text" name="lastname" class="form-control-lg col-8" id="lastNameInput" placeholder="Doe">
            </div>

            <!-- oninvalid attribute reference: https://stackoverflow.com/questions/47724697/how-to-change-default-message-validation-on-bootstrap -->
            <div class="form-group row">
                <label for="emailInput" class="col-sm-3 col-form-label col-form-label-lg">Email Address</label>
                <input type="email" name="email" class="form-control-lg col-8"  oninvalid="this.setCustomValidity('Please Enter a Valid Email Address')" id="emailInput" placeholder="johndoe@example.com">
            </div>

            <!-- oninvalid attribute reference: https://stackoverflow.com/questions/47724697/how-to-change-default-message-validation-on-bootstrap -->
            <div class="form-group row">
                <label for="ageInput" class="col-sm-3 col-form-label col-form-label-lg">Age</label>
                <input type="number" name="age" class="form-control-lg col-8" oninvalid="this.setCustomValidity('Please Enter a Valid Age')" id="ageInput" placeholder="18">
            </div>

            <div class="form-group row">
                <label for="academicHolder" class="col-sm-3 col-form-label col-form-label-lg">License Holder</label>
                <select class="form-control-lg col-8" id="academicHolder" name="licenseLevel">
                    <option>None</option>
                    <option>G1</option>
                    <option>G2</option>
                    <option>G</option>
                </select>
            </div>

            <div class="form-group row">
                <label for="describeInput" class="col-sm-3 col-form-label col-form-label-lg">Describe yourself</label>
                <textarea class="form-control-lg col-8" id="describeInput" name="descriptionuser" rows="10"></textarea>
            </div>

            <div class="gender-selection">
                <div class="form-check-inline">
                    <label class="form-check-label col-form-label-lg">
                        <input type="radio" class="form-check-input" name="genderChoice" value="Male">Male
                    </label>
                </div>

                <div class="form-check-inline">
                    <label class="form-check-label col-form-label-lg">
                        <input type="radio" class="form-check-input" name="genderChoice" value="Female">Female
                    </label>
                </div>
            </div>

            <div class="col text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
</main>