<?php
        $link = mysqli_connect("localhost", "root", "", "test");
        $result = mysqli_query($link, "SELECT * from users WHERE flag = 1");
        $result2 = mysqli_query($link, "SELECT * from users WHERE flag = 1");
        $num_results = mysqli_num_rows($result);

        if ($num_results > 0){

          ?>
        <div class="popup-box top-change">
            <p>Who Need The Help?</p>
          <?php while($row = mysqli_fetch_array($result))
          {
            ?>
            <p style="font-weight: bold;"><?=$row['name'];?></p>

            <?php
          }
          ?>
          <a class="waves-effect waves-light red darken-4 btn" id="dismiss">DISMISS</a>
        </div>
        <?php
      }else if($num_results==0){
?>
        <div class="popup-box top-none">
          <p></p>
        </div>
  <?php
      }
        ?>

<script>

$(document).ready(function(){
  $("#dismiss").on('click',function(){
    $.ajax({
        method: "POST",
        url: "/thesis/public/ajax/dismiss",
        data:{},

    });
  });
});


</script>
