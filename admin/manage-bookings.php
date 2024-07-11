<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else { 
    // Code for cancel
    if(isset($_REQUEST['bkid'])) {
        $bid = intval($_GET['bkid']);
        $status = 2;
        $cancelby = 'a';
        $sql = "UPDATE tblbooking SET status=:status, CancelledBy=:cancelby WHERE BookingId=:bid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->bindParam(':cancelby', $cancelby, PDO::PARAM_STR);
        $query->bindParam(':bid', $bid, PDO::PARAM_STR);
        $query->execute();
        $msg = "Booking Cancelled successfully";
    }

    if(isset($_REQUEST['bckid'])) {
        $bcid = intval($_GET['bckid']);
        $status = 1;
        $sql = "UPDATE tblbooking SET status=:status WHERE BookingId=:bcid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':status', $status, PDO::PARAM_INT);
        $query->bindParam(':bcid', $bcid, PDO::PARAM_INT);
        if($query->execute()) {
            $msg = "Booking confirmed successfully";
        } else {
            $error = "Error confirming booking";
        }
    }

    // Retrieve booking details
    $sql = "SELECT tblbooking.BookingId as bookid, tblusers.FullName as fname, tblusers.MobileNumber as mnumber, tblusers.EmailId as email, tbltourpackages.PackageName as pckname, tblbooking.PackageId as pid, tblbooking.FromDate as fdate, tblbooking.ToDate as tdate, tblbooking.Comment as comment, tblbooking.status as status, tblbooking.CancelledBy as cancelby, tblbooking.UpdationDate as upddate, tbltourpackages.PackagePrice as PackagePrice from tblusers join tblbooking on tblbooking.UserEmail=tblusers.EmailId join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId";
    $query = $dbh->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);

    // Calculate total amount
    $totalAmount = 0;
    foreach ($results as $result) {
        $totalAmount += $result->PackagePrice;
    }
}

// Execute the stored procedure to get the total package price
try {
    $sql = "CALL GetTotalPackagePrice()";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $totalAmountFromProcedure = $stmt->fetch(PDO::FETCH_ASSOC)['TotalAmount'];
} catch (PDOException $e) {
    // Handle any errors
    $error = "Error executing stored procedure: " . $e->getMessage();
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Manage Bookings</title>
    <!-- Include CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/table-style.css">
    <link rel="stylesheet" type="text/css" href="css/basictable.css">
    <style>
        /* CSS for Total Amount row */
        .total-row {
            background-color: #f2f2f2;
        }

        .total-row td {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Page content -->
    <div class="page-container">
        <div class="left-content">
            <!-- Header and Breadcrumbs -->
            <!-- Include header.php and breadcrumb -->
            <?php include('includes/header.php');?>
            <!-- Breadcrumbs should be included here if available -->

            <!-- Table for managing bookings -->
            <div class="agile-grids">
                <div class="agile-tables">
                    <div class="w3l-table-info">
                        <h2>Manage Bookings</h2>
                        <table id="table">
                            <thead>
                                <tr>
                                    <th>Booking id</th>
                                    <th>Name</th>
                                    <th>Mobile No.</th>
                                    <th>Email Id</th>
                                    <th>RegDate</th>
                                    <th>From / To</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Package price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($results as $result) { ?>
                                    <tr>
                                        <td>#BK-<?php echo htmlentities($result->bookid); ?></td>
                                        <td><?php echo htmlentities($result->fname); ?></td>
                                        <td><?php echo htmlentities($result->mnumber); ?></td>
                                        <td><?php echo htmlentities($result->email); ?></td>
                                        <td><?php echo htmlentities($result->fdate); ?> To <?php echo htmlentities($result->tdate); ?></td>
                                        <td><a href="update-package.php?pid=<?php echo htmlentities($result->pid); ?>"><?php echo htmlentities($result->pckname); ?></a></td>
                                        <td><?php echo htmlentities($result->comment); ?></td>
                                        <td>
                                            <?php 
                                                if($result->status == 0) {
                                                    echo "Pending";
                                                } elseif($result->status == 1) {
                                                    echo "Confirmed";
                                                } elseif($result->status == 2 && $result->cancelby == 'a') {
                                                    echo "Canceled by you at " .$result->upddate;
                                                } elseif($result->status == 2 && $result->cancelby == 'u') {
                                                    echo "Canceled by User at " .$result->upddate;
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php if($result->status != 2) { ?>
                                                <a href="manage-bookings.php?bkid=<?php echo htmlentities($result->bookid); ?>" onclick="return confirm('Do you really want to cancel booking')">Cancel</a> / 
                                                <a href="manage-bookings.php?bckid=<?php echo htmlentities($result->bookid); ?>" onclick="return confirm('Do you really want to confirm booking')">Confirm</a>
                                            <?php } else { ?>
                                                Canceled
                                            <?php } ?>
                                        </td>
                                        <td><?php echo htmlentities($result->PackagePrice); ?></td>
                                    </tr>
                                <?php } ?>
                                <!-- Row for total amount -->
                                <tr class="total-row">
                                    <td colspan="9"><strong>Total:</strong></td>
                                    <td><?php echo htmlentities($totalAmount); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Include footer.php -->
            <?php include('includes/footer.php');?>
        </div>
    </div>
 <!--//content-inner-->
		<!--/sidebar-menu-->
		<?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
