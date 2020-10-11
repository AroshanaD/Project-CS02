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
        <div>Add Doctors</div>
        <form>
            <table>
            <tr>
            <th><label for="id">User Id</label></th>
            <th><input type="text" id="id" name="id"></th>
            </tr>
            <tr>
            <th><label for="f_name">First name</label></th>
            <th><input type="text" id="f_name" name="f_name"></th>
            </tr>
            <tr>
            <th><label for="l_name">Last Name</label></th>
            <th><input type="text" id="l_name" name="l_name"></th>
            </tr>
            <tr>
            <th><label for="specialization">Specialization</label></th>
            <th><select id="specialization" name="specialization">
                <option value="#">#</option>
                </select>
            </th>
            </tr>
            <tr>
            <th><label for="charges">Charges</label></th>
            <th><input type="number" id="charges" name="charges"></th>
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
            <th><label for="password">Password</label></th>
            <th><input type="password" id="password" name="password"></th>
            </tr>
            <div id="schedules">
                <tr>
                <th><input type="checkbox" id="monday" value="monday"><label for="monday">Monday</label></th>
                <th><input type="time" id="m_time" name="m_time"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" id="tuesday" value="tuesday"><label for="tuesday">Tuesday</label></th>
                    <th><input type="time" id="t_time" name="_time"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" id="wednesday" value="wednesday"><label for="wednesday">Wednesday</label></th>
                    <th><input type="time" id="w_time" name="w_time"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" id="" value="thursday"><label for="thursday">Thursday</label></th>
                    <th><input type="time" id="th_time" name="th_time"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" id="friday" value="friday"><label for="friday">Friday</label></th>
                    <th><input type="time" id="f_time" name="f_time"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" id="saturday" value="saturday"><label for="saturday">Saturday</label></th>
                    <th><input type="time" id="s_time" name="s_time"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" id="sunday" value="sunday"><label for="sunday">Sunday</label></th>
                    <th><input type="time" id="su_time" name="su_time"></th>
                </tr>
            </div>
            <tr>
            <th><input type="submit" value="Add"></th>
            </tr>
            </table>
        </form>
    </body>
</html>