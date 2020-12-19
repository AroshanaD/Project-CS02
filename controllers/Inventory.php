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
    }

    public function view_vendor()
    {
        $this->load('views', 'view_vendors');
    }

    public function get_medicine()
    {
        $model = $this->load('models', 'Inventory_manage');
        $result = $model->view_medicine();

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

    public function add_medicine()
    {
        $model = $this->load('models', 'Inventory_manage');

        $name = $_POST['name'];
        $vendor = $_POST['vendor'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $result = $model->add_medicine($name, $description, $vendor, $price, $quantity);

        header('Content-Type: application/json');
        echo json_encode($result);
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
            $id = $_POST['id'];
            $status = $model->delete_vendor($id);

            $URL = Router::site_url() . "/inventory/view?view=vendor?successfully deleted";
            echo "<script>location.href='$URL'</script>";
        }
    }


    public function create_bill()
    {
        $this->load('views', 'create_bill');
    }

    public function search_medicine()
    {
        $model = $this->load('models', 'Inventory_manage');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $result = $model->search($id, $name);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function search_vendor()
    {
        $model = $this->load('models', 'Inventory_manage');
        $name = $_POST['name'];
        $result = $model->search($name);
        header('Content-Type: application/json');
        echo json_encode($result);
    }
}
