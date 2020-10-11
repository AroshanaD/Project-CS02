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
            <form>
                <table>
                <tr>
                <th><label for="doctor">Doctor</label></th>
                <th><input type="text" id="doctor" name="doctor"></form></th>
                </tr>
                <tr>
                    <th><label for="specialization">Specialization</label></th>
                    <th><input type="text" id="specialization" name="specialization"></form></th>
                </tr>
                <tr>
                    <th><label for="day">Schedule Day</label></th>
                    <th><select id="day" name="day">
                        <option value="monday">Monday</option>
                        <option value="tuesday">Tuesday</option>
                        <option value="wednesday">Wednesday</option>
                        <option value="thursday">Thursday</option>
                        <option value="friday">Friday</option>
                        <option value="saturday">Saturday</option>
                        <option value="sunday">Sunday</option>
                        </select>
                    </th>
                </tr>
                <tr>
                <th><input type="submit" value="Search"></th>
                </tr>
                </table>
            </form>
        </div>
            <table>
                <tr>
                    <th>No.</th>
                    <th>Schedule Id</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Specialization</th>
                    <th>Doctor</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><input type="submit" value="Update"></th>
                    <th><input type="submit" value="Delete"></th>
                </tr>
            </table>
        </div>
    </body>
</html>
