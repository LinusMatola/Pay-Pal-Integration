<?php
// Include configuration file
include_once 'config.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="creditCardValidator.js"></script>

<div id="paymentSection">
    <form method="post" id="paymentForm">
        <h4>Item: <?php echo $itemName; ?></h4>
        <h4>Payable amount: $<?php echo $payableAmount.' '.$currency; ?></h4>
        <ul>
            <li>
                <label>Card number</label>
                <input type="text" placeholder="1234 5678 9012 3456" maxlength="20" id="card_number" name="card_number">
            </li>
            <li class="vertical">
                <ul>
                    <li>
                        <label>Expiry month</label>
                        <input type="text" placeholder="MM" maxlength="5" id="expiry_month" name="expiry_month">
                    </li>
                    <li>
                        <label>Expiry year</label>
                        <input type="text" placeholder="YYYY" maxlength="5" id="expiry_year" name="expiry_year">
                    </li>
                    <li>
                        <label>CVV</label>
                        <input type="text" placeholder="123" maxlength="3" id="cvv" name="cvv">
                    </li>
                </ul>
            </li>
            <li>
                <label>Name on card</label>
                <input type="text" placeholder="John Doe" id="name_on_card" name="name_on_card">
            </li>
            <li>
                <input type="hidden" name="card_type" id="card_type" value=""/>
                <input type="button" name="card_submit" id="cardSubmitBtn" value="Proceed" class="payment-btn" disabled="true" >
            </li>
        </ul>
    </form>
</div>