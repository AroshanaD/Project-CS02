<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(icons/undraw_doctors_hwty.png);">
        <div class="container">
            <div class="block">
                    <form>
                        <div class="form-box">
                            <div class="title">Search Doctor</div>
                            <div class="label">
                                <label for="doctor">Doctor name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="doctor" required>
                            </div>
                            <div class="label">
                                <label for="specialization">Specialization</label>
                            </div>
                            <div class="input">
                                <select name="specialization" required>
                                    <option value="Any">Any Specialization</option>
                                    <option value="#">#</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="birthday">Appointment Date</label>
                            </div>
                            <div class="input">
                                <input type="date" name="birthday" required>
                            </div>
                        
                            <div class="btn-area"><input type="submit" value="Search" class="submit-btn"></div>
                        </div>    
                    </form>    
            </div>
        </div>
    </body>
</html>