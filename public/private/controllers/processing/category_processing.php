<?php 
    session_start();
    require_once '../../models/dbConnect.php';

    if (isset($_POST['addNewCategoryBtn'])) 
    {
        $categoryName = $_POST['categoryName'];

        $query = "INSERT INTO categories (categoryName) VALUES (:categoryName)";
        $queryRun = $conn->prepare($query);

        $data = [':categoryName' => $categoryName];
        $queryExecute = $queryRun->execute($data);

        if ($queryExecute) 
        {
            $_SESSION['message'] = 'New category inserted successfully!';
            header('Location: ../../views/category.php');
            exit(0);
        } 
        else {
            $_SESSION['message'] = 'Not inserted';
            header('Location: ../../views/category.php');
            exit(0);
        } 
    }

?>