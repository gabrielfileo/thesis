<html>
<?php include '_include/head.php';?>

<?php include '_include/header.php';?>

<div id="content">

        <div class="box-account">
            <div class="box-title">
                <h2>Account Setting</h2>
            </div>
            <blockquote>
                You'll be automatically logged out if the password changing was success!. Leave New Password & Confirmation Blank if you don't want to change your password.
            </blockquote>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input disabled value="admin" id="disabled" type="text" class="validate" style="margin-left:0px; width:100%">
                            <label for="disabled">NIK</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input value="Administrator" id="first_name2" type="text" class="validate" style="margin-left:0px; width:100%">
                            <label class="active" for="first_name2" style="font-size:14px;">Full Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Current Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">New Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Confirm Password</label>
                        </div>
                    </div>

                    <form action="#">
                        <p>
                            <input type="checkbox" id="test5" />
     						<label for="test5">I agree with my password change.</label>
                        </p>
                    </form>

                    <div class="row">
                        <a class="waves-effect waves-light btn red darken-4"><i class="material-icons left">done</i>Save</a>
                        <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">replay</i>Reset</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
<?php include '_include/sidebar.php';?>

<?php include '_include/footer.php';?>


</body>
<script>
    $(document).ready(function() {
        $(".button-collapse ").sideNav();
        $('.collapsible').collapsible();
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

    $(document).ready(function() {
        $('select').material_select();
    });
	 $(document).ready(function() {
    Materialize.updateTextFields();
  });
</script>

</html>
