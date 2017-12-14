<?php
   include('header.php');
?>
<body >
    <?php
        include('navbar.php');
        include('./database/AdminOperations.php');
    ?>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
                </tr>
                <?php
                    $result = getAllNews();
                    if ($result) {
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $i++; 
                ?>
                            <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <td><?php  echo $row["title"] ?></td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary">View</button>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                        <?php }
                    }
                        mysqli_free_result($result);
                        ?>
            </thead>
            <tbody>
               
            </tbody>
        </table>
    </div>  
  
</body>
</html>