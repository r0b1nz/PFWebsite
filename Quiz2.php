<?php
	require_once('sql.php');
	// Create connection
			$conn = new mysqli($DBservername, $DBusername, $DBpass, $DBname);
			// Check connection
			if ($conn->connect_error) {
		 	   die("Connection failed: " . $conn->connect_error);
			} 
	if(!session_id())
		session_start();

		// echo session_id();
		if(!isset($_SESSION['quid'])){
			$quid = array();
			

	   		$sql = "SELECT quid FROM questionbank where qzno = 1";

			$retval = $conn->query($sql);
			if ($retval->num_rows<=0) {
				echo "No Questions";
			}

			while($row = $retval->fetch_assoc()){
				echo "Happ";
				array_push($quid, $row['quid']);
			}
			$_SESSION['quid'] = $quid;
		}

		shuffle($_SESSION['quid']);

		if(count($_SESSION['quid'])<=0){
			echo "No more questions, ";
			echo "Stop the timer.";
			session_destroy();
			exit();
		}

		$randQuid = $_SESSION['quid'][0];
		unset($_SESSION['quid'][0]);
		$_SESSION['lastQuid'] = $randQuid;
		
		echo "Quid selected : " . $randQuid;
		echo ", Total Quids left: " . count($_SESSION['quid']);

		$sql = "select * from questionbank where quid = $randQuid";
		$retval = $conn->query($sql);
		$row = $retval->fetch_assoc();
		$_SESSION['lastAns'] = $row['opt1'];

		//POST REQUEST -> CHECK THE ANSWER FOR 'LASTquiz' - 'LASTans'


		$options = array($row['opt1'],$row['opt2'],$row['opt3'],$row['opt4']);
		shuffle($options)

	// exit();
	?>

<script type="text/javascript">
    var iRobin = 9;
setInterval(pecFest_Counter, 1000);

function pecFest_Counter(){
    var a = document.getElementById('timer');
    a.innerHTML = "Time Left: " + iRobin;
    if(iRobin == 0){
        alert("Time limit exceeded.");
        location.reload();
    }
    iRobin = iRobin-1 ;
}

</script>

<!-- NOTE:

	 Save the current time in Session, and when the page refreshes or gets a POST request, compare the time.
	if the difference is approximately the same as of the alotted time, then pass.. else stop the QUIZ.

	To be done by the person who implements the Button/answer inputs. 

	-ROBIN GAUTAM

	-->


	<!DOCTYPE HTML>
<html>
<head>

    <meta charset="UTF-8">
	<title>Quiz 1</title>
	<link rel="stylesheet" href="css/quiz2style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript">
        function Choice1(){
        alert("Choice1");
        }
        function Choice2(){
        alert("Choice2");
        }
        function Choice3(){
        alert("Choice3");
        }
        function Choice4(){
        alert("Choice4");
        }
    </script>
</head>
<body>
<div class="main animated fadeIn">
    <div class="sidebar">
        <h2>QUIZ 1</h2>
        <h4 id="timer">Time Left: 10</h4>
        <div class="line">
        </div>
        <div class="labelback">
            <label><?php echo $row['ques']; ?></label>
        </div>
        
    </div>
    <div class="contentspace">
        <div class="btn">
        <button type="submit" value="<?php echo $options[0]; ?>" onclick="Choice1();" id="btn"><?php echo $options[0]; ?></button>
        <button type="submit"  value="<?php echo $options[1]; ?>" onclick="Choice2();" id="btn"><?php echo $options[1]; ?></button>
        <button type="submit"  value="<?php echo $options[2]; ?>" onclick="Choice3();" id="btn"><?php echo $options[2]; ?></button>
        <button type="submit"  value="<?php echo $options[3]; ?>" onclick="Choice4();" id="btn"><?php echo $options[3]; ?></button></div>
    </div>
</div>
</body>
</html>
