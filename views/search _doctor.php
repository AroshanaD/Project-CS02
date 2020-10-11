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
        <div>
            <div>Appointment</div>
            <form>
                <table>
                <tr>
                <th><label for="doctor name">Name</label></th>
                <th><input type="text" id="doctor name" name="doctor name"></form></th>
                </tr>
                <tr>
                    <th><label for="specialization">Specialization</label></th>
                    <th><select id="specialization" name="specialization">
                        <option value="Any">Any Specialization</option>
                    </select></th>
                </tr>
                <tr>
                    <th><label for="date">Date</label></th>
                    <th><input type="date" id="date" name="date"></form></th>
                </tr>
                <tr>
                <th><input type="submit" value="Search"></th>
                </tr>
                </table>
            </form>
    </body>
</html>
