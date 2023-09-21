<?php require_once('../components/header.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card widget widget-stats">

                <div class="card-header">Add a New Fact</div>
                <div class="card-body">
                    <form action="portfolio_post.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" class="form-control mt-3" placeholder="Portfolio Category" name="portfolio_category">
                            <input type="text" class="form-control mt-3" placeholder="Portfolio Title" name="portfolio_title">
                            <input type="text" class="form-control mt-3" placeholder="Portfolio Links" name="portfolio_links">
                            <input type="file" class="form-control mt-3" placeholder="Portfolio Images" name="portfolio_images">
                            <select class="form-control mt-3" name="portfolio_status">
                                <option value="active">Active</option>
                                <option value="deactive">Deactive</option>
                            </select>
                        </div>
                        <button type="submit" name="fact_btn" class="btn btn-primary">Add Fact</button>
                    </form>
                </div>
            </div>
        
        </div>

    </div>
</div>



<?php require_once('../components/footer.php'); ?>