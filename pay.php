<?php
if ($_SESSION['user']['total'] != ""){
  header("Location: index.php");
}
?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <script type="text/javascript">
            
                $(document).ready(function(){
                
                    $('#radio').change(function(){
                        selected_value = $("input[name='check']:checked").val();
                        if(selected_value == "visa"){
                           document.getElementById("for").value = 4444;
                         
                        } else if (selected_value == "master"){
                            document.getElementById("for").value = 5555;
                        } else if (selected_value == "american"){
                            document.getElementById("for").value = 6666;
                        } 
                    });
                
                });
            
            </script>

<?php require_once("template/generalHeader.php"); ?>
    <style type="text/css">
          <?php require_once("css/header.css"); ?>
          <?php require_once("css/pay.css"); ?>
          <?php require_once("css/footer.css"); ?>
    </style>
    <?php 
    if(!isset($_SESSION['user'])){
      header("Location: index.php");
    }
    $total = $_SESSION['user']['total'];
    ?>
    <?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST' ) {
      echo "<script type='text/javascript'>
        alert('Thank you for joining in the picnic');
          window.location.replace(\"http:index.php\");
          </script>";

    }

    ?>
  <div id="card">
    <div id="radio">
      <ul>
      <li><input type="radio" id="c1" name="check"  checked="checked" value="visa" />
      <label for="c1"><img src="icons/visa.png"  /></label></li>
      <li><input type="radio" id="c2" name="check" value="master" />
      <label for="c2"><img src="icons/master.png" /></label></li>
      <li><input type="radio" id="c3" name="check" value="american" />
      <label for="c3"><img src="icons/american.png" /></label></li>
      </ul>
    </div>
    <br>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div id="main">
        Name on card<br>
        <input type="text" name="name" id="name">
        <br>
        Card number<br>
        <input type="number" name="for" id="for" value="4444" readonly style="width: 26%;">
        <input type="number" name="number" id="number" style="width: 72%;">
        <br>
        Expiry date<br>
        <input type="text" name="date" id="date" placeholder="MM/YY">
         </div>
        <button type="submit"= id="go" name="go">Pay <?php echo "($total";?>$)</button>
      </form>
    </div>

    <?php require_once("template/footer.php"); ?>