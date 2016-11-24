//head

//header

    <div id="content">

        <div class="box-admin">
            <div class="box-title">
                <h2>HELP</h2>
            </div>
            <blockquote>
                The Guide
            </blockquote>

            <p style="margin-left:20px; text-align:left;">Documentation</p>

        </div>
    </div>

    //sidebar
    
    //footer
    </div>

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
