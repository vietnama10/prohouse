<?php 
use App\Type;
use App\Project;

$type = new Type();
$project = new Project();

?>
@foreach($menu_result as $key => $value)
    {{$key.":"}}
    @foreach($value as $vl)
    {{$vl}}
    @endforeach
    <br/>
@endforeach
<!-- header -->
<div class="header-wrapper">
    <div class="container">
        <header id="header" class="clearfix">
            <!-- header top -->
            <div id="header-top">
                <!-- header top contains email contact and social networks -->
                <div class="row">
                    <!-- email contact -->
                    <div id="email-contact" class="col-sm">
                        <a href="#"><i class="far fa-envelope-open"></i>example@somemail.com</a>
                    </div>
                    <!-- social networks -->
                    <div id="social-networks" class="col-sm">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- logo & navigation -->
            <div class="row">
                <!-- logo -->
                <div id="logo" class="col-sm-4">
                    <a href="https://placeholder.com">
                        <img src="http://via.placeholder.com/350x150" class="img-fluid">
                    </a>
                </div>
                <!-- navigation -->
                <nav id="main-nav" class="navbar navbar-expand-lg navbar-inverse col-sm-8">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            @foreach($menu_result as $key => $value)
                                @if(count($value) > 0)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{$type->getTypeById($key)->name}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach($value as $vl)
                                                <a class="dropdown-item" href="#">{{$project->getProjectById($vl)->name}}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{$type->getTypeById($key)->name}}<span class="sr-only">(current)</span></a>
                                    </li>
                                @endif
                            @endforeach
<!--                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>-->
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>
</div>
<!--/header -->