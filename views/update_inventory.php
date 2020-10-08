    <body>
        <nav>
            <ul>
            <li class = "col-1"><a class="active" href="main_page.php"> <img src="icons/home.png"></a></li>
            <li class = "col-3"><a  href="<?php echo site_url('Manage_inven/inventoryView');?>" >View Inventory</a></li>
            <li class = "col-3"><a  href="<?php echo site_url('Manage_inven/inventoryUpdate');?>" >Update Inventory</a></li>
            </ul>
        </nav>

        <div class = "background">
          <div id = "form-box">
            <div class = "button-area">
              <button type = "button" id = "add-button" class = "toggle-button" onclick="addf()"> Add </button>
              <button type = "button" id = "update-button" class = "toggle-button" onclick="updatef()"> Update/Remove </button>
            </div>
            <div id = "addMedicine" class = "input-field">
              <form action ="#" method = "POST">
                <input type="text" class = "input" name="medicineId" placeholder="Medicine Id" required>
                <input type="text" class = "input" name="medicineName" placeholder="Medicine Name" required>
                <input type="textbox" class = "input" name="description" placeholder="Description" required></br>
                <input type="text" class = "input" name="quantity" placeholder="Quantity" required>
                <button name="add" id = "add-medicine" class = "submit-button" >Add</button>
              </form>
            </div>
            <div id = "updateMedicine" class = "input-field">
              <form  action ="#" method = "POST">
                <input type="text" class = "input" name="medicineId" placeholder="Medicine Id" required>
                <input type="text" class = "input" name="medicineName" placeholder="Medicine Name" required>
                <input type="textbox" class = "input" name="description" placeholder="Description" required></br>
                <input type="text" class = "input" name="quantity" placeholder="Quantity" required>
                <button name="update" id = "update-medicine" class = "submit-button" >Update</button></br>
                <button name="remove" id = "remove-medicine" class = "submit-button" >remove</button>
              </form>
            </div>
          </div>
        </div>
      <script>
        var x = document.getElementById("addMedicine");
        var y = document.getElementById("updateMedicine");

        function addf(){
          x.style.left = "0px";
          y.style.left = "350px";
          document.getElementById("add-button").style.backgroundColor = "rgba(0, 0, 0, 0.8)";
          document.getElementById("update-button").style.backgroundColor = "transparent";
          document.getElementById("form-box").style.height = "400px";
        }

        function updatef(){
          x.style.left = "-350px";
          y.style.left = "0px";
          document.getElementById("update-button").style.backgroundColor = "rgba(0, 0, 0, 0.8)";
          document.getElementById("add-button").style.backgroundColor = "transparent";
          document.getElementById("form-box").style.height = "400px";
        }

      </script>
      
    </body>
</html>