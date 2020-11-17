<?php 

function alert($date,$color="danger"){
    return "<p class='alert alert-$color'>$data</p>";
}

function runQuery($sql){
    if(mysqli_query(con(),$sql)){
        return true;
    }else{
        die("Query Fail : ".mysqli_error());
    }
}

// submit start

function submit(){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO contact(name,email,phone) VALUES('$name','$email','$phone')";
    
    runQuery($sql);
}

function fetchAll($sql){
    $query = mysqli_query(con(),$sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)){
        array_push($rows,$row);
    }
    return $rows;
}

function fetch($sql){
    $query = mysqli_query(con(),$sql);
    $row = mysqli_fetch_assoc($query);   
        return $row;
}

function contact($id){
    $sql = "SELECT * FROM user WHERE id=$id";
    return fetch($sql); 
}

function contacts(){
    $sql = "SELECT * FROM user";
    return fetchAll($sql); 
}

//submit end

//validation start

function textFilter($text){
    $text = trim($text);
    $text = htmlentities($text, ENT_QUOTES);
    $text = stripcslashes($text);
    return $text;
}

function register(){
    
    $errorStatus = 0;
    $name = "";
    $email = "";

    if (empty($_POST['name'])){
        setError("name","Name is required");
        $errorStatus = 1;
    }else{
        if(strlen($_POST['name']) < 5){
            setError("name","Name is too short");
            $errorStatus = 1;
        }else{
            if(strlen($_POST['name']) > 20){
                setError("name","Name is too long");
                $errorStatus = 1;
            }else{
                if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
                    setError('name',"Only letters and white space allowed");
                    $errorStatus = 1;
                }else{
                    $name = textFilter($_POST['name']);
                }
            }
        }
    }

    if (empty($_POST['email'])){
        setError("email","Email is required");
        $errorStatus = 1;
    }else{
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            setError("email","Email format incorrect");
            $errorStatus = 1;
        }else{
            $email = textFilter($_POST['email']);
        }
    }

    if (empty($_POST['phone'])){
        setError("phone","Phone is required");
        $errorStatus = 1;
    }else{
        if(!preg_match("/^[0-9 ]*$/",$_POST['name'])){
            setError("phone","Phone format incorrect");
            $errorStatus = 1;
        }else{
            $phone = textFilter($_POST['phone']);
        }
    }
    

    if(!$errorStatus){
        print_r($_POST);
    }
}

function old($inputName){
    if(isset($_POST[$inputName])){
        echo $_POST[$inputName];
    }else{
        echo "";
    }
}

function setError($inputName,$message){
    $_SESSION['error'][$inputName] = $message;
}

function getError($inputName){
    if(isset($_SESSION['error'][$inputName])){
        return $_SESSION['error'][$inputName];
    }else{
        return "";
    }
}

// $supportFileType = ['image/jpg','image/png'];
// $tempFile = $_FILES['upload']['tmp_name'];
// $fileName = $_FILES['upload']['name'];

// if($_FILES['upload']['name']){
//     print_r($_FILES);
//     if(in_array($_FILES['upload']['type'],$supportFileType)){
//         $saveFolder = "store/";
//         if(move_uploaded_file($tempfiel,$saveFolder.uniqid()."_".$fileName)){
//             header("location:index.php");
//         }
//     }else{
//         setError("upload","File Incorrect");
//         $errorStatus = 1;
//     }
    
// }else{
//     setError("file","File is required");
//     $errorStatus = 1;
// }

// if(!$errorStatus){
//     print_r($_POST);
//     print_r($_FILES);
// }

function clearError(){
    $_SESSION['error'] = [];
}
//validation end