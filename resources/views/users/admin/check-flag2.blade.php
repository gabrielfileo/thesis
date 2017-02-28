
<?php
        $link = mysqli_connect("localhost", "root", "test12345", "test");
        $result = mysqli_query($link, "SELECT * from users WHERE flag = 1");
        $result2 = mysqli_query($link, "SELECT * from users WHERE flag = 1");

        while($row = mysqli_fetch_array($result))
        {
          if($row['flag']>=1){
          ?>
        <div class="popup-box top-change">
          <?php while($row2 = mysqli_fetch_array($result2))
          {
            ?>
            <p><?=$row2['name'];?></p>
            <button type="button" id="dismiss">DISMISS</button>
            <?php
          }
          ?>
        </div>
        <?php
      }else if($row['flag']==0){
?>
        <div class="popup-box top-none">
          <p><?=$row['name'];?></p>
        </div>
  <?php
      }
    }
        ?>

<script>

$(document).ready(function(){
  $("#dismiss").on('click',function(){
    alert("cobacoba");
    $.ajax({
        method: "POST",
        url: "/thesis/publicajax/dismiss",
        data:{},

    });
  });
});


</script>
