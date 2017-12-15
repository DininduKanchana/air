<?php
   include('header.php');
?>
<body >
    <?php
        include('adminNavbar.php');
        include('./database/AdminOperations.php');
    ?>
    <div class="container">
    <?php 
        $result = getANews($_GET["id"]);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
        }
        $title = $row["title"];
        $text = $row["text"];
        $link = $row["link"];
        $date = $row["date"];
        mysqli_free_result($result);
    ?>
    <table class="table table-responsive-md  table-hover">
        <thead class="thead-light">
        </thead>
        <tbody>
            <tr>
            <th scope="row">Title</th>
            <td><?php echo $title ?></td>
            </tr>
            <tr>
            <th scope="row">Text</th>
            <td><?php echo $text ?></td>
            </tr>
            <tr>
            <th scope="row">Link</th>
            <td><?php echo $link ?></td>
            </tr>
            <tr>
            <th scope="row">Posted date</th>
            <td><?php echo $date ?></td>
            </tr>
        </tbody>
        </table>
    </div>  
  
</body>
</html>