<?php
    ob_start();
    session_start();

    $status = $error_message = "";
    $bmi = 0;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $age = $_POST["age"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
        $weight = $_POST["weight"];
        $height = $_POST["height"];

        if (empty($nama) || empty($age) || empty($gender) || empty($weight) || empty($height)) {
            $error_message = "<div class='alert alert-danger col-3 mx-auto'>All fields are required. Please fill all required fields and submit again.</div>";
        }

        if ($error_message != "") {
            $_SESSION['error_message'] = $error_message;
            header("Location: bmi_index.php");
            exit;
        }
    }
    
    $bmi = bmiCalculator($weight, $height);

    function bmiCalculator(int $weight, int $height){
        $bmi = round(($weight/((pow($height, 2))/10000)), 2);
        
        return $bmi;
    }
    
    function bmiStatus(float $bmi){
        if ($bmi < 18.5) {
            $status = "Underweight";
            echo "<div class='alert alert-warning col-10 mx-auto'>BMI anda adalah <strong>".$bmi."</strong>, yang berarti berat badan anda <strong>".$status."</strong> dengan tinggi badan anda sekarang .</div>";
        }
        else if ($bmi >= 18.5 && $bmi < 25) {
            $status = "Normal";
            echo "<div class='alert alert-success col-10 mx-auto'>BMI anda adalah <strong>".$bmi."</strong>, yang berarti berat badan anda <strong>".$status."</strong> dengan tinggi badan anda sekarang .</div>";
        }
        else if ($bmi >= 25 && $bmi < 30) {
            $status = "Overweight";
            echo "<div class='alert alert-warning col-10 mx-auto'>BMI anda adalah <strong>".$bmi."</strong>, yang berarti berat badan anda <strong>".$status."</strong> dengan tinggi badan anda sekarang .</div>";
        }
        else if ($bmi > 30) {
            $status = "Obese";
            echo "<div class='alert alert-danger col-10 mx-auto'>BMI anda adalah <strong>".$bmi."</strong>, yang berarti berat badan anda <strong>".$status."</strong> dengan tinggi badan anda sekarang .</div>";
        }
        
        return $status;
    }
    if ($bmi < 18.5) {
        $status = "Underweight";
    }
    else if ($bmi >= 18.5 && $bmi < 25) {
        $status = "Normal";
    }else if ($bmi >= 25 && $bmi < 30) {
        $status = "Overweight";
    }
    else if ($bmi > 30) {
        $status = "Obese";
    }
    if(!isset($_COOKIE['cookie_index'])) {
        setcookie('cookie_index', 0, time()+3600);
        $index = 0;

        $dataArr = array(
            "name" => $nama,
            "age" => $age,
            "gender" => $gender,
            "height" => $height,
            "weight" => $weight,
            "bmi" => $bmi,
            "status" => $status
        );
        setcookie("dataArr[$index]", json_encode($dataArr), time()+3600);
         
    } else {
        setcookie('cookie_index', $_COOKIE['cookie_index'] + 1);
        $index = $_COOKIE['cookie_index'] + 1;

        $dataArr = array(
            "name" => $nama,
            "age" => $age,
            "gender" => $gender,
            "height" => $height,
            "weight" => $weight,
            "bmi" => $bmi,
            "status" => $status
        );
        setcookie("dataArr[$index]", json_encode($dataArr));
    }
    ob_end_flush();
?>
<head>
    <meta charset="utf-8">
    <title>Rumah Yatim & Dhuafa KKMB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
<div>
    @include('layout.spinner')

    @include('layout.navbar')


    <div class="mx-auto">
        <h3 class="text-center my-3">Hasil Ukur BMI</h3>
        <div class="col-3 mx-auto my-2">
            <strong> Untuk informasi yang telah dimasukkan:</strong>
            <p class="my-0">Nama: <?=$nama?></p>
            <p class="my-0">Umur: <?=$age?></p>
            <p class="my-0">Jenis Kelamin: <?php
                 if ($gender == "male") {
                   echo "Laki-laki";
                 } else {
                    echo "Perempuan";
                } ?></p>
            <p class="my-0">Tinggi Badan: <?=$height?></p>
            <p class="my-0">Berat Badan: <?=$weight?></p>
            <div class="mt-3">
                <?php 
                $status = bmiStatus($bmi)
                ?>
            </div>
        </div>

        <div class="col-3 mx-auto my-3">
            <strong>BMI Category</strong>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">BMI</th>
                        <th scope="col">Status</th>
                        <th scppe="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>< 18.5</td>
                        <td>Underweight</td>
                        <td>Kekurangan Berat Badan</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>18.5 - 24.9</td>
                        <td>Normal</td>
                        <td>Berat Badan Sudah Cukup</td>
                    </tr>
                    <tr>
                        <td>25.0 - 29.9</td>
                        <td>Overweight</td>
                        <td>Kelebihan Berat Badan</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>30.0 ke atas</td>
                        <td>Obese</td>
                        <td>Obesitas</td>
                    </tr>
                </tbody>
                <div class="progress my-3">
                    <div class="progress-bar" id="progressBar"></div>
                </div>
        </div>

            </table>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" onclick="location.href='/bmi';">Calculate Again</button>
            <!-- <button type="submit" class="btn btn-primary" onclick="location.href='history_bmi.php';">View History</button> -->
        </div>
    </div>
</div>
</body>

<script>
    
    function updateProgressBar(bmi) {
    var progressBar = document.getElementById('progressBar');
    var maxBmi = 50;
    var progress = Math.min(bmi, maxBmi);

    if (bmi < 18.5) {
        progressBar.style.width = (progress / maxBmi) * 100 + '%';
        progressBar.textContent = progress;
        progressBar.className = 'progress-bar orange';
    } else if (bmi >= 18.5 && bmi < 25) {
        progressBar.style.width = (progress / maxBmi) * 100 + '%';
        progressBar.textContent = progress;
        progressBar.className = 'progress-bar green';
    } else if (bmi >= 25 && bmi < 30) {
        progressBar.style.width = (progress / maxBmi) * 100 + '%';
        progressBar.textContent = progress;
        progressBar.className = 'progress-bar red';
    } else {
        progressBar.style.width = (progress / maxBmi) * 100 + '%';
        progressBar.textContent = progress;
        progressBar.className = 'progress-bar black';
    }
}

    updateProgressBar(<?php echo $bmi; ?>);
</script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>