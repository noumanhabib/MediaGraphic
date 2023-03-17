<div class="header navbar navbar-inverse">

    <!-- BEGIN TOP NAVIGATION BAR -->

    <div class="navbar-inner">

        <div class="header-seperation">

            <ul class="nav pull-left notifcation-center visible-xs visible-sm">

                <li class="dropdown">

                    <a href="#main-menu" data-webarch="toggle-left-side">

                        <i class="material-icons">menu</i>

                    </a>

                </li>

            </ul>

            <!-- BEGIN LOGO -->

            <a href="index.html">

                <img src="/images/logo_dashboard.svg" class="logo" alt="" data-src="/images/logo_dashboard.svg" data-src-rretina="/images/logo_dashboard.svg" width="140" height="auto" />

            </a>

            <!-- END LOGO -->

            <ul class="nav pull-right notifcation-center">

                <li class="dropdown hidden-xs hidden-sm">

                    <a href="/" class="dropdown-toggle active" data-toggle="">

                        <i class="material-icons">home</i>

                    </a>

                </li>

                <li class="dropdown visible-xs visible-sm">

                    <a href="#" data-webarch="toggle-right-side">

                        <i class="material-icons">chat</i>

                    </a>

                </li>

            </ul>

        </div>

        <!-- END RESPONSIVE MENU TOGGLER -->

        <div class="header-quick-nav">

            <!-- BEGIN TOP NAVIGATION MENU -->

            <div class="pull-left">

                <ul class="nav quick-section">

                    <li class="quicklinks">

                        <a href="#" class="" id="layout-condensed-toggle">

                            <i class="material-icons">menu</i>

                        </a>

                    </li>

                </ul>

                <ul class="nav quick-section">

                    <li class="quicklinks m-r-10">

                        <a href="#" onclick="window.location.reload();" class="">

                            <i class="material-icons">refresh</i>

                        </a>

                    </li>

                    <li class="quicklinks"> <span class="h-seperate"></span></li>



                </ul>

            </div>

            <!-- END TOP NAVIGATION MENU -->

            <!-- BEGIN CHAT TOGGLER -->

            <div class="pull-right">

                <!-- <div class="chat-toggler sm">

                    <div class="profile-pic">

                        <img src="assets/img/profiles/avatar_small.jpg" alt=""

                            data-src="assets/img/profiles/avatar_small.jpg"

                            data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" />

                        <div class="availability-bubble online"></div>

                    </div>

                </div> -->

                <ul class="nav quick-section">

                    <li class="quicklinks">

                        <a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">

                            <i class="fas fa-user-cog"></i>

                        </a>

                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">


                            <li style="display: flex; justify-content: center;">
                                <form id="admin-logout-form" class="btn btn-primary m-auto" onclick="this.submit()" action="{{ route('logout') }}" method="post" style="display: inline-block; margin: auto;">
                                    @csrf
                                    <a> <i class="fas fa-sign-out"></i> Déconnexion </a>
                                </form>

                            </li>

                        </ul>

                    </li>

                    <li class="quicklinks"> <span class="h-seperate"></span></li>



                </ul>

            </div>

            <!-- END CHAT TOGGLER -->

        </div>

        <!-- END TOP NAVIGATION MENU -->

    </div>

    <!-- END TOP NAVIGATION BAR -->

</div>
