<?php 
include_once('./database/AdminOperations.php');
?>
<div>
    <table class="table table-hover">
        <thead>
            <tr>News</tr>
        </thead>
        <tbody>
            <?php
                    $result = getLimitedNews();
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php  
                            echo "<a href=userViewNews.php?id=". $row['id' ] .">". $row['title'] ."</a>"
                            ?>
                    </td>
                    <td>
                        <a href="viewNews.php?id=<?php echo $row['id' ]?>">
                        </a>
                    </td>
                </tr>
                <?php }
                    }
                        mysqli_free_result($result);
                        ?>
        </tbody>
    </table>
</div>