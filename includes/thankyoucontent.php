<main>
    <h1 class="page-title">Thank you!</h1>

    <div class="personality-assessment-form">
        <div class="thankyoudisplay">
            <h2 class="display-4">This is what you submitted</h2>
            <p class="text-center">First Name: <?php echo $_POST["firstname"]?></p>
            <p class="text-center">Last Name: <?php echo $_POST["lastname"]?></p>
            <p class="text-center">Email: <?php echo $_POST["email"]?></p>
            <p class="text-center">Age: <?php echo $_POST["age"]?></p>
            <p class="text-center">License: <?php echo $_POST["licenseLevel"]?></p>
            <p class="text-center">About You: <?php echo $_POST["descriptionuser"]?></p>
            <p class="text-center">Gender: <?php echo $_POST["genderChoice"]?></p>

<!--            Reference: https://stackoverflow.com/questions/16562577/how-can-i-make-a-button-redirect-my-page-to-another-page-->
            <div class="col text-right">
                <button onclick="window.location.href='../whitblog'"  class="btn btn-primary">Resubmit</button>
            </div>
        </div>
    </div>
</main>