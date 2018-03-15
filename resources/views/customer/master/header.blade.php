<?php 
use App\Type;
use App\Project;

$type = new Type();
$project = new Project();

?>
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
                        <a href="#"><i class="far fa-envelope-open"></i>Email us at: example@somemail.com</a>
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
                <div id="logo" class="col-xl-3 text-center">
                    <a href="{{url('/')}}">
                        <img src="public/images/logo.png" class="img-fluid">
                    </a>
                </div>
                <!-- navigation -->
                <nav id="main-nav" class="navbar navbar-expand-lg col-xl-9">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-align-justify"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            @foreach($menu_result as $key => $value)
                                @if(count($value) > 0)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="category/{{$type->getTypeById($key)->url_key}}">
                                            {{$type->getTypeById($key)->name}}
                                        </a>
                                        <a class="nav-link dropdown-toggle disabled" href="category/{{$type->getTypeById($key)->url_key}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach($value as $vl)
                                                <a class="dropdown-item" href="category/{{$type->getTypeById($key)->url_key.'/'.$project->getProjectById($vl)->url_key}}">{{$project->getProjectById($vl)->name}}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="category/{{$type->getTypeById($key)->url_key}}">{{$type->getTypeById($key)->name}}<span class="sr-only">(current)</span></a>
                                    </li>
                                @endif
                            @endforeach
                            <li class="nav-item phone-number">
                                <span class="phone-icon"><i class="fas fa-phone"></i></span>
                                <span><strong>01208 000 698</strong></span>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>
</div>
<!--/header -->