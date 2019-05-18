<?php
		
	if ($_GET['picnic']){
		$ref = $_GET['picnic'];
		$cookie_name = "page";
		$cookie_value = $ref;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    	$_COOKIE['page'] = $ref;
    	
	}//else {
		//header("Location: index.php");
	//}
?>
<?php require_once("template/generalHeader.php"); ?>
    <style type="text/css">
          <?php require_once("css/header.css"); ?>
          <?php require_once("css/book.css"); ?>
          <?php require_once("css/footer.css"); ?>
    </style>
<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    	if (!isset($_SESSION['user'])){
    	echo "<script type='text/javascript'>
        alert('You must be logged in to book for a picnic.');
        	window.location.replace(\"http:signup.php\");
        	</script>";
    	}
    	$dbhost="localhost";
		$dbname="c59_Noodles";
		$dbuser="c59_Noodles";
		$dbpass="comp334!";
		$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
		if(!$pdo ) {
			die("Could not connect to database");
		}
		$ref = $_COOKIE['page'];
		$str = "SELECT `price` FROM `picnic` WHERE `ref` = '$ref'";
		$result = $pdo->query($str);
		$price = 0;
		while ($row = $result->fetch()){
			$price = $row['price'];
		}
    	$num = $_POST['people'];
    	$total = $num * $price;
    	if ($total > 0){
    		$_SESSION['user']['total'] = $total;
    		$x = $_SESSION['user']['total'];
    		echo "<script type='text/javascript'>
        	var e = confirm('Total: $total\\nPress OK to continue');
        	if (e == true){
        	window.location.replace(\"http:pay.php\");
    		} 
    		
        	</script>";
    	}
 
}
    ?>
    
    
    <div id="main">
   		<table id="pic-table">
            <thead>
                <tr>
                	<th>Reference number</th>
                    <th>Place</th>
                    <th>Date</th>
                    <th>Departure time</th>
                    <th>Departure Location</th>
                    <th>Arrival time</th>
                    <th>Return time</th>
                    <th>Price/1</th>
                    <th>Transportaion</th>
                </tr>
            </thead>
            <tbody>
            	<?php
            		$dbhost="localhost";
				    $dbname="c59_Noodles";
				    $dbuser="c59_Noodles";
				    $dbpass="comp334!";
				    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);
				    if(!$pdo ) {
				        die("Could not connect to database");
				    }
					$str = "SELECT * FROM picnic WHERE ref = '$ref'";
			        $result = $pdo->query($str);
			        $price = 0;
			        while ($row = $result->fetch()){
			        	$price = $row['price'];
			            echo "<tr>";
			            echo "<td>#".$row['ref']."</td>";
			            echo "<td>".$row['place']."</td>";
			            echo "<td>".$row['date']."</td>";
			            echo "<td>".$row['departure']."</td>";
			            echo "<td>".$row['meet']."</td>";
			            echo "<td>".$row['arrival']."</td>";
			            echo "<td>".$row['back']."</td>";
			            echo "<td>".$row['price']."$</td>";
			            echo "<td>".$row['transportation']."</td>";
			            echo "</tr>";
			        }
			        $str1 = "SELECT * FROM `condition` WHERE `ref num` = '$ref'";
				    $result1 = $pdo->query($str1);
				    while ($row = $result1->fetch()){
				      $capacity = $row['capacity'];
				      $child = $row['children'];
				      $dis = $row['disability'];
				      $baby = $row['baby'];
				    }

			         $str2 = "SELECT `act id` as `id` FROM has WHERE `pic id` = '$ref'";
                     $result2 = $pdo->query($str2);
                     $act= array();
                     while ($row = $result2->fetch()){
                        array_push($act,$row['id']);
                     } 
                      $str3 = "SELECT `food id` as `id` FROM serve WHERE `pic id` = '$ref'";
                     $result3 = $pdo->query($str3);
                     $food= array();
                     while ($row = $result3->fetch()){
                        array_push($food,$row['id']);
                     } 
				?>
            </tbody>
        </table>
        <br><br>
        	<div class="row" style="text-align: center">
        		<div class="column">
	        		<h2>Other Info</h2><br>
	            	<label>Capacity: </label> <?php echo $capacity; ?>
	            	<br>
	            	<label>Children: </label> 
	            	<?php if ($child == 1) {  
	            		echo '<img src="icons/yes.png">'  ; 
	            	} else { 
	            		echo '<img src="icons/no.png" >'  ;
	            	}
	            	?>
	            	<br>
	            	<label>Babies: </label> 
	            	<?php if ($baby == 1) { 
	            		echo '<img src="icons/yes.png">'  ;  
	            	} else {
	            		echo '<img src="icons/no.png">'  ; 
	            	}
	            	?>
	            	<br>
	            	<label>disabilites: </label> 
	            	<?php if ($dis == 1) { 
	            		echo '<img src="icons/yes.png">'  ; 
	            	} else {
	            		echo '<img src="icons/no.png">'  ; 
	            	}
	            	?>
	            </div>  
            <div class="column">
            	<h2>Available Activities</h2> <br>
            		<?php 
            		foreach ($act as $value) {
                            $str = "SELECT `activity` FROM `activities` WHERE `activity id` = '$value'";
                            $result = $pdo->query($str);
                            while ($row = $result->fetch()){
                                echo "<label>- ".$row['activity']."</label><br>";
                            }
                    }
            		?>
            </div>
            <div class="column">
            	<h2>Snacks</h2> <br>
            		<?php 
            		foreach ($food as $value) {
                            $str = "SELECT `food` FROM `food` WHERE `food id` = '$value'";
                            $result = $pdo->query($str);
                            while ($row = $result->fetch()){
                                echo "<label>- ".$row['food']."</label><br>";
                            }
                    }
            		?>
            </div>
        </div>
              <hr>
              <br>
              <div>
              	<h2>Book Now</h2>
              	<form name="myForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"  onsubmit="return func()">
              	<script type="text/javascript">
              		function func(){
              			var x = document.getElementById("people");
              			if (x == ""){
              				return false;
              			} else {
              				return true;
              			}
              		}
              	</script> 
      
            	<label>Number of people:</label> 
            	<input type="number" id="people" name="people" placeholder="#people">
            	<button type="submit"= id="go" name="go">Book</button>
            	</form>
              </div>
    </div>
    
    <?php require_once("template/footer.php"); ?>   