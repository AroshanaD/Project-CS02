<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script type="text/javascript" src="/project-cs02/files/js/autofill_vendors.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/grn.js"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>

        <div class="form">
            <div class="form-container2">
                <div id="form-img">

                </div>
                <form id="form-1">
                    <div class="label">
                        <label for="grn_id" id="grn_f">GRN Id</label>
                    </div>
                    <div class="input">
                        <input type="number" name="grn" id="grn" value="<?php echo $_POST['grn'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="vendors">Vendor</label>
                    </div>
                    <div class="input">
                        <select name="vendors" id="vendors" required>
                            <option value="" disabled selected hidden>Select Vendor</option>
                        </select>
                    </div>
                    <div class="label">
                        <label for="no_items" id="no_items_f">No.of Items</label>
                    </div>
                    <div class="input">
                        <input type="number" name="no_items" id="no_items" disabled required>
                    </div>
                    <div class="label">
                        <label for="grn " id="grn_value_f">GRN Value</label>
                    </div>
                    <div class="input">
                        <input type="number" name="grn_value" id="grn_value" disabled required>
                    </div>
                    <div class="label">
                        <label for="receiver_id" id="receiver_id_f">Receiver Id</label>
                    </div>
                    <div class="input">
                        <input type="text" name="receiver_id" id="receiver_id" value="<?php echo $_SESSION["id"] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="note" id="note_f">Note</label>
                    </div>
                    <div class="input">
                        <input type="text" name="note" id="note">
                    </div>
                    <div><input type="submit" name="submit" id="submit" value="Submit" class="btn"></div>
                    <div id="form-message"></div>
                </form>
                <div id="form-3">
                    <div class="med-div">
                        <form class="medicine-details">
                            <div class="input_m" id="br_f">
                                <input class="m_input" type="number" name="br" id="br" placeholder="BR No" required>
                            </div>
                            <div class="input_m" id="medicine_f">
                                <input class="m_input" type="text" name="medicine" id="medicine" placeholder="Medicine Name" required>
                            </div>
                            <div class="input_s">
                                <input class="m_input" type="number" name="unit_value" id="unit_value" placeholder="Unitary Value" required>
                            </div>
                            <div class="input_s">
                                <input class="m_input" type="text" name="unit" id="unit" placeholder="Unit" required>
                            </div>
                            <div class="input_s">
                                <input class="m_input" type="float" name="unit_price" id="unit_price" placeholder="Unitary Price" required>
                            </div>
                            <div class="input_s">
                                <input class="m_input" type="float" name="seling_price" id="selling_price" placeholder="Selling Price" required>
                            </div>
                            <div class="input_m">
                                <input class="m_input" type="number" name="quantity" id="quantity" placeholder="Quantity" required>
                            </div>
                            <div class="input_m" id="manufacturer_f">
                                <input class="m_input" type="text" name="manufacturer" id="manufacturer" placeholder="Manufacturer" required>
                            </div>
                            <div class="input_m" id="manufacture_date_f">
                                <div style="margin-bottom: 5px;"><label style="color:#743ebb">Manufacture Date</label></div>
                                <input class="m_input" type="date" name="manufacture_date" id="manufacture_date" placeholder="Manufacture Date" required>
                            </div>
                            <div class="input_m" id="expire_date_f">
                                <div style="margin-bottom: 5px;"><label style="color:#743ebb">Expire Date</label></div>
                                <input class="m_input" type="date" name="expire_date" id="expire_date" placeholder="Expire Date" required>
                            </div>
                            <div class="input_m">
                                <input class="m_input" type="text" name="note" id="note_m" placeholder="Note">
                            </div>
                            <div class="input_m"><button class="add" id="add-icon"><i class="fas fa-plus" style="color:white"></i></button></div>
                        </form>
                        <div class="drop-icon">
                            <button id="up" onclick="up()"><i class="fas fa-angle-up"></i></button>
                            <button id="down" onclick="down()"><i class="fas fa-angle-down"></i></button>
                        </div>
                    </div>
                    <div class="table" style="display: block; margin: 0; overflow-y: auto">
                        <table>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>