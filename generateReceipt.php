<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html>
<!-- HEAD TAG STARTS -->
<head>
<title>Mr.Traveller|Hotels Search</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/main.css" rel="stylesheet">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
    </head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
		
		<div class="spacer">a</div>
		
		<?php 
		
		date_default_timezone_set("Asia/Kolkata");
		$date=date('l jS \of F Y \a\t h:i:s A');
		
		$hotelID=$_POST["hotelIDHidden"];
		$fare=$_POST["fareHidden"];
		
		?>
		
		<?php
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "tms1";
			
			// Creating a connection to tms1 MySQL database
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Checking if we've successfully connected to the database
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
		
			/*$getBookedSeatsOutboundSQL = "SELECT noOfBookings FROM `flights` WHERE flight_no='$flightNoOutbound'";
			$getBookedSeatsOutboundQuery = $conn->query($getBookedSeatsOutboundSQL);
			$bookedSeatsOutboundGet = $getBookedSeatsOutboundQuery ->fetch_array(MYSQLI_NUM);*/
		
		?>
		
		<div class="col-sm-12 generateReceipt">
		
			<div class="commonHeader">
				
				<div class="col-sm-1"></div>
				
				<div class="col-sm-7 text-left">
					
					<div class="headingOne">
						
						Booking Receipt
						
					</div>
					
					<div class="dateTime">
						
						<span class="generated">Generated: </span><?php echo $date; ?>
						
					</div>
					
				</div>
				
				<div class="col-sm-3 text-right">
					
					<a href="./">Tourism System </a>
					
				</div>
				
				<div class="col-sm-1"></div>
				
				<div class="col-sm-12"></div>
				
				<div class="col-sm-1"></div>
				<div class="col-sm-10 bar"></div>
				<div class="col-sm-1"></div>
					
			</div> <!-- contains the header and logo -->
				
				<div class="col-sm-12"></div> <!-- empty class -->
			
				<div class="col-sm-1"></div>
				
				<div class="col-sm-10">
			
					<div class="subHeading">
						
						Booking Information:
						
					</div>
				
				</div>
							
				<div class="col-sm-12"></div> <!-- empty class -->
			
				<div class="col-sm-1"></div>
				
				<div class="col-sm-10 boxCenter"> <!-- outboundFlight Box -->
				
					<?php
					
						$sql = "SELECT * FROM hotels WHERE hotelID='$hotelID'";
						$result = $conn->query($sql);
						$row = $result->fetch_assoc()
					
					?>
					
					<div class="col-sm-1 borderRight text-center">
					
						<div class="flightOperatorHeading">
						
							Hotel ID
							
						</div>
						
						<div class="flightOperator">
						
							<?php $hotelID=$row["hotelID"];
							echo substr($hotelID,0,3) ?>
							
						</div>
						
						<div class="flightNo">
						
							<?php $hotelID=$row["hotelID"];
							echo substr($hotelID,3) ?>
							
						</div>
						
					</div> <!-- col-sm-4 -->
					
					<div class="col-sm-3 borderRight text-center">
					
						<div class="flightOperatorHeading">
						
							Hotel Name
							
						</div>
						
						<div class="flightOperator">
						
							<?php echo $row["hotelName"]; ?>
							
						</div>
						
						<div class="flightNo">
						
							<?php echo $row["locality"].', '.$row["city"]; ?>
							
						</div>
						
					</div> <!-- col-sm-4 -->
					
					<div class="col-sm-2 borderRight text-center">
					
						<div class="departsHeading">
						
							Check In
							
						</div>
						
						<div class="departs">
						
							<?php echo $_SESSION["checkIn"]; ?>
							
						</div>
						
						<div class="departsSubscript">
						
							<?php echo $row["checkIn"]; ?>
							
						</div>
						
					</div> <!-- col-sm-4 -->
					
					<div class="col-sm-2 borderRight text-center">
					
						<div class="arrivesHeading">
						
							Check Out
							
						</div>
						
						<div class="arrives">
						
							<?php echo $_SESSION["checkOut"]; ?>
							
						</div>
						
						<div class="arrivesSubscript">
						
							<?php echo $row["checkOut"]; ?>
							
						</div>
						
					</div> <!-- col-sm-4 -->
					
					<div class="col-sm-2 borderRight text-center">
					
						<div class="originHeading">
						
							No. of rooms
							
						</div>
						
						<div class="origin">
						
							<?php echo $_SESSION["noOfRooms"]; ?>
							
						</div>
						
						<div class="originSubscript">
						
							rooms
							
						</div>
						
					</div> <!-- col-sm-4 -->
					
					<div class="col-sm-2 text-center">
					
						<div class="destinationHeading">
						
							No. of guests
							
						</div>
						
						<div class="origin">
						
							<?php echo $_SESSION["noOfGuests"]; ?>
							
						</div>
						
						<div class="destinationSubscript">
						
							guests
							
						</div>
						
					</div> <!-- col-sm-4 -->
					
				</div> <!-- outboundFlight Box -->
			
				<div class="col-sm-12 spacer">a</div>
				
				<div class="col-sm-1"></div>
				
				<div class="col-sm-10">
			
					<div class="subHeading">
						
						Payment Information
						
					</div>
				
				</div>
							
				<div class="col-sm-12"></div> <!-- empty class -->
				
				<div class="col-sm-1"></div>
				
				<div class="col-sm-12"></div> <!-- empty class -->
				
				<div class="col-sm-1"></div>
			
					<div class="col-sm-10 boxCenter">
					
						<div class="columnHeaders">
							
							<div class="col-sm-4 borderBottom">
								
								<div class="serialNoHeader text-center">
									
									Charge per room
									
								</div>
								
							</div>
							
							<div class="col-sm-4 borderBottom">
								
								<div class="passengerNameHeader text-center">
									
									Amount paid
									
								</div>
								
							</div>
							
							<div class="col-sm-4 borderBottom">
								
								<div class="genderHeader text-center">
									
									Payment Mode
									
								</div>
								
							</div>
							
						</div> <!-- columnHeaders -->
						
						<div class="col-sm-4">
								
							<div class="serialNo text-center">
								
								<span class="rupee">₹</span><?php echo $row["price"]; ?>
								
							</div>
								
						</div>
						
						<div class="col-sm-4">
								
							<div class="serialNo text-center">
								
								<span class="rupee">₹</span><?php echo $fare ?>
								
							</div>
								
						</div>
						
						<div class="col-sm-4">
								
							<div class="serialNo text-center">
								
								Card Payment
								
							</div>
								
						</div>	
						
					</div> <!-- boxCenter -->
				
				<div class="col-sm-1"></div>
			
			<div class="importantInfo">
			
				<div class="col-sm-12"></div> <!-- empty class -->
				
				<div class="col-sm-12 spacer">a</div>
				<div class="col-sm-12 spacer">a</div>
				
				<div class="col-sm-1"></div>
				
					<div class="col-sm-10">
				
						<div class="subHeading">
							
							Important Information
							
						</div>
					
					</div>
						
				<div class="col-sm-1"></div>
					
				<div class="col-sm-12"></div>
						
				<div class="col-sm-1"></div>
				<div class="col-sm-10 bar"></div>
				<div class="col-sm-1"></div>
				
				<div class="col-sm-12"></div>
				
				<div class="col-sm-1"></div>
				
				<div class="col-sm-10">
					
					<div class="info">
						
						<span class="strong">1.</span> A printed copy of this receipt must be presented at the time of check-in.						
						
					</div>
					
					<div class="info">
						
						<span class="strong">2.</span> It is mandatory to have a Government recognised photo identification (ID) when checking-in. This can include: Driving License, Passport, PAN Card, Voter ID Card or any other ID issued by the Government of India.
						
					</div>
					
				</div>
				
				<div class="col-sm-1"></div>
							
				<div class="col-sm-12 spacer">a</div>
								
				<div class="col-sm-12"></div> <!-- empty class -->
				
			</div> <!-- importantInfo -->
			
			
			
		</div> <!-- generateTicket -->
				
		<div class="spacer">a</div>
					
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>

<!-- after user login system is built push the username usign the curent session to the database -->

<?php
	
	$user = $_SESSION["username"];
	$dateFormatted = date("d-m-Y"); //formatting the date as DD-MM-YY
	$hotelName = $row["hotelName"].', '.$row["locality"].', '.$row["city"];
	$bookingDataInsertSQL = "INSERT INTO `hotelbookings`(hotelName,date,username,cancelled) VALUES('$hotelName','$dateFormatted','$user','no')";
	$bookingDataInsertQuery = $conn->query($bookingDataInsertSQL);
				
	$bookingIDSQL = "SELECT * FROM `hotelbookings` ORDER BY `bookingID` DESC LIMIT 1";
	$bookingIDQuery = $conn->query($bookingIDSQL);
	$bookingIDGet = $bookingIDQuery ->fetch_array(MYSQLI_NUM);
	$latestBookingID = $bookingIDGet[0];
	$currentBookingID = $latestBookingID;
								
?>
		
<!-- saving the file as temp.html -->
<?php
file_put_contents('receipts\receipt'.$currentBookingID.'.html', ob_get_contents());
?>