<?php
   include_once('userHeader.php');
?>

    <body>
        <?php
        include_once('navbar.php');
        include_once('./database/AdminOperations.php');
    ?>
            <div class="container">

                <table class="table table-hover">
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
                                <th scope="row">
                                    <?php echo $i ?>
                                </th>
                                <td>
                                    <?php  echo $row["title"]?>
                                </td>
                                <td>
                                    <a href="userViewNews.php?id=<?php echo $row['id' ]?>">
                                        <button type="button" class="btn btn-outline-primary">View</button>
                                    </a>
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