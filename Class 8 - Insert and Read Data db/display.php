<?php
include './db/db.php';
include './components/header/header.php';
?>


<div class="container">
    <h4 class="text-center p-4">Contact Details Display</h4>
    <div class="row">

        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $sql = "SELECT * FROM contacts ORDER BY fname";
                    $sql = "SELECT * FROM contacts";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $count = 0;
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { $count++ ?>
                            <tr>
                                <th scope="row"><?php echo $count;?></th>
                                <td><?php echo $row['fname'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['msg'] ?></td>
                                <td><a class="btn btn-sm btn-danger">Delete</a></td>
                            </tr>
                    <?php }
                    }
                    ?>


                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include './components/footer/footer.php';
?>