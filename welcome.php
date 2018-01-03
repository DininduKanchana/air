<?php
   include_once('header.php');
?>

    <body>
        <?php
        include_once('adminNavbar.php');
    ?>
            <div class="container">
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
                                    <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px;">View news</button>
                                </a>
                            </td>
                            <td>
                                <a href="/air/addNews.php">
                                    <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px;">Post news</button>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-success" style="width: 120px; height:120px; ">Edit news</button>
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
                                Staff
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="adminViewStaff.php">
                                    <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px; ">View Staff</button>
                                </a>
                            </td>
                            <td>
                                <a href="addStaff.php">
                                    <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px; ">Add Staff</button>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-success" style="width: 120px; height:120px; ">Edit Staff</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </body>

    </html>