<?php require_once('../components/header.php'); ?>


<div class="container">

    <?php

    $profolio_list = 'SELECT * FROM protfolios';

    $portfolio_select = mysqli_query($db_connect, $profolio_list);


    ?>

    <div class="row">

        <table class="table table-success table-striped">

            <tr class="text-center">

                <th>ID</th>
                <th>Portfolio Category</th>
                <th>Portfolio Title</th>
                <th>Portfolio Images</th>
                <th>Portfolio Status</th>
                <th>Portfolios Links</th>
                <th>Edit & Delete</th>

            </tr>

            <?php foreach ($portfolio_select as $key => $port) : ?>

                <tr class="text-center">
                    <td><?= ++$key ?></td>
                    <td><?= $port['portfolio_category'] ?></td>
                    <td><?= $port['portfolio_title'] ?></td>
                    <td><img src="../front-end/img/images/<?=$port['portfolio_images']?>" alt="" width="100"></td>
                    <td><?= $port['portfolios_links'] ?></td>
                    <td><?php echo strtoupper($port['portfolio_status']); ?></td>
                    <td><a class="btn btn-info" href="./portfolios_update.php?id=<?=$port['ID']?>">Edit</a> <a class=" btn btn-danger" href="./portfolios_update.php?id=<?=$port['ID']?>">Delete</a></td>
                </tr>

            <?php endforeach; ?>


        </table>

    </div>
</div>



<?php require_once('../components/footer.php'); ?>