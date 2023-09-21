<?php require_once('../components/header.php') ?>

<style>
    /* width */
    ::-webkit-scrollbar {
        width: 20px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: red;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #b30000;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description bg-warning rounded">
                <h1>Welcome To Dashboard <span class="bg-danger p-2 rounded text-white"><?= $_SESSION['s_name'] ?></span></h1>
                <h5>ID : <?= $_SESSION['s_id'] ?></h5>
                <h5>Email : <?= $_SESSION['s_email'] ?></h5>
            </div>
        </div>
    </div>
    <div class="row">
        <?php

        $count = "SELECT COUNT(*) as users FROM users";
        $count_query = mysqli_query($db_connect, $count);
        $count_assoc = mysqli_fetch_assoc($count_query)['users'];

        ?>
        <div class="col-xl-12 p-0 m-0">
            <div class="card widget widget-stats" style="height: 465px;   overflow-y: scroll;">
                <div class="card-header d-flex justify-content-between">Users <span>Total Users <span class=" p-2 text-danger fs-4 "><?= $count_assoc ?></span></span></div>
                <div class="card-body">
                    <?php

                    $user = "SELECT * FROM users";
                    $user_query = mysqli_query($db_connect, $user);

                    ?>
                    <table class="table table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Profile Picture</th>
                            <th>Email</th>
                        </tr>
                        <?php foreach ($user_query as $users) : ?>
                            <tr>
                                <td><?= $users['ID'] ?></td>
                                <td><?= $users['Name'] ?></td>
                                <td><img src="../components/uploads/Profile Photos/<?= $users['profile_picture']?>" alt="" width="150" height="150"></td>
                                <td><?= $users['Email'] ?></td>
                                <td>
                                    <a class="btn btn-danger" href="./users_delete.php?id=<?= $users['ID'] ?>">Delete <i class="material-icons ms-1">delete</i> </a>
                                    <a class="btn btn-danger" href="./profile.php?id=<?= $users['ID'] ?>">Edit <i class="material-icons ms-1">edit</i> </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-danger">
                            <i class="material-icons-outlined">file_download</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Downloads</span>
                            <span class="widget-stats-amount">140,390</span>
                            <span class="widget-stats-info">87 items downloaded</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                            <i class="material-icons">keyboard_arrow_up</i> 7%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../components/footer.php') ?>