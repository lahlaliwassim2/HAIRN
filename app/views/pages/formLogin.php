<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="logbag">

    <form action="<?php echo URLROOT; ?>/users/login" method="POST">
        <div class="container mt-5 logbag mb-5">
            <div class="d-flex flex logbag row g-0">
                <div class="col-md-6 mt-3">
                    <div class="card card1 logbag  p-3">
                       
                        <div class="input-field d-flex flex-column mt-3">

                            <input name="email" class="form-control iam <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" placeholder="<?php echo  (!empty($data['email_err'])) ? $data['email_err'] : ' email'; ?>">

                            <input name="password" class="form-control iam <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" placeholder=" <?php echo  !empty($data['password_err']) ? $data['password_err'] : ' password'; ?>">

                            <button name="submit"  class="mt-4 btn btn-dark d-flex justify-content-center align-items-center">Login</button>

                            <div class="mt-3 text1"> <span class="mt-3 forget">Forget Password?</span> </div>

                            <div class="text2 mt-4 d-flex flex-row align-items-center">
                                <span>Don't have an account?<span class="register">Register here</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  mt-3">
                    <div class="card bg-dark   logbag card2 p-3">
                        <div class="image">
                            <img src="https://i.imgur.com/OgCz2Ly.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>