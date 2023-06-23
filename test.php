<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <!-- render all elements normally -->
    <link rel="stylesheet" href="../Css/normalize.css">
    <!-- font awesome library -->
    <link rel="stylesheet" href="../Css/all.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Andada+Pro:wght@400;500;600;700;800&family=Crete+Round&family=Montserrat:wght@300&family=Open+Sans:wght@700&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,700&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body data-bs-theme="dark">
    <h1 class="text-center">Student Management System</h1>
    <div class="container">
    
    <?php
// Usage example:
require_once './Classes/Student.php';
require_once './Classes/Course.php';
require_once './Traits/Loggable.php';
require_once './Manager.php';

use Classes\Student;
use Classes\Course;


$manager = new Manager();

$course1 = new Course('php');
$course2 = new Course('Laravel');
$course3 = new Course('Javascript');
$course4 = new Course('Java');
$course5 = new Course('c++');

$student1 = new Student('Heba' , 'heba@gmail.com' , $course1 , $course2 , $course4);
$student2 = new Student('Fatma' , 'fatma@gmail.com' , $course2 , $course4);
$student3 = new Student('Noura' , 'noura@gmail.com' ,$course2 , $course4 , $course5);
$student4 = new Student('Ruba' , 'ruba@gmail.com' , $course1 , $course5);
$student5 = new Student('Shatha' , 'shatha@gmail.com' , $course3 , $course4 , $course5);

// Add students
$manager->addStudent($student1);
$manager->addStudent($student2);
$manager->addStudent($student3);
$manager->addStudent($student4);
$manager->addStudent($student5);

// Retrieve the student who have an id of 2
$StudentByIs2=$manager->getStudent(2);
if($StudentByIs2 !== null){
    echo "<h5>The name of student have an id of ".$StudentByIs2->getID()." is : ".$StudentByIs2->getName().' </h5><br>';
}else{
    echo "The student not found";
}

// Update student4
$manager->updateStudentDetails($student4 , 'Marah' , 'marah@gmail.com');

// delete student1
$manager->deleteStudent($student1);

// delete student2
$manager->deleteStudent($student2);?>
<?php
    foreach($manager->getStudentsArray() as $student){?>
        <div class="container shadow-sm p-3 mb-5 bg-body-tertiary rounded ">
            <div class="info d-flex justify-content-between align-items-center my-2">
                <?php echo "<h3>The name of student is : ".$student->getName().'</h3><br>';?>
                <span class="badge text-bg-info p-2 fs-6">ID: <?php echo $student->getID();?></span>
            </div>
            <?php
            echo "<h6 class='p-0 m-0'>Email : ". $student->getEmail().'</h6><br>';
            echo "<h6 class='p-0 m-0'>Courses : ".'</h6><br>';
            foreach($student->getCourses() as $course){?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $course->getName()?></li>
                </ul>
            <?php
        }?>
        </div>
        <?php
    }
        ?>
              
</div>
<script src="../Javascript/bootstrap.bundle.min.js"></script>
</body>
</html>



