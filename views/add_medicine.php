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
        <div>Add Medicine</div>
        <form>
            <table>
            <tr>
            <th><label for="id">Medicine Id</label></th>
            <th><input type="text" id="id" name="id"></th>
            </tr>
            <tr>
            <th><label for="name">Medicine Name</label></th>
            <th><input type="text" id="name" name="name"></th>
            </tr>
            <tr>
            <th><label for="vendor">Vendor</label></th>
            <th><input type="text" id="vendor" name="vendor"></th>
            </tr>
            <tr>
            <th><label for="description">Description</label></th>
            <th><input type="text" id="description" name="description"></th>
            </tr>
            <tr>
            <th><label for="quantity">Quantity</label></th>
            <th><input type="number" id="quantity" name="quantity"></th>
            </tr>
            <tr>
            <th><label for="price">Unit Price</label></th>
            <th><input type="number" id="price" name="price"></th>
            </tr>
            <tr>
            <th><input type="submit" value="Add"></th>
            </tr>
            </table>
        </form>
    </body>
</html>