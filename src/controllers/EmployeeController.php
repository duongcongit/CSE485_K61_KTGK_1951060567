<?php
    require_once 'models/EmployeeModel.php';

    class EmployeeController{
        function index(){
            $employeeModel = new EmployeeModel();
            $employees = $employeeModel->index();

            require_once 'views/employees/index.php';

        }
    }

?>