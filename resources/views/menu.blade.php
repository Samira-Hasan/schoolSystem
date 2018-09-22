<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>School Management System</h3>
                    <img src="Image/feature2.png" height="100" width="200">
                </div>

                <ul class="list-unstyled components">
                   
                    <li class="active">
                        <a href="" data-toggle="collapse" aria-expanded="false">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">About</a>
                        <a href="" data-toggle="collapse" aria-expanded="false">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Portfolio</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>

                
            </nav>

            <!-- Page Content Holder -->
            
        </div>
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script> 
          $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        
        </script>