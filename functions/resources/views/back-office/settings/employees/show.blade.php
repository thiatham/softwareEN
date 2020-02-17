@extends('layouts.back-office.app')

@section('style')
    <link href="{{ asset('css/back-office/settings/employees/show.css') }}" rel="stylesheet">

    <style>


    </style>
@endsection

@section('body')
    <div id="app" class="container">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb emp-show-breadcrumb">
                <li class="breadcrumb-item"><a href="https://v2.adiwit.co.th">Setting</a></li>
                <li class="breadcrumb-item"><a href="https://v2.adiwit.co.th/back-office/employees">Employee</a></li>
                <li class="breadcrumb-item active" aria-current="page">Arrow Smith</li>
            </ol>
        </nav>
        <div class="container" style="padding:0px;">
            <div class="layout-personal-card">  
                <div class="row justify-content-center" style="margin:0px;">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-5 col-xl-4" style="padding:0px;">
                        <div class="pic">
                            <img style="height: 100%;width: 100%;object-fit: cover;" alt="Employee Picture" src="{{ asset('images/smith.png') }}">
                            <div class="name-pic">
                                <h3 style="margin:0px;">Arrow Smith</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col detail-picture">  
                        <div class="detail">
                            <div class="row justify-content-center" >
                                <div class="col-6 col-sm-6 col-md-5 col-lg-4 col-xl-3 ">
                                    <h4 style="color:#7d7d7d;">รายได้ปี</h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 "  style="padding-left:0px;">
                                    <select class="selectpicker">
                                        <option selected>2562</option>
                                        <option>2561</option>
                                        <option>2560</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-center" >
                                <div class="col-6 col-sm-6 col-md-5 col-lg-4 col-xl-3 ">
                                    <h4 style="color:#7d7d7d;">เลขประกันสังคม</h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 "  style="padding-left:0px;">
                                    <h4>1-2345-67891-23-4</h4>  
                                </div>
                            </div>
                            <div class="row justify-content-center" >
                                <div class="col-6 col-sm-6 col-md-5 col-lg-4 col-xl-3 ">
                                    <h4 style="color:#7d7d7d;">รายได้สุทธิ (THB)</h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 " style="padding-left:0px;">
                                    <h4>789,234.00</h4>  
                                </div>
                            </div>
                            <div class="row justify-content-center" >
                                <div class="col-6 col-sm-6 col-md-5 col-lg-4 col-xl-3 ">
                                    <h4 style="color:#7d7d7d;">ประกันสังคม (THB)</h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="padding-left:0px;">
                                    <h4 style="color:#ef5350;">(8,122.70)</h4>  
                                </div>
                            </div>
                            <div class="row justify-content-center" >
                                <div class="col-6 col-sm-6 col-md-5 col-lg-4 col-xl-3 ">
                                    <h4 style="color:#7d7d7d;">ภาษีเงินได้ (THB)</h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 " style="padding-left:0px;">
                                    <h4 style="color:#ef5350;">(48,121.23)</h4>  
                                </div>
                            </div>
                            <div class="row justify-content-center" >
                                <div class="col-6 col-sm-6 col-md-5 col-lg-4 col-xl-3 ">
                                    <h4 style="color:#7d7d7d;">ค่าลดหย่อน (THB)</h4>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 " style="padding-left:0px;">
                                    <h4>243,851.00</h4>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h1 class="header-salary-per-month" ><strong>รายได้รายเดือน</strong></h1>

        <div class="container monthly-container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Jan Picture" src="{{ asset('images/back-office/settings/employees/month/icon_01_Jan.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                    <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Feb Picture" src="{{ asset('images/back-office/settings/employees/month/icon_02_Feb.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Mar Picture" src="{{ asset('images/back-office/settings/employees/month/icon_03_Mar.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Apr Picture" src="{{ asset('images/back-office/settings/employees/month/icon_04_Apr.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="May Picture" src="{{ asset('images/back-office/settings/employees/month/icon_05_May.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Jun Picture" src="{{ asset('images/back-office/settings/employees/month/icon_06_Jun.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Jul Picture" src="{{ asset('images/back-office/settings/employees/month/icon_07_Jul.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Aug Picture" src="{{ asset('images/back-office/settings/employees/month/icon_08_Aug.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Sep Picture" src="{{ asset('images/back-office/settings/employees/month/icon_09_Sep.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Oct Picture" src="{{ asset('images/back-office/settings/employees/month/icon_10_Oct.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Nov Picture" src="{{ asset('images/back-office/settings/employees/month/icon_11_Nov.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="salary-per-month-card">
                        <div class="row justify-content-center " style="margin:0px;">
                            <div class="col-4 col-sm-4 col-md-2 col-lg-3 col-xl-3 " style="padding:0px;width:80px !important">
                                <div class="layout-per-month-card">
                                    <img alt="Dec Picture" src="{{ asset('images/back-office/settings/employees/month/icon_12_Dec.png') }}">
                                </div>
                            </div>
                            <div class="col">  
                                <div class="layout-detail">
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-networth">รายได้สุทธิ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-networth font-500">58,000.00</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="under-line col-10 col-sm-9 col-md-8 col-lg-10 col-xl-9"> </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-social">ประกันสังคม (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                            <p class="val-social font-500">(1,200.00)</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-5" style="padding:0px;">
                                            <p class="text-tax" >ภาษีเงินได้ (THB)</p>
                                        </div>
                                        <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4">  
                                            <p class="val-tax font-500" >(2,100.00)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <br>

    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/back-office/settings/show.js') }}"></script>
@endsection
