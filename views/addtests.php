<!DOCTYPE html>
<html>

<head>
    <title>Add</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    

        <nav>
            <ul>
                <li class = "col-1"><a class="active" href="#"><img src="img/home.png"></a></li>
                <li class = "col-2"><a href="#">Add Lab Tests</a></li>
            
            </ul>
        </nav>

    <div class = "background">
    <div id ="form-box">
    <div id = "add-Tests" class = "input-field">
              <form action ="#" method = "POST">
                  <h2>Patient Details</h2>
                <input type="text" class = "input" name="patientId" placeholder="Enter Id" required>
                <input type="text" class = "input" name="fullName" placeholder="Enter Full Name" required>
                <input type="text" class = "input" name="age" placeholder="Enter Age" required>
                <br>
                <input type="checkbox" id="gender1" name="gender1" value="Male">
                    <label for="gender1"> Male</label>
                    <input type="checkbox" id="gender2" name="gender2" value="Female">
                    <label for="gender2"> Female</label>
                    <input type="checkbox" id="gender3" name="gender3" value="Other">
                    <label for="gender3"> Other</label>
                    <input type="text" class = "input" name="contactNO" placeholder="Enter Contact No" required>
                    <input type="text" class = "input" name="email" placeholder="Enter Email" required>
                <h2>Test Details</h2>
                <input type="dropdown" class = "input" name="testName" placeholder="Test Name" required>
                    <option value="testName">Test Name</option>option>
                    <option value="testName">Test Name</option>
                    <option value="testName">Test Name</option>
                <button name="add" id = "add-test" class = "add-button" >Add</button>
              </form>
            </div>  <!--add test-->

            
    </div>  <!--form box-->
    </div>  <!--background-->      
    
</body>

</html>