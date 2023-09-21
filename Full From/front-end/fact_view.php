<?php require_once('../components/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
        
        <?php 
        
        $fact_view = "SELECT * FROM facts";

        $fact_view_query = mysqli_query($db_connect , $fact_view);

        ?>

        <table class="table table-success table-striped">
        
        <tr class="text-center">
            <th>Fact id</th>
            <th>Fact Head</th>
            <th>Fact Description</th>
            <th>Fact Icon</th>
            <th>Fact Status</th>
        </tr>
        <?php foreach ($fact_view_query as  $f_view) : ?>
            <tr class=" text-center">
              <td><?=$f_view['ID'] ?></td>   
              <td><?=$f_view['fact_name'] ?></td>   
              <td><?=$f_view['fact_details'] ?></td>   
              <td><?=$f_view['fact_icon'] ?></td>   
              <td><?=$f_view['fact_status'] ?></td>   
            </tr>
                
        <?php endforeach;  ?>

        </table>

        </div>

    </div>
</div>




<?php require_once('../components/footer.php'); ?>
