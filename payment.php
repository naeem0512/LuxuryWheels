<?php
session_start();
// Check if the user is authenticated. You can implement your own authentication logic.
// If the user is not authenticated, redirect them to the login page.
if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

// Check if the form has been submitted
if (isset($_POST['submit_payment'])) {
    // Get payment details from the form
    $amount = $_POST['amount']; // Replace with the actual form field name
    $currency = 'USD'; // Replace with your desired currency
    $paymentMethod = $_POST['payment_method']; // Replace with the actual form field name

    // Your custom payment processing logic goes here
    $paymentSuccess = processPayment($amount, $currency, $paymentMethod);

    if ($paymentSuccess) {
        // Payment successful, redirect to a success page
        header('Location: payment-success.php');
        exit;
    } else {
        // Payment failed, display an error message
        $errorMessage = 'Payment processing failed. Please try again or contact support.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Proceed to Payment</title>
    <link rel="stylesheet" href="assets/css/style-payment.css" type="text/css">
    <link rel="stylesheet" href="assets/css/" type="text/css">
    <!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <header>
        <!-- Include your site header or navigation menu here -->
    </header>
    
    <div class="container">
        <h1>Proceed to Payment</h1>
        
        <!-- Display error message if payment processing failed -->
        <?php if (isset($errorMessage)) { ?>
            <div class="error-message">
                <?php echo $errorMessage; ?>
            </div>
        <?php } ?>
        
        <!-- Payment Form -->
        <div class="cont">
            <div id="Checkout" class="inline">
                <h1>Pay Invoice</h1>
                <div class="card-row">
                    <span class="visa"></span>
                    <span class="mastercard"></span>
                    <span class="amex"></span>
                    <span class="discover"></span>
                </div>
                <form method="post" action="payment.php"> 
                    <div class="form-group">
                    <label for="PaymentAmount">Payment amount</label>
                    <input id="PaymentAmount" name="amount" class="form-control" placeholder="&pound;"type="text" required>
                    <div class="form-group">
                        <label for="NameOnCard">Name on card</label>
                        <input id="NameOnCard" name="NameOnCard" class="form-control" type="text" maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label for="CreditCardNumber">Card number</label>
                        <input id="CreditCardNumber" name="CreditCardNumber" class="null card-image form-control" type="text" required>
                    </div>
                    <div class="expiry-date-group form-group">
                        <label for="ExpiryDate">Expiry date</label>
                        <input id="ExpiryDate" name="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7" required>
                    </div>
                    <div class="security-code-group form-group">
                        <label for="SecurityCode">Security code</label>
                        <div class="">
                            <input id="SecurityCode" name="SecurityCode" class="form-control" type="text" required>
                            <i id="cvc" class="fa fa-question-circle"></i>
                        </div>
                        <div class="cvc-preview-container two-card hide">
                            <div class="amex-cvc-preview"></div>
                            <div class="visa-mc-dis-cvc-preview"></div>
                        </div>
                    </div>
                    <div class="zip-code-group form-group">
                        <label for="ZIPCode">ZIP/Postal code</label>
                        <div class="input-container">
                            <input id="ZIPCode" name="ZIPCode" class="form-control" type="text" maxlength="10" required>
                            <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
                        </div>
                    </div>
                    <button id="PayButton" name="submit_payment" class="btn btn-block btn-success submit-button" type="submit">
                        <span class="submit-button-lock"></span>
                        <span class="align-middle">Pay Now</span>
                    </button>
                    <button id="PayButton" name="submit_payment" class="btn btn-block btn-success submit-button" type="button" onclick="window.location.href='reservation.php'">
                    <!-- <span class="back-arrow">Go Back</span> -->
                        <span class="align-middle">Go Back</span>
                    </button>
                </form>
                
            </div>
        </div>
    </div>
    
</body>
</html>