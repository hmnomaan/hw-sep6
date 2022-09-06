<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Catering</title>
</head>

<body>
    <?php
    // include './store.php' 

    session_start();

    $foodlist = $_SESSION['foodlist'];
    ?>



    <form method="post" action="./store.php" style="width:700px ;margin:0 auto;">

        <input type="number" name="id" placeholder="id input">
        <input type="text" name="name" placeholder="food name">
        <input type="number" name="price" placeholder="food price">
        <input type="number" name="stock" placeholder="available stocks">

        <button type="submit">ADD</button>

    </form>




    <table border="1" style="width:700px ;margin:0 auto;">
        <thead>

            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stocks</th>
                <th>Edit/Update/Delete</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($foodlist as $food) { ?>
                <tr>
                    <td><?= $food['id'] ?></td>
                    <td><?= $food['name'] ?></td>
                    <td><?= $food['price'] ?></td>
                    <td><?= $food['stock'] ?></td>

                    <td>
                        <button>Update</button>
                        <button>Delete</button>
                        <button>Edit</button>
                    </td>
                </tr>
            <?php } ?>

        </tbody>


    </table>




</body>

</html>