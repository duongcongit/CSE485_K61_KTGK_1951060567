<?php
    require_once 'models/EmployeeModel.php';

    class EmployeeController{
        function index(){
            $employeeModel = new EmployeeModel();
            $employees = $employeeModel->index();

            require_once 'views/employees/index.php';

        }

        //
        function delete(){
            $manv = $_GET['manv'];
    
            $employee = new EmployeeModel();
            $isDelete = $employee->deleteEmployee($manv);

            if ($isDelete) {
                $success = "Xóa bản ghi #$manv thành công";
                header("location: index.php?result=$success");
            }
            else {
                //báo lỗi
                $error = "Xóa bản ghi #$manv thất bại";
                header("location: index.php?result=$error");
            }
    
    
            exit();

        }
    }

?>