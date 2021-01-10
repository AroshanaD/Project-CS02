<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src="<?php echo Router::base_url() . '/files/js/client.js' ?>"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>

        <div class="form">
            <div class="form-container1" style="width: 800px; box-shadow: var(--box-shadow);">
                <div id="form-img" style="background-image: url(<?php echo Router::base_url() . '/files/icons/credit_card.svg' ?>); height: 225px; background-size:cover; background-color:white"></div>
                <div id="form-1" style="background-color: #d2d3ff; border: var(--border-line)">
                    <form action="/charge" method="post" id="payment-form">
                        <div class="form-row" style="border-bottom: var(--border-line)">
                            <label style="display: block; margin-bottom: 25px; color: #404040">
                                Payment Amount : <?php echo "Rs. ".($_SESSION['appointment']['doctor_fee'] + 250) ?>
                            </label>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>
                        <div class="form-row">
                            <label for="card-element" style="display: block; margin-bottom: 25px; margin-top: 25px;">
                                Credit or debit card
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <button id="payment-btn">Submit Payment</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>