<div class="container">
    <div class="align-items-center w-100">
        <h1 class="logo float-left navbar-brand"><a href="index" class="logo">Merinda</a></h1>
        <div class="header-right float-right w-50">
            <div class="d-inline-flex float-right text-right align-items-center">
                <ul class="social-network heading navbar-nav d-lg-flex align-items-center">
                    @if(isset( $LoggedUserInfo['facebook_link']))
                        <li><a href="{{ $LoggedUserInfo['facebook_link'] }}"><i class="icon-facebook"></i></a></li>
                    @endif

                </ul>
                @if(isset($LoggedUserInfo['name']))
                    @if(isset( $LoggedUserInfo['user_image']) && ($LoggedUserInfo['user_image'] !== "" || $LoggedUserInfo['user_image'] !== "NULL" ))
                        <a class="author-avatar" href="author_info"><img src="/userImages/{{ $LoggedUserInfo['user_image'] }}" alt="{{ $LoggedUserInfo['name'] }}"></a>
                    @else
                        <a class="author-avatar" href="author_info"><img src="/images/user_default.png" alt="{{ $LoggedUserInfo['name'] }}"></a>
                    @endif
                    <ul class="top-menu heading navbar-nav w-100 d-lg-flex align-items-center">
                        <li><a href="{{ route('auth.logout') }}" class="btn">Log Out</a></li>
                    </ul>
                @else
                    <ul class="top-menu heading navbar-nav w-100 d-lg-flex align-items-center">
                        <li><a href="login" class="btn">Log In</a></li>
                    </ul>
                @endif


            </div>
            <form action="#" method="get" class="search-form d-lg-flex float-right">
                <a href="javascript:void(0)" class="searh-toggle">
                    <i class="icon-search"></i>
                </a>
                <input type="text" class="search_field" placeholder="Search..." value="" name="s">
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<nav id="main-menu" class="stick d-lg-block d-none">
    <div class="container">
        <div class="menu-primary">
            <ul>
                <li class="current-menu-item"><a href="index">Home</a></li>
                <li class="menu-item-has-children"><a href="categories">Categories</a>
                    <ul class="sub-menu">
                        @foreach( $parentCategories as $parentCategory)
                            <li class="menu-item-has-children"><a href="#">{{ $parentCategory['category_name'] }}</a>
                                <div class="sub2-menu">
                                    @foreach($childCategories as $childCategory)
                                        @if( $childCategory['parentID'] === $parentCategory['catID'])
                                            <div class="col-6"><a href="#">{!! $childCategory['category_name'] !!}</a></div>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="typography">Typography</a></li>
                <li><a href="categories">Politics</a></li>
                <li><a href="categories">Health</a></li>
                <li><a href="categories">Design</a></li>
                <li><a href="categories">Startups</a></li>
                <li><a href="categories">Culture</a></li>
                <li><a href="contact">Contact</a></li>
                <li class="menu-item-has-children"><a href="#">More...</a>
                    <ul class="sub-menu">
                        <li><a href="search">Search</a></li>
                        <li><a href="author">Author</a></li>
                        <li><a href="404">404</a></li>
                    </ul>
                </li>
            </ul>
            <span></span>
        </div>
    </div>
</nav>
