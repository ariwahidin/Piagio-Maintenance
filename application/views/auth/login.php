<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign In | Yamaha Motor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('jar/html/default/') ?>assets/images/yusen-kotak.jpg">
    <!--Swiper slider css-->
    <link href="<?= base_url('jar/html/default/') ?>assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="<?= base_url('jar/html/default/') ?>assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?= base_url('jar/html/default/') ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('jar/html/default/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('jar/html/default/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= base_url('jar/html/default/') ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <style>
        #logo {
            border-radius: 10%;
        }
    </style>
</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="swiper default-swiper rounded swiper-initialized swiper-horizontal swiper-backface-hidden">
                                        <div class="swiper-wrapper" id="" aria-live="off">
                                            <div class="swiper-slide swiper-slide-active" role="group" data-swiper-slide-index="1" style="width: 400px;">
                                                <img src="<?= base_url('jar/html/default/') ?>assets/images/small/aerox.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" role="group" data-swiper-slide-index="2" style="width: 400px;">
                                                <img src="<?= base_url('jar/html/default/') ?>assets/images/small/xsr.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" role="group" data-swiper-slide-index="2" style="width: 400px;">
                                                <img src="<?= base_url('jar/html/default/') ?>assets/images/small/mxking.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" role="group" data-swiper-slide-index="3" style="width: 400px;">
                                                <img src="<?= base_url('jar/html/default/') ?>assets/images/small/xmax.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" role="group" data-swiper-slide-index="0" style="width: 400px;">
                                                <img src="<?= base_url('jar/html/default/') ?>assets/images/small/nmax.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" role="group" data-swiper-slide-index="0" style="width: 400px;">
                                                <img src="<?= base_url('jar/html/default/') ?>assets/images/small/filano.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <!-- <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span> -->
                                    </div>
                                    <!-- <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    <h3 class="text-white mb-1">
                                                        <img id="logo" src="<?= base_url('jar/html/default/') ?>assets/images/yusen-kotak.jpg" alt="" height="60">
                                                        <span style="text-decoration: underline;">Yamaha Motor Indonesia</span>
                                                    </h3>
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <img id="logo" src="<?= base_url('jar/html/default/') ?>assets/images/small/yusen-logistics.png" alt="" height="60">
                                            <!-- <h5 class="text-primary">Indonesia</h5> -->
                                            <!-- <p class="text-muted">Indonesia.</p> -->
                                        </div>

                                        <div class="mt-4">
                                            <form id="loginForm">

                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Enter username" autocomplete="off">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <!-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                </div> -->

                                                <div class="mt-4">
                                                    <button id="loginButton" class="btn btn-success w-100" type="submit">Sign In</button>
                                                </div>

                                                <div id="failedAlert" style="display: none;" class="mt-4">
                                                    <div class="alert alert-danger mb-xl-0" role="alert">
                                                        <strong> Login gagal! </strong> username atau password salah
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <!-- <p class="mb-0">Don't have an account ? <a href="auth-signup-cover.html" class="fw-semibold text-primary text-decoration-underline"> Signup</a> </p> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <!-- <p class="mb-0">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('jar/html/default/') ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('jar/html/default/') ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url('jar/html/default/') ?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?= base_url('jar/html/default/') ?>assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?= base_url('jar/html/default/') ?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?= base_url('jar/html/default/') ?>assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="<?= base_url('jar/html/default/') ?>assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- swiper.init js -->
    <script src="<?= base_url('jar/html/default/') ?>assets/js/pages/swiper.init.js"></script>

    <!-- password-addon init -->
    <script src="<?= base_url('jar/html/default/') ?>assets/js/pages/password-addon.init.js"></script>

    <script>
        document.getElementById("username").focus()
        document.getElementById("username").addEventListener("keyup", function(e) {
            if (e.key == "Enter") {
                document.getElementById("password").focus()
            }
        })
        async function loginUser(event) {
            event.preventDefault(); // Mencegah pengiriman form default

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Periksa apakah username atau password kosong sebelum melakukan login
            if (username.trim() === '' || password.trim() === '') {
                console.error('Username dan password harus diisi.');
                return; // Menghentikan fungsi jika ada yang kosong
            }

            const data = {
                username: username,
                password: password
            };

            try {
                const response = await fetch("<?= base_url('auth/proses') ?>", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    const responseData = await response.json();
                    if (responseData.success === true) {
                        dashboard(responseData); // Panggil fungsi dashboard jika success adalah true
                    } else {
                        console.error('Login gagal:', responseData.message);
                        document.getElementById("failedAlert").style.display = "block"
                    }
                } else {
                    console.error('Login gagal:', response.status);
                }
            } catch (error) {
                console.error('Terjadi kesalahan:', error);
            }
        }

        function dashboard(data) {
            // Tambahkan logika dashboard sesuai kebutuhan Anda
            console.log('Menampilkan dashboard:', data);

            // Alihkan ke halaman dashboard jika login berhasil
            if (data.success === true) {
                window.location.href = "<?= base_url('inbound/index') ?>"; // Ganti dengan URL halaman dashboard yang sesuai
            }
        }

        const loginForm = document.getElementById('loginForm');
        loginForm.addEventListener('submit', loginUser);
    </script>
</body>

</html>