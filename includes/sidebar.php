<div class="col-md-4">

    <!-- Blog Search Well -->


    <div class="well">
        <h4>Blog Search</h4>
        <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
        </div>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->

    <div class="well">

        <?php

        $query = "SELECT  * FROM categories";
        $select_categories_sidebar=mysqli_query($connection, $query);


        ?>


        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php
                    while($row = mysqli_fetch_assoc($select_categories_sidebar)){
                    $cat_title = $row['cat_title'];
                    $cat_id = $row['cat_id'];

                    echo "<li><a href='category.php?category=$cat_id'>{$cat_title}<a></li>";
                    }
                    ?>
                </ul>
            </div>


            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>




    <!-- Side Widget Well -->
    <?php include "widget.php"?>

</div>