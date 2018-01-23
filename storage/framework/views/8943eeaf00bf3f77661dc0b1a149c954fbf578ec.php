<header class="sticky-header alternative">
<div class="container">
    <div class="sixteen columns">
    
        <!-- Logo -->
        <div id="logo">
            <h1><a href="<?php echo e(URL::to('')); ?>"><img src="<?php echo e(URL::to('frontend/images/logo.png')); ?>" alt="Work Scout" style="width: 196px; height: 41px;" /></a></h1>
        </div>

        <!-- Menu -->
        <nav id="navigation" class="menu">
            <ul id="responsive">

                <li><a href="<?php echo e(URL::to('')); ?>">Home</a></li>
                <li><a href="<?php echo e(URL::to('jobs')); ?>">Jobs</a></li>
                <li><a href="<?php echo e(URL::to('services')); ?>">Services</a></li>
                <li><a href="<?php echo e(URL::to('careers')); ?>">Careers & Education</a></li>
                <li><a href="<?php echo e(URL::to('entrepreneurship')); ?>">Entrepreneurship</a></li>
                <li><a href="<?php echo e(URL::to('partners')); ?>">Partners</a></li>
                <li><a href="<?php echo e(URL::to('blog')); ?>">Blog</a></li>
                <li><a href="<?php echo e(URL::to('faqs')); ?>">FAQs</a></li>
                <li><a href="<?php echo e(URL::to('about_us')); ?>">About Us</a></li>
                <li><a href="<?php echo e(URL::to('contact_us')); ?>">Contact Us</a></li>
            </ul>


            <ul class="float-right">
                 <?php if(Auth::guest()): ?>                    
                 <li><a href="<?php echo e(route('login')); ?>"><i class="fa fa-lock"></i>  <?php echo trans('titles.login'); ?></a></li>
                 <li><a href="<?php echo e(route('register')); ?>"><i class="fa fa-user"></i><?php echo trans('titles.register'); ?></a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                            <?php if((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1): ?>
                                <img src="<?php echo e(Auth::user()->profile->avatar); ?>" alt="<?php echo e(Auth::user()->name); ?>" class="user-avatar-nav">
                            <?php else: ?>
                                <div class="user-avatar-nav"></div>
                            <?php endif; ?>

                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li <?php echo e(Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()-> name . '/edit') ? 'class=active' : null); ?>>
                                <?php echo HTML::link(url('/profile/'.Auth::user()->name), trans('titles.profile')); ?>

                            </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <?php echo trans('titles.logout'); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>

        </nav>

        <!-- Navigation -->
        <div id="mobile-navigation">
            <a href="index-2.html#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
        </div>

    </div>
</div>
</header>




<!--nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only"><?php echo trans('titles.toggleNav'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo trans('titles.app'); ?>

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                <?php if (Auth::check() && Auth::user()->hasRole('admin')): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Admin <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li <?php echo e(Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'class=active' : null); ?>><?php echo HTML::link(url('/users'), Lang::get('titles.adminUserList')); ?></li>
                            <li <?php echo e(Request::is('users/create') ? 'class=active' : null); ?>><?php echo HTML::link(url('/users/create'), Lang::get('titles.adminNewUser')); ?></li>
                            <li <?php echo e(Request::is('themes','themes/create') ? 'class=active' : null); ?>><?php echo HTML::link(url('/themes'), Lang::get('titles.adminThemesList')); ?></li>
                            <li <?php echo e(Request::is('logs') ? 'class=active' : null); ?>><?php echo HTML::link(url('/logs'), Lang::get('titles.adminLogs')); ?></li>
                            <li <?php echo e(Request::is('php') ? 'class=active' : null); ?>><?php echo HTML::link(url('/php'), Lang::get('titles.adminPHP')); ?></li>
                            <li <?php echo e(Request::is('routes') ? 'class=active' : null); ?>><?php echo HTML::link(url('/routes'), Lang::get('titles.adminRoutes')); ?></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if(Auth::guest()): ?>                    <li><a href="<?php echo e(route('login')); ?>"><?php echo trans('titles.login'); ?></a></li>
                    <li><a href="<?php echo e(route('register')); ?>"><?php echo trans('titles.register'); ?></a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                            <?php if((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1): ?>
                                <img src="<?php echo e(Auth::user()->profile->avatar); ?>" alt="<?php echo e(Auth::user()->name); ?>" class="user-avatar-nav">
                            <?php else: ?>
                                <div class="user-avatar-nav"></div>
                            <?php endif; ?>

                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li <?php echo e(Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'class=active' : null); ?>>
                                <?php echo HTML::link(url('/profile/'.Auth::user()->name), trans('titles.profile')); ?>

                            </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <?php echo trans('titles.logout'); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

-->