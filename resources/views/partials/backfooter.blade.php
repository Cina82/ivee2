<footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                  <!--   Company -->
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                     Copyright © <script>document.write(new Date().getFullYear())</script> Thumbtack All Rights Reserved
                    </p>
                </div>
            </footer>


        </div>
    </div>


    <!--   Core JS Files   -->
    <script src="{{ URL::to('public/admin/assets/js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('public/admin/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('public/admin/assets/js/material.min.js') }}" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="{{ URL::to('public/admin/assets/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ URL::to('public/admin/assets/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="{{ URL::to('public/admin/assets/js/material-dashboard.js') }}"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ URL::to('public/admin/assets/js/demo.js') }}"></script>

   

    <script type="text/javascript">
        $(document).ready(function(){

            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
    