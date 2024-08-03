<div class="col-lg-4 sidebar ftco-animate">
    <div class="sidebar-box">
        <form action="blog.php" method="post" enctype="multipart/form-data" class="search-form">
            <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" name="search" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>
    <div class="sidebar-box ftco-animate">
        <h3>Category</h3>
        <ul class="categories">
            <?php
            $getCat = mysqli_query($db, "SELECT * FROM `categories`");
            while ($rowCat = mysqli_fetch_array($getCat))
            {
            ?>
            <li>
                <a href="blog.php?cat=<?php echo $rowCat['id']; ?>"><?php echo $rowCat['name']; ?>
                    <span>
                        (
                        <?php echo mysqli_num_rows(mysqli_query($db, "SELECT * FROM blog WHERE cat_id = '".$rowCat['id']."'")); ?>
                        )
                    </span>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="sidebar-box ftco-animate">
        <h3>Recent Articles</h3>
        <?php
        $getBlogSide = mysqli_query($db, "SELECT * FROM blog ORDER BY id DESC LIMIT 0,3");
        while ($rowBlogSide = mysqli_fetch_array($getBlogSide))
        {
        ?>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/<?php echo $rowBlogSide['img']; ?>);"></a>
            <div class="text">
                <h3 class="heading">
                    <a href="blog-single.php?id=<?php echo $rowBlogSide['id']; ?>">
                        <?php echo $rowBlogSide['name']; ?>
                    </a>
                </h3>
                <div class="meta">
                    <div><a><span class="icon-calendar"></span> <?php echo $rowBlogSide['date']; ?></a></div>
                    <div><a><span class="icon-person"></span> <?php echo $rowBlogSide['username']; ?></a></div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
