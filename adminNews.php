<?php
   include_once('header.php');
?>

    <body>
        <?php
        include_once('adminNavbar.php');
        include_once('./database/AdminOperations.php');
    ?>
            <div class="container">
                <a href="/air/addNews.php">
                    <button type="button" class="btn btn-outline-primary" style="float:right; margin-top:1%;">Post a news</button>
                </a>
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
                                    <a href="viewNews.php?id=<?php echo $row['id' ]?>">
                                        <button type="button" class="btn btn-outline-primary">View</button>
                                    </a>
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