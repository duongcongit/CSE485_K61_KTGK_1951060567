<?php
    require_once 'configs/db.php';

    class EmployeeModel{
        private $employeeId;
        private $employeeName;

        public function index(){
            $connection = $this->connectDb();
            // Truy vấn lấy dữ liệu
            $querySelect = "SELECT * FROM nhanvien";
            $results = mysqli_query($connection, $querySelect);
            $arr_employees = [];
            if (mysqli_num_rows($results) > 0) {
                $arr_employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }
            $this->closeDb($connection);

            return $arr_employees;
        }

        // Xóa
        function deleteEmployee($manv = null){
            $connection = $this->connectDb();

            $sqlDel = "DELETE FROM nhanvien WHERE maNV='$manv'";
            $isDelete = mysqli_query($connection, $sqlDel);

            $this->closeDb($connection);

            return $isDelete;

        }



        //
        public function connectDb() {
            $connection = mysqli_connect(DB_HOST,
                DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    }

?>