<?php include_once 'config/init.php'; ?>

<?php

$job = new job;

if (isset($_POST['submit'])){
    //Create Data Arraay

    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if ($job->create($data)){
        redirect('index.php','Your Job Has been listed','success');
    }
    else{
        redirect('index.php','Something went wrong','error');
    }
}


$template = new Template('templates/job-create.php');

$category = isset($_GET['category']) ? $_GET['category']:null;


$template->categories = $job->getCategories();
echo $template;