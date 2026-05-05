<?php
session_start();
    class Database{
    static $con;
    public static function  getConnection(){
        if(self::$con == null)
            return new mysqli("localhost","root","","shopping");
        return null;
        }
        public static function query($s){
            return self::getConnection()->query($s);
        }
    }
    function __header($title){
    $s =  '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$title.'</title>
    <link rel = "stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    ';
    echo $s;
}
    function __footer(){
    $s =  '
        <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1c2331"
            >
    <!-- Section: Social media -->
    <section
                class="d-flex justify-content-between p-4"
                style="background-color: #6351ce"
                >
        <!-- Left -->
        <div class="me-5">
        <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
        <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
        </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Company name</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
                <a href="#!" class="text-white">MDBootstrap</a>
            </p>
            <p>
                <a href="#!" class="text-white">MDWordPress</a>
            </p>
            <p>
                <a href="#!" class="text-white">BrandFlow</a>
            </p>
            <p>
                <a href="#!" class="text-white">Bootstrap Angular</a>
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
                <a href="#!" class="text-white">Your Account</a>
            </p>
            <p>
                <a href="#!" class="text-white">Become an Affiliate</a>
            </p>
            <p>
                <a href="#!" class="text-white">Shipping Rates</a>
            </p>
            <p>
                <a href="#!" class="text-white">Help</a>
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
            class="text-center p-3"
            style="background-color: rgba(0, 0, 0, 0.2)"
            >
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/"
            >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
    </footer>

    </body>
    </html>
    ';
    echo $s;
}
function navbar(){
    $s = '
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="assets/icon/logo1.png" width="75" height="75" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 style=margin: 0 auto">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category

            </a>
            <ul class="dropdown-menu">';
              $q = Database::query("select * from categories");
    while($r = $q->fetch_array()){
        $s .= ' <li><a class="dropdown-item" href="index.php?id_category=' . $r['id'] . '"><div class="1r">' . $r['name'] . '</div></a></li>';
    }

    $s .= '</ul>
        </li>';


        if(!isset($_SESSION['user']))
            $s .= '<li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>';
        else{
        $s .= '
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hi ' . splitName($_SESSION['user']['name']) . '
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
            </li>';
        }



            $s.='<li class="nav-item">
            <a class="nav-link" href="#">
            <img src="assets/icon/cart.png" width="25" height="25" alt="cart">
            <i>0</i>
            </a>
        </li>



        </ul>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </div>
</nav>
    ';
    echo $s;
}
function jumbotron(){
    $s = '
    <div class="bg-primary text-white py-5">
        <div class="container py-5">
            <h1>';

    if(!isset($_GET['id_category'])){
        $s .= 'Best category & products <br /> in our store';
    } else {
        $id = (int)$_GET['id_category'];
        // Query đúng bảng categories
        $q = Database::query("SELECT * FROM categories WHERE id = $id");
        $s .= 'Best' .$q->fetch_array()['name'].'<br/> in our store';
        if($r = $q->fetch_array()){
            $s .= 'Best ' . $r['name'] . ' <br /> in our store';
        } else {
            $s .= 'Category not found';
        }
    }

    $s .= '</h1>
            <p>Trendy Products, Factory Prices, Excellent Service</p>
            <button type="button" class="btn btn-outline-light">
                Learn more
            </button>
            <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
                <span class="pt-1">Purchase now</span>
            </button>
        </div>
    </div>
    ';

    echo $s;
}
function body(){
    $s = '';

    if(!isset($_GET['id_category'])){
        $q = Database::query("SELECT * FROM categories");
    } else {
        $id = (int)$_GET['id_category'];
        $q = Database::query("SELECT * FROM categories WHERE id = $id");
    }

    while($r = $q->fetch_array()){
        $s .= '<section>
                <div class="container my-5">
                    <header class="mb-4">
                        <h3>'.$r['name'].'</h3>
                    </header>
                    <div class="row">';

        // Query đúng
        $q1 = Database::query(
            "SELECT * FROM products
             WHERE status = true AND id_category = ".$r['id']
        );

        while($r1 = $q1->fetch_array()){
            $s .= '<div class="col-lg-3 col-md-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="assets/images/'.$r1['image'].'" class="card-img-top" style="aspect-ratio: 1/1" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-type">'.$r1['name'].'</h5>
                                <p class="card-text">'.$r1['price'].' VNĐ</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>';
        }

        $s .= '</div>
                </div>
            </section>';
    }

    echo $s;
}
function login(){
    if(isset($_POST['emailphone']) && isset($_POST['password'])){

        $emailphone = $_POST['emailphone'];
        $password = $_POST['password'];

        $q = Database::query("
            SELECT * FROM users
            WHERE (email='$emailphone' OR phone='$emailphone')
            AND password='$password'
        ");

        $r = $q->fetch_assoc();

        if($r){
            if($r['role'] == 'admin'){
                header("location: admin.php");
                exit();
            }else{
                $_SESSION['user'] = $r;
                header("location: index.php");
                exit();
            }
        }else{
            $_SESSION['login_fail'] = 'Dữ liệu không chính xác!!';
            header("location: login.php");
            exit();
        }
    }
    $s = '
    <section class="vh-100">
    <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <form action = "" method = "post">


            <h2 style = "padding: 40px 0 25px 0">Login Information</h2>';

        if(!empty($_SESSION['login_fail'])){
    $s .= '<div style="color:red; margin-bottom:10px;">' . $_SESSION['login_fail'] . '</div>';
    unset($_SESSION['login_fail']);
}
            $s.='<!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="emailphone" class="form-control form-control-lg"
    placeholder="Enter a valid email or phone number" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" name="password" class="form-control form-control-lg"
                placeholder="Enter password" />

            </div>

            <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                Remember me
                </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don\'t have an account? <a href="register.php"
                class="link-danger">Register</a></p>
            </div>

        </form>
        </div>
    </div>
    </div>
    <div
    <!-- Right -->
    <div>
        <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
        </a>
    </div>
    <!-- Right -->
    </div>
</section>
    ';
    echo $s;
}
function splitName($str) { // từ cuối cùng của chuỗi họ tên
    $rs = NULL; // cái này cũng giúp kiểm tra chuỗi có ít nhất 2 từ hay không
    //nếu chỉ có một từ, nó sẽ trả về kết quả NULL
    $word = mb_split(' ', $str); // tách từ
    $n = count($word)-1; // lấy vị trí mảng của từ cuối cùng
    if ($n > 0) {$rs = $word[$n];} // lấy từ cuối cùng

return $rs;
}
function register() {
    $errName = $errEmail = $errPhone = $errPass = $errRePass = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            $errName = 'Name is not empty!';
        }
        if (empty($_POST['email'])) {
            $errEmail = 'Email is not empty!';
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = "Invalid email format!";
        }
        if (empty($_POST['phone'])) {
            $errPhone = 'Phone is not empty!';
        } else if (!preg_match('/^[0-9]{10}$/', $_POST['phone'])) {
            $errPhone = "Phone number must have 10 digits!";
        }
        if (empty($_POST['pass'])) {
            $errPass = 'Password is not empty!';
        }
        if (empty($_POST['retpass'])) {
            $errRePass = 'RePass is not empty!';
        } else if ($_POST['pass'] != $_POST['retpass']) {
            $errRePass = "Not match password!";
        }

        if ($errName == '' && $errEmail == '' && $errPhone == '' && $errPass == '' && $errRePass == '') {
            $q = Database::query("
                INSERT INTO users(name, email, phone, password, role)
                VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['pass']."','')
            ");
            $q = Database::query("
                SELECT * FROM users
                WHERE name = '".$_POST['name']."' AND password='".$_POST['pass']."'
            ");
            $_SESSION['user'] = $q->fetch_array();
            header("Location: index.php");
            exit();
        }
    }
    $s = '
    <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-3">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action ="" method = "post">

                    <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Your Name</label>
                        <input type="text" name="name" class="form-control" />
                        <span style="color:red;"><?php echo $errName; ?></span>
                    </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your Email</label>
                        <input type="text" name="email" class="form-control" />
                        <span style = "color:red;"><?php echo $errEmail; ?></span>
                    </div>
                    </div>

                     <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your Phone</label>
                        <input type="text" name="phone" class="form-control" />
                        <span style = "color:red;"><?php echo $errPhone; ?></span>
                    </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Password</label>
                        <input type="password" id="pass" class="form-control" />
                        <span style = "color:red;"><?php echo $errPass; ?></span>
                    </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4cd">Retype password</label>
                        <input type="password" id="retpass" class="form-control" />
                        <span style = "color:red;"><?php echo $errRePass; ?></span>
                    </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-3">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Register</button>
                    </div>

                </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
';
        echo $s;
}
?>
