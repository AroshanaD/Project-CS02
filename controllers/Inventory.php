<?php
class Inventory extends Controllers
{
    public function __construct()
    {
    }

    public function index()
    {;
        $this->view_stock();
    }

    public function add_grn()
    {
        $model = $this->load('models', 'Inventory_manage');
        $result = $model->get_lastid();
        $_POST['grn'] = $result['grn_id'] + 1;
        $this->load('views', 'add_medicine_grn');
    }

    public function view_stock()
    {
        $this->load('views', 'view_stock');
    }

    public function add_new_grn()
    {
        $model = $this->load('models', 'Inventory_manage');

        $vendor = $_POST['vendor'];
        $no_items = $_POST['no_items'];
        $grn_value = $_POST['grn_value'];
        $note = $_POST['note'];
        $receiver_cat = $_SESSION['user_cat'];
        $receiver_id = $_SESSION['id'];
        $medicine_list = $_POST['medicine_list'];

        $status = $model->add_stock($vendor, $no_items, $grn_value, $receiver_cat, $receiver_id, $note, $medicine_list);
        header('Content-Type: application/json');
        echo json_encode($status);

        /*if ($status == TRUE) {
            $grn_id = $model->get_lastid()['grn_id'];
            foreach ($medicine_list as $medicine) {
                $model->add_medicine($grn_id, $medicine);
            }
            header('Content-Type: application/json');
            echo json_encode(TRUE);
        } else {
            header('Content-Type: application/json');
            echo json_encode(FALSE);
        }*/
    }

    public function view_vendor()
    {
        $this->load('views', 'view_vendors');
    }

    public function get_stock()
    {
        $model = $this->load('models', 'Inventory_manage');
        $result = $model->view_stock();

        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function get_vendors()
    {
        $model = $this->load('models', 'Inventory_manage');
        $result = $model->view_vendors();

        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function add_vendor()
    {
        $this->load('views', 'add_vendor');
    }

    public function add_new_vendor()
    {
        $model = $this->load('models', 'Inventory_manage');

        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        $result = $model->add_vendor($name, $address, $contact, $email);

        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function update_vendor()
    {
        $id = $_GET['id'];
        $model = $this->load('models', 'Inventory_manage');
        $result = $model->displayVendor($id);
        $_POST['details'] = $result;
        $this->load('views', 'update_vendor');
    }

    public function update_vendor_details()
    {
        $id = $_POST['id'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        $model = $this->load('models', 'Inventory_manage');
        $result = $model->update_vendor($id, $address, $contact, $email);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function view_stock_item()
    {
        $model = $this->load('models', 'Inventory_manage');
        $br_id = $_GET['br_id'];
        $result = $model->view_stock_item($br_id);
        if ($result == true) {
            $URL = Router::site_url() . "/inventory/view_stock?successfully removed stock item";
            echo "<script>location.href='$URL'</script>";
        } else {
            $URL = Router::site_url() . "/inventory/view_vendor?could not remove stock item";
            echo "<script>location.href='$URL'</script>";
        }
    }

    public function delete_vendor()
    {
        $id = $_GET['id'];
        $model = $this->load('models', 'Inventory_manage');
        $result = $model->displayVendor($id);
        $_POST['details'] = $result;
        $this->load('views', 'header');
        $this->load('views', 'delete_vendor');
        $this->load('views', 'footer');

        if (isset($_POST['Delete'])) {
            $status = $model->delete_vendor($id);

            $URL = Router::site_url() . "/inventory/view_vendor?successfully deleted";
            echo "<script>location.href='$URL'</script>";
        }
    }


    public function create_bill()
    {
        $this->load('views', 'create_bill');
    }

    public function add_bill()
    {
        $model = $this->load('models', 'Inventory_manage');

        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $no_items = $_POST['no_items'];
        $cost = $_POST['cost'];
        $receptionist_id = $_SESSION['id'];
        $medicine_list = $_POST['medicine_list'];

        $status = $model->add_bill($id, $name, $age, $receptionist_id, $no_items, $cost, $medicine_list);
        header('Content-Type: application/json');
        echo json_encode($status);

        /*$status = $model->add_bill_details($id, $name, $age, $receptionist_id, $no_items, $cost, $note);
        if ($status == TRUE) {
            $sales_id = $model->get_last_salesid()['sales_id'];
            foreach ($medicine_list as $medicine) {
                $model->add_bill_list($sales_id, $medicine);
            }
            header('Content-Type: application/json');
            echo json_encode(TRUE);
        } else {
            header('Content-Type: application/json');
            echo json_encode(FALSE);
        }*/
    }

    public function search_medicine()
    {
        $model = $this->load('models', 'Inventory_manage');
        $name = $_POST['name'];
        $result = $model->search_medicine($name);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function search_vendor()
    {
        $model = $this->load('models', 'Inventory_manage');
        $name = $_POST['name'];
        $result = $model->search_vendor($name);
        header('Content-Type: application/json');
        echo json_encode($result);
    }
}
