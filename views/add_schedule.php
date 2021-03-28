<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/schedule.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<script>
    $(document).ready(function() {
        var maxField = 7; //Input fields increment limitation
        var addButton = $('#add_button'); //Add button selector
        var wrapper = $('#field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="input"><select name="day[]" id="category" placeholder="Schedule Day" required><option value="" disabled hidden selected> Select Category </option><option value="Sunday">Sunday</option><option value="Monday">Monday</option><option value="Tuesday">Tuesday</option><option value="Wednesday">Wednesday</option><option value="Thursday">Thursday</option><option value="Friday">Friday</option><option value="Saturday">Saturday</option></select><input type="time" name="time[]" id="time"></br><input type="text" placeholder="Maximum no of patient" name="maxPatient[]" id="maxPatient"></br><a href="javascript:void(0);" id="remove_button" title="Add field"><img src="<?php echo Router::base_url() . '/files/icons/remove-icon.png' ?>"/></a></div>'; //New input field html 
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '#remove_button', function(e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>

        <form class="form" method="POST" action=<?php echo Router::site_url() . "/Schedules/add" ?> style="height: 95%; overflow-y:scroll">
            <div class="form-container">
                <div id="form-img">
                </div>
                <div id="form-1">
                    <div style="padding-top:15px"><div class="topic" style="margin:0">Add Schedule</div></div>
                    <div class="label">
                        <label for="doc_id">Doctor Id</label>
                    </div>
                    <div class="input">
                        <input type="text" name="doc_id" value="<?php echo $_POST['details']['id'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="f_name"> First name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="f_name" value="<?php echo $_POST['details']['f_name'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="l_name">Last name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="l_name" value="<?php echo $_POST['details']['l_name'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="doc_special">Specialization</label>
                    </div>
                    <div class="input">
                        <input type="text" name="doc_special" value="<?php echo $_POST['details']['specialization'] ?>" disabled required>
                    </div>
                    
                </div>
                <div id="form-2">
                    <div class="label">
                        <label for="sche_id">Schedules</label>
                    </div>
                    <div id="field_wrapper">
                        <div class="input">
                            <select name="day[]" id="category" placeholder="Schedule day" required>
                                <option value="" disabled hidden selected> Select Day </option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                            </select>
                            <input type="time" name="time[]" id="time"></br>
                            <input type="text" placeholder="Maximum no of patient" name="maxPatient[]" id="maxPatient"></br>
                            <a href="javascript:void(0);" id="add_button" title="Add field"><img src="<?php echo Router::base_url() . '/files/icons/add-icon.png' ?>"></a>
                        </div>
                    </div>
                    <input type="submit" name="add" value="Add" class="btn">
                    <div id="form-message"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>