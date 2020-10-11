<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <button type="submit" formaction="#">Home</button>
            <div>Hospital Management System</div>
        </div>
        <div>Appointment details</div>
        <form>
            <table>
                <tr>
                    <th><label for="f_name">First name</label></th>
                    <th><input type="text" id="f_name" name="f_name"></th>
                </tr>
                <tr>
                    <th><label for="l_name">Last Name</label></th>
                    <th><input type="text" id="l_name" name="l_name"></th>
                </tr>
                <tr>
                    <th><label for="address">Address</label></th>
                    <th><input type="text" id="address" name="address"></th>
                </tr>
                <tr>
                    <th><label for="email">Email</label></th>
                    <th><input type="email" id="email" name="email"></th>
                </tr>
                <tr>
                    <th><label for="contact">Contact Number</label></th>
                    <th><input type="tel" id="contact" name="contact"></th>
                </tr>
                <tr>
                    <th><label for="payment">Payment Method</label></th>
                </tr>
                <tr>
                    <th><label for="contact">Contact Number</label></th>
                </tr>
                <tr>
                    <th><label for="method1">Method 1</label></th>
                    <th><input type="radio" id="method1" name="method" value="method1"></th>
                </tr>
                <tr>
                    <th><label for="method2">Method 2</label></th>
                    <th><input type="radio" id="method2" name="method" value="method2"></th>
                </tr>
                <tr>
                    <th><input type="submit" value="Proceed"></th>
                </tr>
            </table>
        </form>
    </body>
</html>