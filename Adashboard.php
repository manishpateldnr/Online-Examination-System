<?php
session_start();
// if (!isset($_SESSION['loged_in']) || $_SESSION['loged_in'] !== true || $_SESSION['user_type'] !== 'student') {
//     // Redirect to login page or show error message
//     header("Location: Slogin.php");
//     exit;
// }
include_once "./db/db.php";

if (isset($_SESSION['msg'])) {
    $message = $_SESSION['msg'];
    echo "<script>alert('$message');</script>";
}
unset($_SESSION['msg']);

// SQL query
$sql = "SELECT id,name , email,reg_no,sec,dept,course FROM students";
$result = $conn->query($sql);
// Initialize an empty array to store the results
$students = [];

// Fetch data and store in the array

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "./layout/hlink.php"?>
    <title>Student </title>
    <style>
        .left-side{
            height: 89vh;
        }
        .right-side{
            height: 89vh;
            overflow: auto;
            overflow-x:hidden;
        }
    </style>
</head>

<body>
    <?php include_once './layout/navbar.php'; ?>

    <section class="body d-flex w-100">
        <div class="left-side col-3 bg-success-subtle">
            <div class="container d-flex flex-column  mt-5">
                <a class="btn btn-success mt-3" href="#">All Students</a>
                <a class="btn btn-primary mt-3" href="./Facultylist.php">All Faculties</a>
                <a class="btn btn-primary mt-3" href="./Subjectlist.php">All Subjects</a>
            </div>
        </div>
        <div class="right-side col-9 ">
            <div class="container d-flex flex-column"> 
                <div class="row  mt-4 d-flex justify-content-around align-items-center ">
                    <h3 class="col text-center">Students</h3>
                    <div class="col">
                        <a href="Addstudent.php" class="btn btn-primary">Add student</a>
                    </div>
                </div>
            <?php foreach ($students as $student): ?>
                <div class="row bg-success-subtle m-4 p-2 rounded shadow">
                    <div class="col-4">
                        <p>Reg : <?php echo $student['reg_no']; ?></p>
                        <p>Name: <?php echo $student['name']; ?></p>
                    </div>
                    <div class="col-4">
                        <p>Email : <?php echo $student['email']; ?></p>
                        <p>Branch : <?php echo $student['dept'].' '.$student['course']; ?></p>
                    </div>
                    <div class="col-4">
                        <p>Section : <?php echo $student['sec']; ?></p>
                        <button class="btn btn-primary" >Edit</button>
                        <!-- <a href="Editstudent.php?student_id=<?php echo $student['id']; ?>" class="btn btn-primary">Edit</a> -->
                    </div>
                </div>
            <?php endforeach; ?>
                
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>