<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body  style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(icons/undraw_Payments_re_77x0.png);">
        <div class="container">
                <div class="block">
                    
                    <form>
                        <div class="form-box">
                            <div class="title">Appointment Form</div>
                            <div class="label">
                                <label for="id">NIC</label>
                            </div>
                            <div class="input">
                                <input type="text" name="id" required>
                            </div>
                            <div class="label">
                                <label for="name">Name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="name" required>
                            </div>
                            <div class="label">
                                <label for="age">Age</label>
                            </div>
                            <div class="input">
                                <input type="number" name="age" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact</label>
                            </div>
                            <div class="input">
                                <input type="tel" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="email">Email</label>
                            </div>
                            <div class="input">
                                <input type="email" name="email" required>
                            </div>
                            <div class="label">
                                <label for="payment">Payment Method</label>
                            </div>
                            <div class="radio-btn">
                                <label for="method1">Method 1</label>
                                <input type="radio" id="method1" name="method" value="method1">
                                <label for="method2">Method 2</label>
                                <input type="radio" id="method2" name="method" value="method2">
                            </div>
                            <div class="card-large">
                                <div>Charges</div>
                                <div class="card-details">
                                    Doctor Charges
                                </div>
                                <div class="card-details">
                                    Tax
                                </div>
                                <div class="card-details">
                                    Total Amount
                                </div>
                            </div>
                            <div class="label">
                                <label for="payment">Acknowledge & Proceed</label>
                            </div>
                            <div class="radio-btn">
                                <input type="checkbox" id="agree" name="agree" value="agree" required>
                            </div>
                            <div class="btn-area"><input type="submit" value="Proceed" class="submit-btn"></div>
                        </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>