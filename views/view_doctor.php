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
                <th><label for="id">Id</label></th>
                <th><input type="text" id="id" name="id"></form></th>
                </tr>
                <tr>
                <th><label for="name">Name</label></th>
                <th><input type="text" id="name" name="name"></form></th>
                </tr>
                <tr>
                    <th><label for="specialization">Specialization</label></th>
                    <th><select id="specialization" name="specialization">
                        <option value="#">#</option>
                    </select></th>
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
                    <th>Id</th>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Charges</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
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
                    <th></th>
                    <th></th>
                    <th><input type="submit" value="Update"></th>
                    <th><input type="submit" value="Delete"></th>
                </tr>
            </table>
        </div>
    </body>
</html>
