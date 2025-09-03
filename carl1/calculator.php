<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Payroll Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center py-3">
            <h4 class="mb-0"> Payroll Calculator </h4>
        </div>
        <div class="card-body">
            <form action="payslip.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Employee Name</label>
                    <input type="text" name="employeename" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Total Days Worked</label>
                    <input type="number" name="totaldaysofwork" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Daily Rate (₱)</label>
                    <input type="number" name="dailyrate" step="0.01" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Cash Advance (₱)</label>
                    <input type="number" name="cashadvance" step="0.01" class="form-control" value="0">
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success">Generate Payslip</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>