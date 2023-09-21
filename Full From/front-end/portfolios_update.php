<?php require_once('../components/header.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card widget widget-stats">

                <div class="card-header">Add a New Fact</div>
                <?php 
                            
                    $id = $_GET['id'];

                    $update_portfolio = "SELECT * FROM protfolios WHERE ID = '$id'";

                    $update_select = mysqli_query($db_connect , $update_portfolio);

                    $update_assoc = mysqli_fetch_assoc($update_select);

                    $_SESSION['p_id'] = $id;
                            
                ?>
                <div class="card-body">
                    <form action="portfolios_update_post.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" class="form-control mt-3" placeholder="Portfolio Category" name="portfolio_category" value="<?=$update_assoc['portfolio_category']?>">
                            <input type="text" class="form-control mt-3" placeholder="Portfolio Title" name="portfolio_title" value="<?=$update_assoc['portfolio_title']?>">
                            <input type="text" class="form-control mt-3" placeholder="Portfolio Links" name="portfolio_links" value="<?=$update_assoc['portfolios_links']?>">
                            <input type="file" class="form-control mt-3" placeholder="Portfolio Images" name="portfolio_images" value="<?=$update_assoc['portfolio_images']?>">
                            <select class="form-control mt-3" name="portfolio_status" >
                                <option value="active">Active</option>
                                <option value="deactive">Deactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Portfolios</button>
                    </form>
                </div>
            </div>
        
        </div>

    </div>
</div>



<?php require_once('../components/footer.php'); ?>