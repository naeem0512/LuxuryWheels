<?php
session_start();
include('includes/config.php');

if (isset($_GET['vehicleId']) && !empty($_GET['vehicleId'])) {
    $vehicleId = $_GET['vehicleId'];

    // Create a prepared statement to delete the reservation by VehicleID
    $sql = "DELETE FROM `reservation` WHERE `VehicleId` = :vehicleId";
    $query = $dbh->prepare($sql);
    $query->bindParam(':vehicleId', $vehicleId, PDO::PARAM_INT);

    try {
        // Execute the delete query
        $query->execute();

        // Check if any rows were affected (if deletion was successful)
        if ($query->rowCount() > 0) {
            $_SESSION['success'] = "Reservation(s) deleted successfully.";
        } else {
            $_SESSION['error'] = "No reservation found or deletion failed.";
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Error deleting reservation: " . $e->getMessage();
    }

    // Redirect back to the page where reservations are listed
    header('location: reservation.php');
    exit();
} else {
    $_SESSION['error'] = "Invalid vehicle ID.";
    header('location: reservation.php');
    exit();
}
?>
