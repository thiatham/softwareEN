@extends('layouts.website.app')

@section('style')
@endsection

@section('body')
    <div class="container mt-5">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://v2.adiwit.co.th">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">UI-Kit</li>
            </ol>
        </nav>
        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <h1>ทั่วไป</h1>
            </div>
            <button style="color:#fff!important" type="button" class="btn btn-login pull-right">login</button>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <h1>สี</h1>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <p>
                            <button type="button" class="btn btn-primary">Primary</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-success">Success</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-danger">Danger</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-warning">Warning</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-info">Info</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-light">Light</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-dark">Dark</button>
                        </p>
                        <p>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <button type="button" class="btn active btn-primary">Primary (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-secondary">Secondary (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-success">Success (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-danger">Danger (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-warning">Warning (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-info">Info (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-light">Light (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-dark">Dark (:active)</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <button type="button" class="btn btn-primary" disabled="disabled">Primary (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-secondary" disabled="disabled">Secondary (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-success" disabled="disabled">Success (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-danger" disabled="disabled">Danger (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-warning" disabled="disabled">Warning (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-info" disabled="disabled">Info (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-light" disabled="disabled">Light (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-dark" disabled="disabled">Dark (:disabled)</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-success">Success</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-info">Info</button>
                        </p>
                        <p>

                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <button type="button" class="btn active btn-outline-primary">Primary (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-outline-secondary">Secondary (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-outline-success">Success (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-outline-danger">Danger (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-outline-warning">Warning (:active)</button>
                        </p>
                        <p>
                            <button type="button" class="btn active btn-outline-info">Info (:active)</button>
                        </p>
                        <p>

                        </p>
                        <p>
                            <button type="button" class="btn active btn-outline-dark">Dark (:active)</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <button type="button" class="btn btn-outline-primary" disabled="disabled">Primary (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-secondary" disabled="disabled">Secondary (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-success" disabled="disabled">Success (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-danger" disabled="disabled">Danger (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-warning" disabled="disabled">Warning (:disabled)</button>
                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-info" disabled="disabled">Info (:disabled)</button>
                        </p>
                        <p>

                        </p>
                        <p>
                            <button type="button" class="btn btn-outline-dark" disabled="disabled">Dark (:disabled)</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><a href="#" class="text-primary">Primary link</a></p>
                        <p><a href="#" class="text-secondary">Secondary link</a></p>
                        <p><a href="#" class="text-success">Success link</a></p>
                        <p><a href="#" class="text-danger">Danger link</a></p>
                        <p><a href="#" class="text-warning">Warning link</a></p>
                        <p><a href="#" class="text-info">Info link</a></p>
                        <p><a href="#" class="text-light bg-dark">Light link</a></p>
                        <p><a href="#" class="text-dark">Dark link</a></p>
                        <p><a href="#" class="text-muted">Muted link</a></p>
                        <p><a href="#" class="text-white bg-dark">White link</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p><span class="badge badge-primary">Primary</span></p>
                        <p><span class="badge badge-secondary">Secondary</span></p>
                        <p><span class="badge badge-success">Success</span></p>
                        <p><span class="badge badge-danger">Danger</span></p>
                        <p><span class="badge badge-warning">Warning</span></p>
                        <p><span class="badge badge-info">Info</span></p>
                        <p><span class="badge badge-light">Light</span></p>
                        <p><span class="badge badge-dark">Dark</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-4">
                <h1>Other color</h1>
            </div>
            <div class="col-4">
                <h1>Input</h1>
            </div>
            <div class="col-4">
                <h1>Font-weight-base</h1>
            </div>
            <div class="col">
                <div class="card ">
                    <div class="card-body">
                        <p class="text-color-cheap">ราคาถูก</p>
                        <p class="text-color-smart">ฉลาด</p>
                        <p class="text-color-easy">ง่าย &amp; รวดเร็ว</p>
                        <p class="text-color-function">ครบทุกฟั่งชัน..</p>
                        <p class="text-color-world">ทำงานได้ทุกที่ในโลกนี้</p>
                        <p class="text-color-safe">ปลอดภัย</p>
                        <p class="text-color-develop">ทำไมเราจึกพัฒนา</p>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <div class="card-body">


                        <div class="control">
                            <input id="userName" type="text" placeholder="  Example@gmail.com">
                            <label for="userName">Email</label>
                        </div>

                        <div class="control">
                            <input id="password" type="text" placeholder="  ********">
                            <label for="password">Password</label>
                        </div>



                        <div class="login-or">


                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <div class="card-body">
                        <p class="font-100">font-100</p>
                        <p class="font-300">font-300</p>
                        <p class="font-500">font-500</p>
                        <p class="font-bold">font-bold</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <h1>Font</h1>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>H1 Lorem ipsum dolor sit amet</h1>
                        <h2>H2 Lorem ipsum dolor sit amet</h2>
                        <h3>H3 Lorem ipsum dolor sit amet</h3>
                        <h4>H4 Lorem ipsum dolor sit amet</h4>
                        <h5>H5 Lorem ipsum dolor sit amet</h5>
                    </div>
                    <div class="card-body">
                        <h1>H1 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h1>
                        <h2>H2 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h2>
                        <h3>H3 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h3>
                        <h4>H4 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h4>
                        <h5>H5 มาร์ชกาญจนาภิเษกโปรโมเตอร์</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-4">
                <h1>Icon-Socia</h1>
            </div>
            <div class="col-4">
                <h1>Icon-Other</h1>
            </div>
            <div class="col-4 pb-5">
                <h1>Card Review</h1>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <br>
                        <div class="row">
                            <div class="">
                                <div class="socia-facebook"> <i class="fab fa-facebook-f"></i> </div>
                            </div>
                            <div class="">
                                <div class="socia-google"> <i class="fab fa-google"></i> </div>
                            </div>
                            <div class="">
                                <div class="socia-line"> <i class="fab fa-line"></i> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <div class="socia-facebook active"> <i class="fab fa-facebook-f"></i> </div>
                            </div>
                            <div class="">
                                <div class="socia-google active"> <i class="fab fa-google"></i> </div>
                            </div>
                            <div class="">
                                <div class="socia-line active"> <i class="fab fa-line"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-times"></i>
                        <i class="fas fa-angle-right"></i>
                        <i class="fas fa-user"></i>
                        <i class="fa fa-globe"></i>
                        <i class="fa fa-star"></i>
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card review-card">
                    <div class="card-body pt-5">
                        <img src="{{ asset('images/profile-1.png') }}" alt="profile-image" class="profile">
                        <h3 class="card-title font-bold text-s-3 pt-2">Frank klin</h3>
                        <p class="card-title text-right"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        <h5><i class="fas fa-quote-left"></i>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </h5>
                        <p style="font-size: 20px" class="text-center">
                            Lorem Ipsum is simply dummy text of the <br>
                            printing and typesetting industry.
                        </p>


                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <h1>Header</h1>
            </div>
            <nav id="navbars" class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="#"> Salary.in.th</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-nav mr-auto">
                        </div>
                        <ul class="navbar-nav mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promotion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><div style="border-right: 1px solid #aaa3a3;height:25px;margin-top:5px;"></div></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="btn-login">
                                        <i style=" padding-bottom: 3px;font-size: 19px;color: #fff;" class="fas fa-user pr-1"></i>
                                        <span style="color:#fff;font-size:22px;">
                                            <i style="font-size:17px;color:#fff;" class="fas fa-user pr-1"></i>  Joshshow
                                            <i class="fas fa-sort-down pl-1"></i>
                                        </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-globe" style="font-size: 20px;color:#000"></i>
                                    <span style="font-size: 20px;padding-left: 7px;">TH  <i class="fas fa-sort-down pl-1"></i></span>
                                </a>
                                <div class="dropdown-menu pull-right" aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" href="#">TH</a>
                                    <a class="dropdown-item" href="#">EN</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <div class="row justify-content-center mb-5">
            <nav id="navbars" class="navbar navbar-expand-lg navbar-dark bg-transparent">
                <div class="container">
                    <a class="navbar-brand" href="#"> Salary.in.th</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-nav mr-auto">
                        </div>
                        <ul class="navbar-nav mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promotion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><div style="border-right: 1px solid #aaa3a3;height:25px;margin-top:5px;"></div></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="btn-login">
                                        <i style=" padding-bottom: 3px;font-size: 19px;color: #fff;" class="fas fa-user pr-1"></i>
                                        <span style="color:#fff;font-size:22px;">
                                            <i style="font-size:17px;color:#fff;" class="fas fa-user pr-1"></i>  Joshshow
                                            <i class="fas fa-sort-down pl-1"></i>
                                        </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-globe" style="font-size: 20px;color:#000"></i><span style="font-size: 20px;padding-left: 7px;">TH  <i class="fas fa-sort-down pl-1"></i></span>
                                </a>
                                <div class="dropdown-menu pull-right" aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" href="#">TH</a>
                                    <a class="dropdown-item" href="#">EN</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row justify-content-center mb-5">
            <nav id="navbars" class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="#"> Salary.in.th</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-nav mr-auto">
                        </div>
                        <ul class="navbar-nav mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promotion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><div style="border-right: 1px solid #aaa3a3;height:25px;margin-top:5px;"></div></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="btn-login loginfocus">
                                        <i style="position: relative;top: calc(50% - 10px);font-size: 15px;color: #fff;" class="fas fa-user"></i>
                                        <span style="color:#fff;font-size:22px;">
                                            <i style="font-size:17px;color:#fff;" class="fas fa-user"></i>  Joshshow
                                            <i class="fas fa-sort-down pl-1"></i>
                                        </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-globe" style="font-size: 20px;color:#000"></i><span style="font-size: 20px;padding-left: 7px;">TH
                                        <i class="fas fa-sort-down pl-1"></i></span>
                                </a>
                                <div class="dropdown-menu pull-right" aria-labelledby="navbarDropdown1">
                                    <a class="dropdown-item" href="#">TH</a>
                                    <a class="dropdown-item" href="#">EN</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row justify-content-center mb-5">

            <div class="col-12">
                <h1>Sign-Card</h1>
            </div>
            <div class="col-12 col-lg-6">
                <div style="background: transparent!important;" class="card card-signin mt-5 mx-auto">
                    <div class="card-body">
                        <h2 class="text-s-3">Welcome to Salary.in.th</h2>
                        <p class="text-gray mb-1" style="margin-top: -20px;">Please login or <a class="text-primary">Create an Account</a> </p>

                        <form class="form-signin-v2">
                            <div class="group">
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Name</label>
                            </div>

                            <div class="group">
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>

                        </form>


                        <a class="text-primary float-right" style="text-decoration: underline;" href="#">Forgot password?</a>
                        <br>

                        <button type="button" class="btn-signin float-right">Login</button><div class="checkbox">
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Remember me</label>
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="login-or col-5">
                                <hr class="hr-or ">
                            </div>
                            <div class="login-or col-2">
                                <span class="span-or">or</span>
                            </div>
                            <div class="login-or col-5">
                                <hr class="hr-or ">
                            </div>

                        </div>

                        <div class="row justify-content-center">
                            <a href="" class="pr-1">
                                <div class="socia-facebook"> <i class="fab fa-facebook-f"></i>    </div>
                            </a>
                            <a href="" class="pr-1">
                                <div class="socia-google">  <i class="fab fa-google"></i>    </div>
                            </a>
                            <a href="">
                                <div class="socia-line"><i class="fab fa-line"></i>    </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div style="background: transparent!important;" class="card card-signin mt-5 mx-auto">
                    <div class="card-body">
                        <h2 class="text-s-3">Welcome to Salary.in.th</h2>
                        <p class="text-gray mb-1" style="margin-top: -20px;">Please login or <a class="text-primary">Create an Account</a> </p>

                        <form class="form-signin-v2">
                            <div class="group">
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Name</label>
                            </div>

                            <div class="group">
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>

                        </form>


                        <a class="text-primary float-right" style="text-decoration: underline;" href="#">Forgot password?</a>
                        <br>

                        <button type="button" class="btn-signin float-right">Login</button><div class="checkbox">
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Remember me</label>
                            </div>
                        </div>
                        <div class="row w-100">
                            <div class="login-or col-5">
                                <hr class="hr-or">
                            </div>
                            <div class="login-or col-2">
                                <span class="span-or">or</span>
                            </div>
                            <div class="login-or col-5">
                                <hr class="hr-or">
                            </div>

                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="row justify-content-center">
                                    <a href="" class="pr-3">
                                        <img class="btn-gray-scale" src="{{ asset('images/facebook-icon.png') }}" alt="img btn">
                                    </a>
                                    <a href="" class="pr-3">
                                        <img class="btn-gray-scale" src="{{ asset('images/line-icon.png') }}" alt="img btn">
                                    </a>
                                    <a href="">
                                        <img class="btn-gray-scale" src="{{ asset('images/Google-Plus-Icon.png') }}" alt="img btn">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
			// Transition effect for navbar 
			$(window).scroll(function() {
			  if($(this).scrollTop() > 70) { 
				  $('.navbar').removeClass('bg-transparent ');
			  } else {
				    $('.navbar').addClass('bg-transparent ');
			  }
			});
		});

    </script>
@endsection
