<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">

<!-- Sidebar Content -->

        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="typcn typcn-device-desktop menu-icon"></i>
                <span class="menu-title">Dashboard</span>
<!--                <div class="badge badge-danger">new</div>-->
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#faculty_lus" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-folder-add menu-icon"></i>
                <span class="menu-title">Faculty of LU</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="faculty_lus">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="faculty.php">View Faculty</a></li>
<!--                    <li class="nav-item"> <a class="nav-link" href="">Add New Faculty</a></li>-->
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#department" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-folder-add menu-icon"></i>
                <span class="menu-title">Department of LU</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="department">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="department.php">View Department</a></li>
                    <!--                    <li class="nav-item"> <a class="nav-link" href="">Add New Faculty</a></li>-->
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#faculty_teacher" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-user-add menu-icon"></i>
                <span class="menu-title">Faculty Teacher of LU</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="faculty_teacher">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="faculty_teacher.php">View Teachers</a></li>
<!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of EEE</a></li>-->
<!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of BBA</a></li>-->
<!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of ENGLISH</a></li>-->
<!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of ARCHITECTURE</a></li>-->
<!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of CIVIL ENGINEERING</a></li>-->
<!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of ISLAMIC STUDIES</a></li>-->
<!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of PUBLIC HEALTH</a></li>-->
<!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of TOURISM & H.M.</a></li>-->

                </ul>
            </div>
        </li>

<!-- Library Admin Part -->
        <div class="section-dividor"></div>
        <h6 class="text-primary">Library Management</h6>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#lus_books" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-book menu-icon"></i>
                <span class="menu-title">Books Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lus_books">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">View Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Add New Category</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#lus_authors" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-user menu-icon"></i>
                <span class="menu-title">Books Authors</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lus_authors">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">View Authors</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Add New Authors</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#lusl_lists" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-user menu-icon"></i>
                <span class="menu-title">Lists of Books</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lusl_lists">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">View Books</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Add New Books</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#lusl_issue" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-bookmark menu-icon"></i>
                <span class="menu-title">Lists of Issue Books</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lusl_issue">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">View Issues Books</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Add New Issues Books</a></li>

                </ul>
            </div>
        </li>

<!-- Library Admin Part  End-->

        <div class="section-dividor"></div>

<!-- Bus Management Admin -->
        <h6 class="text-primary">Bus Management</h6>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#lus_bus1" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-book menu-icon"></i>
                <span class="menu-title">Bus Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lus_bus1">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="add_category.php">ADD CATAEGORY</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">MANAGE CATEGORY</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#lus_bus2" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-user menu-icon"></i>
                <span class="menu-title">Bus Listed</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lus_bus2">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">ADD BUS</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">MANAGE BUS</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#lus_bus3" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-user menu-icon"></i>
                <span class="menu-title">Bus Issued</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lus_bus3">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">ADD ISSUED BUSES</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">MANAGE ISSUED BUSES</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#lus_bus4" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-bookmark menu-icon"></i>
                <span class="menu-title">Bus Route</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="lus_bus4">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">ADD ROUTE</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">MANAGE ROUTE</a></li>

                </ul>
            </div>
        </li>

        <!-- Bus Management Admin End-->

        <div class="section-dividor"></div>

        <h6 class="text-primary">Blood Helper (LUMS)</h6>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#blood_donor" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-bookmark menu-icon"></i>
                <span class="menu-title">Blood Donor Lists</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blood_donor">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">View Donor List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Add New Donor</a></li>

                </ul>
            </div>
        </li>

        <div class="section-dividor"></div>

        <h6 class="text-primary">Project Thesis Proposal (LUMS)</h6>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#project" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-bookmark menu-icon"></i>
                <span class="menu-title">Project / Thesis Proposal</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="project">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="">View Proposal Lists</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Manage Proposal Lists</a></li>

                </ul>
            </div>
        </li>

        <div class="section-dividor"></div>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-user-add-outline menu-icon"></i>
                <span class="menu-title">Profiles</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="profile">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"> <a class="nav-link" href="user_profiles.php">View Profiles</a></li>

                </ul>
            </div>
        </li>

    </ul>

</nav>