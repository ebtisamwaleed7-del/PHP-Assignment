<?php

$students = [
    [
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10007',
        'stdName' => 'Mohammed Ahmed',
        'stdEmail' => 'mohamed@gmail.com',
        'stdGAP' => 98.7
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Table</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Students Information</h2>
    
  
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark text-center">
            <tr>
                <th>Student No</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>GPA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student): ?>
                <tr>
                    <td><?= $student['stdNo']; ?></td>
                    <td><?= $student['stdName']; ?></td>
                    <td><?= $student['stdEmail']; ?></td>
                    <td><?= $student['stdGAP']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    
    <div class="alert alert-info text-center fw-bold">
        Total Students: <?= count($students); ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
