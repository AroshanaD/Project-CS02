<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="container-small">Hospital Management System</div>
        <div class="container">
            <div class="form-container">
                    
                <div class="register">
                    <div class="form-name">Update Inventory</div>
                    <form action ="#" method = "POST">
                        <div class="form-box">
                            <div class="label">
                                <label for="med_id">Medicine Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_id" required>
                            </div>
                            <div class="label">
                                <label for="med_name">Medicine name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_name" required>
                            </div>
                            <div class="label">
                                <label for="med_description">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="med_description" required>
                            </div>
                            <div class="label">
                                <label for="med_quantity">Quantity</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_quantity" required>
                            </div>
                            
                            <div class="btn-area">
                                <input type="submit" value="Update" class="inventory-btn">
                                <input type="submit" value="Delete" class="inventory-btn">
                            </div>
                        </div>    
                    </form>
                </div>                   
            </div>
        </div> 
    </body>

</html>