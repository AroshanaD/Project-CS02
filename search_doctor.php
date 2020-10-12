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
                <div class="appointment">
                    <div class="form-name">Search Doctor</div>
                    <form>
                        <div class="form-box">
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
                        </div>
                            <div class="btn-area"><input type="submit" value="Search" class="submit-btn"></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>