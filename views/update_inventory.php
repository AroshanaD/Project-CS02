<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
    </head>

    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(icons/schedule_picture.png);">
        <div class="container">
            <div class="block">
                    
                    <form action ="#" method = "POST">
                        <div class="form-box">
                            <div class="title">Update Inventory</div>
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
                                <input type="submit" value="Update" class="submit-btn">
                            </div>
                            <div class="btn-area">
                                <input type="submit" value="Delete" class="submit-btn">
                            </div>
                        </div>    
                    </form>
                                   
            </div>
        </div> 
    </body>

</html>