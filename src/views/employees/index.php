<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1951060567_employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <!--  -->
    <header class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Quản lý nhân viên - Dương Văn Công</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Thông tin</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Tài khoản
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--  -->
    <main class="container">
        <div class="row">
            <?php
            if (isset($_GET['success'])) {
                echo "<h4 style='color:red;'> {$_GET['success']} </h4>";
              }
            if (isset($_GET['error'])) {
                echo "<h4 style='color:red;'> {$_GET['error']} </h4>";
            }
            ?>
            <h2>Danh sách nhân viên</h2>
            <a class="btn btn-primary mb-2" style="width: fit-content;" href="#"><i class="bi bi-person-plus"></i>Thêm nhân viên</a>
            <table class="table table-hover table-sm">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Mã nhân viên</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Phòng ban</th>
                        <th scope="col">Lương</th>
                        <th scope="col">Ngày vào làm</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($employees as $employee) {
                        echo "<tr>
                    <td scop='row'> {$employee['maNV']} </td>
                    <td>{$employee['hovaten']}</td>
                    <td>{$employee['chucvu']}</td>
                    <td>{$employee['phongban']}</td>
                    <td>{$employee['luong']}</td>
                    <td>{$employee['ngayvaolam']}</td>
                    <td>
                    <a href=''><i class='bi bi-pencil-square'></i>Sửa</a>
                    <a class='text-danger' href='index.php?controller=employee&action=delete&manv={$employee['maNV']}'><i class='ms-2 bi bi-trash text-danger'></i>Xóa</a>
                    </td>

                    </tr>";
                    }


                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <!--  -->


    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>