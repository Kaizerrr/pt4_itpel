<?php

    require_once('connect.php');
 
    
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    $message = array();

    $student_no = $data['student_no'];
    $student_name = $data['student_name'];
    $student_add = $data['student_add'];
    $student_course = $data['student_course'];
    $student_year = $data['student_year'];
 
    

    $query = "INSERT INTO students(`student_no`, `student_name`, `student_add`, `student_course`, `student_year`) VALUES ('$student_no', '$student_name', '$student_add', '$student_course', '$student_year')";
    $result = mysqli_query($con, $query);



    if($result){
        http_response_code(201);
        $message['status'] = "Success";
    }else{
        http_response_code(201);
        $message['status'] = "Error";
    }

    echo json_encode ($message);
    echo mysqli_error($con);

?>