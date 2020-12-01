<script src=<?php echo Router::base_url().'/files/js/create_bill.js'?> type="text/javascript"></script>
        <div class="container">
            <div class="container-t">
                <div class="topic1" style="border: 2px #fb8500 solid">Create Bill</div>
                <div style="width:60%">
                    <div class="search-bar" style="width: 400px">
                        <div class="site-search"> 
                            <input id="name" type="text" placeholder="Name " name="name"> 
                        </div>      <!--site-search-->  <!--date-->
                        <div class="site-search"> 
                            <button id="search-btn" type = "submit"  name="search" style="font-size:18px">Search</button> 
                        </div>
                    </div>
                    <div class="table" style="max-height: 400px; overflow-y: scroll">
                        <table id="full-tb">

                        </table>
                    </div>
                </div>

                <div class="contact-box" style="max-width:30%">
                    <div class="left"></div>
                        <form> 
                            <div class="right">
                                <div class="s-title">Bill Details</div>
                                <div class="input"><input type="text"  name="custName" placeholder="Customer Name" required></div></br>
                                <div class="input"><input type="text"  name="custAge" placeholder="Customer Age" required></div></br>
                                <div class="input"><input type="text"  name="orderDate" placeholder="Order Date" required></div></br>
                            </div>
                        </form>
                    </div>

                    <div class="table">
                        <table id="selec-tb">
                    
                        </table>
                    </div>
                    <div style="width:100%; text-align: center">
                        <input type="submit" value="Create Bill" class="btn">
                    </div>
                </div>

            </div>
        </div>
</body>
</html>