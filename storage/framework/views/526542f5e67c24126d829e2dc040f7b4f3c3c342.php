<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->
            <div class="logo">
                <a href="" class="simple-text photo">
                digipark
                </a>
                
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">

                    <li class="active">
                        <a href="home">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <!-- sidebar for only super admin -->
                    <?php if(Auth::user()->role_data == 1): ?>
                    <li>
                        <a href="organiser">
                            <i class="material-icons">group</i>
                            <p>Organiser Management</p>
                        </a>
                    </li>
                    <li>
                        <a href="createManager">
                            <i class="material-icons">person_add</i>
                            <p>Manager Management</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples" class="collapsed"   aria-expanded="false">
                            <i class="material-icons">image</i>
                            <p>Pages
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples" aria-expanded="false" style="height: auto;">
                            <ul class="nav">
                                <li>
                                    <a href="">Pricing</a>
                                </li>
                                <li>
                                    <a href="">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php endif; ?>
                    <!-- sidebar for only Organiser -->
                    <?php if(Auth::user()->role_data == 2): ?>
                    <li class="">
                        <a href="manager">
                            <i class="material-icons">person_add</i>
                            <p>Manager Management</p>
                        </a>
                    </li>
                    <li class="">
                        <a href="parking">
                            <i class="material-icons">local_parking</i>
                            <p>Create New Parking</p>
                        </a>
                    </li>
                    <li class="itemBox">
                        <a href="parkingAssign">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            <p>Parking Assign</p>
                        </a>
                    </li>
                    <li class="itemBox">
                        <a href="parkingType">
                            <i class="fa fa-wheelchair" aria-hidden="true"></i>
                            <p>Parking Types</p>
                        </a>
                    </li>
                    <?php endif; ?>
                    <!-- sidebar for only manager -->
                    <?php if(Auth::user()->role_data == 3): ?>
                        <li>
                        <a href="showAssignParking">
                            <i class="material-icons">local_parking</i>
                            <p>Show Parking</p>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
       <?php $__env->startSection('css'); ?>
            
            <style type="text/css">
                .sidebar .nav .caret,
                .off-canvas-sidebar .nav .caret {
                margin-top: 13px;
                position: absolute;
                right: 18px;
                }
                a[data-toggle="collapse"][aria-expanded="true"] .caret,
                .dropdown.open .caret,
                .dropup.open .caret,
                .btn-group.bootstrap-select.open .caret {
                filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
                -webkit-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                transform: rotate(180deg);
                }
                .sidebar .logo .photo,
                .off-canvas-sidebar .user .photo {
                  width: 80px;
                  height: 80px;
                  overflow: hidden;
                  border-radius: 50%;
                  margin: 0 auto;
                  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
                }
                .sidebar .logo .photo img,
                .off-canvas-sidebar .user .photo img {
                  width: 100%;
                }
            </style>    
        <?php $__env->stopSection(); ?>
        
        <?php $__env->startSection('javascript'); ?>
            <script type="text/javascript">
                $(".sidebar-wrapper .nav").click(function() {
                $('li').removeClass('active');
                $(this).addClass("active");

                });
            </script>
        <?php $__env->stopSection(); ?>

        