<!DOCTYPE html>
<html>

<head>
    <title>View</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    

        <nav>
            <ul>
                <li class = "col-1"><a class="active" href="#"><img src="img/home.png"></a></li>
                <li class = "col-2"><a href="#">View Lab Tests</a></li>
            
            </ul>
        </nav>

    <div class = "background">
    
    <div id ="form-box-2">
    <div id = "view-Tests" class = "input-field">
              <form action ="#" method = "POST">
                <input type="text" class = "input" name="testId" placeholder="Test Id" required>
                <input type="text" class = "input" name="testDate" placeholder="Test Date" required>
                <option value="category">Test Name</input type="dropdown" class = "input" name="testName" placeholder="Test Category" required>
                    <option value="testName">Test Name</option>option>
                <button name="search" id = "search-test" class = "search-button" >Search</button>
              </form>
            </div>  <!--view test-->
    </div>  <!--form box-->
    </div>  <!--background-->      
    
</body>

</html>