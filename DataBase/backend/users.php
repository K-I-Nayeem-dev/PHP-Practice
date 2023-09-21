<?php require_once('../component/header.php'); ?>

<div class="row">
    <div class="col-xl-6">
        <div class="card widget widget-list" style="overflow-y: scroll; height: 464px;">

            <?php

            $total_user = "SELECT COUNT(*) AS result FROM users";

            $total_query = mysqli_query($db_connect, $total_user);

            $total_assoc = mysqli_fetch_assoc($total_query)['result'];


            ?>

            <div class="card-header">
                <h3 class="card-title pb-4 fs-4 ">Users Details<span class="badge badge-success badge-style-light pt-2 d-flex justify-content-between align-items-center text-dark">Total Number of Users <span class="text-danger fs-5  ms-2 pe-2 "><?php print_r($total_assoc) ?></span></span></h3>
            </div>

            <?php

            $user_insert_data = "SELECT ID, Name, Email FROM users";

            $user_query = mysqli_query($db_connect, $user_insert_data);

            // $user_assoc = mysqli_fetch_assoc($user_query);

            // print_r($user_assoc);

            ?>

            <div class="card-body m-0 p-0">
                <ul class="widget-list-content list-unstyled m-0 p-0">
                    <li class="widget-list-item widget-list-item-green p-0 m-0">
                        <table class="table table-success">
                            <tr class="sticky-top">
                                <th class=" text-dark bg-warning fw-bold fs-6">ID</th>
                                <th class=" text-white bg-dark fw-bold fs-6">Name</th>
                                <th class=" bg-info fw-bold fs-6" style="color:black;">Email</th>
                            </tr>
                            <form action="delete.php" method="post">
                                <?php foreach ($user_query as $key => $user) : ?>
                                    <tr>
                                        <td class="bg-warning"><?php print_r($key + 1) ?></td>
                                        <td class="bg-dark text-white"><?php print_r($user['Name']) ?></td>
                                        <td class="bg-info fw-bold"><?php print_r($user['Email']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </form>
                        </table>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card widget widget-list">
            <div class="card-header">
                <h5 class="card-title">Todo<span class="badge badge-success badge-style-light">14 completed</span></h5>
            </div>
            <div class="card-body">
                <span class="text-muted m-b-xs d-block">showing 5 out of 23 active tasks.</span>
                <ul class="widget-list-content list-unstyled">
                    <li class="widget-list-item widget-list-item-green">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Dashboard UI optimisations
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Oskar Hudson
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-blue">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" checked>
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Mailbox cleanup
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Woodrow Hawkins
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-purple">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" checked>
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Header scroll bugfix
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Sky Meyers
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-yellow">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Localization for file manager
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Oskar Hudson
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-red">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" checked>
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                New E-commerce UX/UI design
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Oskar Hudson
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card widget widget-payment-request">
            <div class="card-header">
                <h5 class="card-title">Payment Request<span class="badge badge-warning badge-style-light">8 June</span></h5>
            </div>
            <div class="card-body">
                <div class="widget-payment-request-container">
                    <div class="widget-payment-request-author">
                        <div class="avatar m-r-sm">
                            <img src="../assets/images/avatars/avatar.png" alt="">
                        </div>
                        <div class="widget-payment-request-author-info">
                            <span class="widget-payment-request-author-name">Caio Yousuke</span>
                            <span class="widget-payment-request-author-about">Customer Journey Expert</span>
                        </div>
                    </div>
                    <div class="widget-payment-request-product">
                        <div class="widget-payment-request-product-image m-r-sm">
                            <img src="../assets/images/other/facebook_logo.png" class="mt-auto" alt="">
                        </div>
                        <div class="widget-payment-request-product-info d-flex">
                            <div class="widget-payment-request-product-info-content">
                                <span class="widget-payment-request-product-name">Google</span>
                                <span class="widget-payment-request-product-about">Youtube Advertisments</span>
                            </div>
                            <span class="widget-payment-request-product-price">$2,399.99</span>
                        </div>
                    </div>
                    <div class="widget-payment-request-info m-t-md">
                        <div class="widget-payment-request-info-item">
                            <span class="widget-payment-request-info-title d-block">
                                Description
                            </span>
                            <span class="text-muted d-block">Advertisement for envato items</span>
                        </div>
                        <div class="widget-payment-request-info-item">
                            <span class="widget-payment-request-info-title d-block">
                                Due Date
                            </span>
                            <span class="text-muted d-block">14 June, 2021</span>
                        </div>
                    </div>
                    <div class="widget-payment-request-actions m-t-lg d-flex">
                        <a href="#" class="btn btn-light flex-grow-1 m-r-xxs">Reject</a>
                        <a href="#" class="btn btn-primary flex-grow-1 m-l-xxs">Approve</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card widget widget-stats-large">
            <div class="row">
                <div class="col-xl-8">
                    <div class="widget-stats-large-chart-container">
                        <div class="card-header">
                            <h5 class="card-title">Earnings<span class="badge badge-light badge-style-light">Last Year</span></h5>
                        </div>
                        <div class="card-body">
                            <div id="apex-earnings"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="widget-stats-large-info-container">
                        <div class="card-header">
                            <h5 class="card-title">Report<span class="badge badge-info badge-style-light">Updated 5 min ago</span></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-description">Duis fringilla eget velit sit amet lobortis. Donec rutrum, arcu auctor varius cursus. mi nulla dapibus justo, at volutpat libero</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Neptune - v1.0<span class="float-end text-success">14%<i class="material-icons align-middle">keyboard_arrow_up</i></span></li>
                                <li class="list-group-item">Space - v1.2<span class="float-end text-danger">7%<i class="material-icons align-middle">keyboard_arrow_down</i></span></li>
                                <li class="list-group-item">Lime - v1.0.3<span class="float-end text-success">21%<i class="material-icons align-middle">keyboard_arrow_up</i></span></li>
                                <li class="list-group-item">Circl - v2.3<span class="float-end text-success">17%<i class="material-icons align-middle">keyboard_arrow_up</i></span></li>
                                <li class="list-group-item">Connect - v1.7<span class="float-end text-danger">3%<i class="material-icons align-middle">keyboard_arrow_down</i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../component/footer.php'); ?>