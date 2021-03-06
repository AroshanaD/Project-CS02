<?php

class Labtest extends Controllers
{

    public function __construct()
    {
    }

    public function add()
    {
        $this->load('views', 'add_test');
    }

    public function add_test()
    {
        $model = $this->load('models', 'Labtest_manage');

        $name = $_POST['name'];
        $description = $_POST['description'];
        $cost = $_POST['cost'];

        $result = $model->add($name, $cost, $description);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function view()
    {
        $this->load('views', 'view_test');
    }

    public function get_view()
    {
        $model = $this->load('models', 'Labtest_manage');
        $result = $model->view();

        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function search()
    {
        $model = $this->load('models', 'Labtest_manage');
        $name = $_POST['name'];
        $result = $model->search($name);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function update()
    {
        $id = $_GET['id'];
        $model = $this->load('models', 'Labtest_manage');
        $result = $model->displayById($id);
        $_POST['test'] = $result;
        $this->load('views', 'update_test');
    }

    public function update_test()
    {
        $model = $this->load('models', 'Labtest_manage');
        $id = $_POST['id'];
        $description = $_POST['description'];
        $price = $_POST['cost'];

        $result = $model->update($id, $price, $description);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $_GET['id'];
        $model = $this->load('models', 'Labtest_manage');
        $result = $model->displayById($id);
        $_POST['test'] = $result;
        $this->load('views', 'delete_test');

        if (isset($_POST['Delete'])) {
            $result = $model->delete($id);
            if ($result == TRUE) {
                $URL = Router::site_url() . "/labtest/view?successfully deleted";
                echo "<script>location.href='$URL'</script>";
            } else {
                $URL = Router::site_url() . "/labtest/view?something went wrong";
                echo "<script>location.href='$URL'</script>";
            }
        }
    }
}
