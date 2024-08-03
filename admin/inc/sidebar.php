<?php
$sqlPro = mysqli_query($db, "SELECT * FROM users WHERE username = '".$_SESSION['username']."'");
$rowPro = mysqli_fetch_array($sqlPro);
?>
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info" style="background: url(../images/user-img-background.jpg); background-size: cover;">
        <div class="image">
            <a href="profile.php">
            <?php
                if ($rowPro['img'] == "")
                {
                ?>
                <img src="../images/user-lg.jpg" class="img-circle" style="width: 45px; height: 45px;" alt="<?php echo $rowPro['name']; ?>">
                <?php
                }
                else
                {
                ?>
                <img src="../images/<?php echo $rowPro['img']; ?>" class="img-circle" style="width: 45px; height: 45px;" alt="<?php echo $rowPro['name']; ?>">
                <?php
                }
            ?>
            </a>
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $rowPro['name']; ?>
            </div>
            <div class="email">
                <?php echo $rowPro['email']; ?>
            </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    keyboard_arrow_down
                </i>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="profile.php">
                            <i class="material-icons">person</i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="material-icons">input</i>
                            Sign Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="index.php">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                    <i class="material-icons">contact_support</i>
                    <span>
                        Inquiries
                    </span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="allOrders.php" class="waves-effect waves-block">
                            <span>All Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="allContacts.php" class="waves-effect waves-block">
                            <span>All Contacts</span>
                        </a>
                    </li>
                    <li>
                        <a href="allMeetings.php" class="waves-effect waves-block">
                            <span>All Meetings</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                    <i class="material-icons">list</i>
                    <span>Products Management</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="allProducts.php" class="waves-effect waves-block">
                            <span>All Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="addProduct.php" class="waves-effect waves-block">
                            <span>Add New Product</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                    <i class="material-icons">group_work</i>
                    <span>Partners Management</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="allPartners.php" class="waves-effect waves-block">
                            <span>All Partners</span>
                        </a>
                    </li>
                    <li>
                        <a href="addPartners.php" class="waves-effect waves-block">
                            <span>Add New Partner</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                    <i class="material-icons">category</i>
                    <span>Categories Management</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="allCategories.php" class="waves-effect waves-block">
                            <span>All Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="addCategories.php" class="waves-effect waves-block">
                            <span>Add New Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                    <i class="material-icons">rss_feed</i>
                    <span>Blogs Management</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="allBlogs.php" class="waves-effect waves-block">
                            <span>All Blogs</span>
                        </a>
                    </li>
                    <li>
                        <a href="addBlogs.php" class="waves-effect waves-block">
                            <span>Add New Blog</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                    <i class="material-icons">groups</i>
                    <span>Users Management</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="allUsers.php" class="waves-effect waves-block">
                            <span>All Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="addUser.php" class="waves-effect waves-block">
                            <span>Add New User</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="logout.php" class="waves-effect waves-block">
                    <i class="material-icons">logout</i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &#169; 2022 All Rights Reserved by <a href="#" target="_blank">
                Jazeez Synergy
            </a>
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
</aside>