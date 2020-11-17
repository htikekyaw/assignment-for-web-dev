<?php require_once "base.php"; ?>
<?php require_once "function.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .show-photo{

        }
        .show-photo img{
            width : 100px;
        }
    </style>
</head>
<body>
        <div class="text-center py-3">
            <h4 class="font-weight-bold">Contact Lists</h4>
        </div>
        <table class="table table-hover">
        <thead>
            <!-- <th>Photo</th> -->
            <th>Photo</th>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>created_at</th>
        </thead>
        <tbody>
            <?php 
                foreach (contacts() as $c){
            ?>

            

            <tr>
                <td><img src="<?php echo $c['photo']; ?>" width="50px" height="50px"/> </td>
                <td><?php echo $c['id']; ?></td>
                <td><?php echo $c['name']; ?></td>
                <td><?php echo $c['email']; ?></td>
                <td><?php echo $c['phone']; ?></td>
                <td><?php echo $c['created_at']; ?></td>
            </tr>

            <?php } ?>

        </tbody>
    </table>

   


    <script src="js/bootstrap.js"></script>

</body>
</html>

<?php 
    // $store = scandir("store/");
    // foreach ($store as $key=>$s){
// ?>

<td><img src="store/<?php echo $s; ?>" alt=""> </td>
