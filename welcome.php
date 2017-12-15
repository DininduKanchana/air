<?php
   include('header.php');
?>

    <body>
        <?php
        include('adminNavbar.php');
    ?>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h3>Welcome
                            <?php echo $login_session; ?>
                        </h3>
                    </div>
                    <div class="col-4">
                        <h3>
                            <a href="logout.php">Sign Out</a>
                        </h3>
                    </div>
                </div>
                &nbsp;
                <table class="table">
                    <thead>

                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                News
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="adminNews.php">
                                    <button type="button" class="btn btn-primary" style="width: 120px; height:120px;">View news</button>
                                </a>
                            </td>
                            <td>
                                <a href="/air/addNews.php">
                                        <button type="button" class="btn btn-secondary" style="width: 120px; height:120px;">Post news</button>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success" style="width: 120px; height:120px; ">Edit news</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" style="width: 120px; height:120px; ">Delete news</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Results
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px; ">Post a news</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px; ">Post a news</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-success" style="width: 120px; height:120px; ">Post a news</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px; ">Post a news</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px; ">Post a news</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-success" style="width: 120px; height:120px; ">Post a news</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </body>

    </html>