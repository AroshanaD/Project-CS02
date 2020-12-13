<?php
class Inventory extends Controllers
{
    public function __construct()
    {
    }

    public function index()
    {;
        $this->view();
    }

    public function view()
    {
        $this->load('views', 'header');
        if (isset($_GET['view'])) {
            if ($_GET['view'] == 'vendor') {
                $this->load('views', 'view_vendors');
            } else {
                $this->load('views', 'view_inventory');
            }
        } else {
            $this->load('views', 'view_inventory');
        }
        $this->load('views', 'footer');
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

    public function add()
    {
        if (isset($_GET['add'])) {
            if ($_GET['add'] == 'vendor') {
                $this->load('views', 'add_vendor');
            } else {
                $this->load('views', 'add_medicine');
            }
        } else {
            $this->load('views', 'add_medicine');
        }
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

    public function add_vendor()
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

    public function update()
    {
        if ($_GET['update'] == 'medicine') {
            $id = $_GET['id'];
            $model = $this->load('models', 'Inventory_manage');
            $result = $model->displayMedicine($id);
            $_POST['medicine'] = $result;
            $this->load('views', 'update_medicine');
        }
        if ($_GET['update'] == 'vendor') {
            $id = $_GET['id'];
            $model = $this->load('models', 'Inventory_manage');
            $result = $model->displayVendor($id);
            $_POST['details'] = $result;
            $this->load('views', 'update_vendor');
        }
    }

    public function update_medicine()
    {
        $model = $this->load('models', 'Inventory_manage');
        $id = $_POST['id'];
        $name = $_POST['name'];
        $vendor = $_POST['vendor'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $result = $model->update_medicine($id, $name, $description, $vendor, $price, $quantity);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function delete_medicine()
    {
        $id = $_GET['id'];
        $model = $this->load('models', 'Inventory_manage');
        $result = $model->displayMedicine($id);
        $_POST['medicine'] = $result;
        $this->load('views', 'header');
        $this->load('views', 'delete_medicine');
        $this->load('views', 'footer');

        if (isset($_POST['deleteMedicine'])) {
            $medId = $_POST['id'];
            $user = $model->delete($medId);

            $URL = Router::site_url() . "/inventory/view?successfully deleted";
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
