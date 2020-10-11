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
        <div>Add schedules</div>
        <form>
            <table>
            <tr>
            <th><label for="doctor id">Doctor Id</label></th>
            <th><input type="text" id="doctor id" name="doctor id"></th>
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
            <th><label for="time">Time</label></th>
            <th><input type="time" id="time" name="time"></th>
            </tr>
            </div>
            <tr>
            <th><input type="submit" value="Add"></th>
            </tr>
            </table>
        </form>
    </body>
</html>