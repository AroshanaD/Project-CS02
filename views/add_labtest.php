<script type="text/javascript" src="/project-cs02/files/js/select_labtest.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>


        <div class="container">
            <div class="container-t">
                <div style="width:60%">
                    <div class="table" style="max-height: 400px; overflow-y: scroll">
                        <table id="test_tb">

                        </table>
                    </div>
                </div>

                <div class="contact-box" style="max-width:30%">
                    <div class="left"></div>
                        <form> 
                            <div class="right">
                                <div class="label">
                                    <label for="test_id">Test Id</label>
                                </div>
                                <div class="input">
                                    <input type="number" name="test_id" value="<?php echo $_POST['test_id'] ?>" disabled required>
                                </div>
                                <div class="label">
                                    <label for="id">Patient Id</label>
                                </div>
                                <div class="input" id="id_f">
                                    <input type="text" name="id" id="id" required>
                                </div>
                                <div class="label">
                                    <label for="full_name">Name</label>
                                </div>
                                <div class="input" id="name_f">
                                <input type="text" id="name" name="full_name" required>
                                </div>
                                <div class="label">
                                    <label for="age">Age</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="age" id="age" required>
                                </div>
                                <div class="label">
                                    <label for="gender">Gender</label>
                                </div>
                                <div class="input">
                                    <select name="gender" id="gender" required>
                                        <option value="any">Select gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="label">
                                    <label for="contact">Contact No</label>
                                </div>
                                <div class="input" id="contact_f">
                                    <input type="tel" id="contact" name="contact" required>
                                </div>
                                <div style="width:100%; text-align: center">
                                    <input type="submit" value="Add Test" class="btn">
                                </div>
                                <div id="form-message"></div>
                            </div>
                        </form>
                    </div>
                    <div class="container-t">
                        <div class="search-bar" style="width: 400px">
                            <div class="site-search"> 
                                <input id="name" type="text" placeholder="Name " name="name"> 
                            </div>      <!--site-search-->  <!--date-->
                            <div class="site-search"> 
                                <button id="search-btn" type = "submit"  name="search" style="font-size:18px">Search</button> 
                            </div>
                        </div>
                        <div class="table">
                            <table id="select-tb">
                        
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>

</html>