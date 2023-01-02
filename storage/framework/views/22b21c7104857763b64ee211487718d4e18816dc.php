<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #cbfbff">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><b>Barbatos Shop</b></a>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark opacity-80">
                        <li><a class="dropdown-item" href="/category/1">1</a></li>
                        <li><a class="dropdown-item" href="/category/2">2</a></li>
                        <li><a class="dropdown-item" href="/category/3">3</a></li>
                        <li><a class="dropdown-item" href="/category/4">4</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <?php if(auth()->guard()->check()): ?>
            
            <h1>udah login</h1>
            
            <?php if(Auth::user() && Auth::user()->isAdmin): ?>


            <?php endif; ?>

            
            <?php else: ?>
            <div class="" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/register">Register</a>
                    </li>
                </ul>
            </div>

        <?php endif; ?>

    </div>
</nav>
<?php /**PATH /Users/hanny/webprog-project/resources/views/navbar.blade.php ENDPATH**/ ?>