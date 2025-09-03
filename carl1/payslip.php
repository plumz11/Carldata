<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payslip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white text-center py-3">
    <h4 class="mb-0">Employee Payslip</h4>
        </div>

        <div class="card-body">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $employeename = $_POST['employeename'];
                $totaldaysofwork = $_POST['totaldaysofwork'];
                $dailyrate = $_POST['dailyrate'];
                $cashadvance = $_POST['cashadvance'];

                
                $grosspay = $totaldaysofwork * $dailyrate;
                $tax = $grosspay * 0.02;
                $sss = $grosspay * 0.015;
                $pagibig = 50;
                $totaldeductions = $tax + $sss + $pagibig + $cashadvance;
                $netpay = $grosspay - $totaldeductions;
            } else {
                echo "<div class='alert alert-danger'>No Data Received.</div>";
                exit;
            }
            ?>

<!-- Employee Info -->
        <div class="mb-3">
            <p><strong>Employee Name:</strong> <?php echo $employeename; ?></p>
            <p><strong>Total Days Worked:</strong> <?php echo $totaldaysofwork; ?></p>
            <p><strong>Daily Rate:</strong> ₱<?php echo number_format($dailyrate, 2); ?></p>
        </div>

<!-- Payroll Details -->
        <div class="mb-3">
            <p><strong>Gross Pay:</strong> ₱<?php echo number_format($grosspay, 2); ?></p>
            <p><strong>Tax (2%):</strong> ₱<?php echo number_format($tax, 2); ?></p>
            <p><strong>SSS (1.5%):</strong> ₱<?php echo number_format($sss, 2); ?></p>
            <p><strong>Pag-IBIG:</strong> ₱<?php echo number_format($pagibig, 2); ?></p>
            <p><strong>Cash Advance:</strong> ₱<?php echo number_format($cashadvance, 2); ?></p>
        </div>

<!-- Net Pay -->
        <div>
            <p><strong>Total Deduction:</strong> ₱<?php echo number_format($totaldeductions, 2); ?></p>
            <p class="text-success fw-bold"><strong>Net Pay:</strong> ₱<?php echo number_format($netpay, 2); ?></p>
        </div>


            <!-- Buttons -->
            <div class="mt-4">
                <a href="calculator.php" class="btn btn-secondary">Back</a>
                <button onclick="window.print()" class="btn btn-primary">Print Payslip</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
