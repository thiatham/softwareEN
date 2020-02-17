@extends('layouts.website.app')

@section('style')
    <link href="{{ asset('css/website/landing-page.css') }}" rel="stylesheet">
@endsection

@section('body')
    <section style="background: #ececec url({{ asset('images/Cover_picture.png') }})  no-repeat;background-size: auto 60%;padding-top: 70px;background-position-y: bottom;background-position-x: initial;" class="bannerTitle mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1 class="main-header"><b>คำนวนภาษีเงินได้ให้อัตโนมัติ</b></h1>
                    <h2 style="margin-top: -25px;" class="text-gray main-sc-header">Autometic Tax Calculation</h2>
                    <img class="img-fluid d-md-none" style="min-height:100px;" src="{{ asset('images/Cover_picture.png') }}" alt="img cover">
                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 mx-auto d-flex justify-content-center justify-content-md-end">
                    <div style="background: transparent!important;" class="card card-signin mt-3">
                        <div class="card-body" style="background: #efefefe0;">
                            <h2 class="text-s-3">Welcome to Salary.in.th</h2>
                            <p class="text-gray mb-0" style="margin-top: -20px;">Please login or <a class="text-primary">Create an Account</a> </p>
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
                            <div class="row w-100 ml-0">
                                <div class="login-or col-5 px-0">
                                    <hr class="hr-or">
                                </div>
                                <div class="login-or col-2">
                                    <span class="span-or">or</span>
                                </div>
                                <div class="login-or col-5 px-0">
                                    <hr class="hr-or ">
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

    </section>
    <section class="pt-0 mb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-6 text-center">
                    <h2 class="font-bold text-s-3">Promotion</h2>
                    <h4 class="text-gray">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</h4>
                </div>
            </div>
            <div class="row pt-1 pt-md-5 pt-lg-5">
                <div class="col-sm-12 col-md-6 col-lg-6 text-right pr-md-5 pr-lg-5">
                    <img class="img-fluid" src="{{ asset('images/section-1.png') }}" alt="img">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-phone">
                    <h2 class="text-color-cheap text-s-3 pt-4"><b style="">ราคาถูก!</b></h2>
                    <h1 class="font-bold text-s-3">เพียง 999 บาท/ปี/บริษัท เท่านั้น ! </h1>
                    <p class="font-nomal mb-0">โปรแกรมเงินเดือนที่มีฟังก์ชั่นการใช้งานที่ครบถ้วน</p>
                    <div class="font-nomal mb-0 pt-2 pl-3 mb-2">
                        • ไม่จํากัดจํานวนพนักงาน<br>
                        • ไม่จํากัดเพดานเงินเดือน<br>
                    </div>
                    <p class="font-nomal mb-0">
                        เพิ่มจํานวนบริษัทในเครือได้ตามต้องการ
                        <br>
                        <span class="text-primary">ชำระผ่านบัตรเครดิต</span> เเละ  <span class="text-primary">Paysbuy</span>
                    </p>
                    <div class="font-nomal mb-0 pt-2 pl-3">
                        • ใช้งานได้ทันทีไม่ต้องส่งเอกสาร
                    </div>
                </div>
                <div class="row mx-0 px-0 pt-5">
                    <div class="col-sm-12 d-block d-md-none">
                        <img class="img-fluid" src="{{ asset('images/section-2.png') }}" alt="img">
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-6 text-phone">
                        <h2 class="text-color-smart text-s-3 pt-4"><b>ฉลาด</b></h2>
                        <div class="font-nomal pt-2  pl-md-5 pl-lg-5 ">
                            • กราฟวิเคราะห์ประวัติการจ่ายเงินเดือน<br>
                            • คํานวนอัตราประกันสังคมอัตโนมัติ<br>
                            • คํานวนภาษีเงินได้ให้อัตโนมัติ <small>(ตามสูตรคํานวนที่กรมสรรพากรกําหนด)</small><br>
                            • ใช้งานได้ทันที การสมัครไม่ยุ่งยาก ไม่ต้องใช้เอกสารยืนยัน<br>
                            • สามารถระบุค่าลดหย่อนประกอบการคํานวนภาษีได้
                        </div>
                        <h2 class="text-color-smart text-s-3 pt-4"><b>ประหยัด</b></h2>
                        <div class="font-nomal pb-4  pl-md-5 pl-lg-5 ">
                            • ส่งสลิปเงินเดือนให้พนักงานได้ง่าย สะดวก ผ่านทางอีเมล เพียงแค่คลิกเดียว แทนการปริ้นต์สลิปเงินเดือนออกกระดาษ แบบเดิม ๆ ที่ไม่ทันสมัย
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-6 d-none d-md-block">
                        <img class="img-fluid" src="{{ asset('images/section-2.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clear-bg-none pb-0 mt-0" style="background: #fafafa url({{ asset('images/section-3.png') }})no-repeat;background-size:auto 90%;min-height: 700px;background-position: bottom;">
        <div class="container-fluid pt-5 pb-0">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-6 d-none d-md-block">
                </div>
                <div class="col-sm-12 col-md-5 col-lg-6 text-phone">
                    <h2 class="text-color-easy text-s-3 pt-4"><b>ง่าย &amp; รวดเร็ว</b></h2>
                    <p class="text-gray">
                        จะมีโปรแกรมเงินเดือนซักกี่โปรแกรม<br>
                        ที่ผู้ใช้งานสามารถที่จะใช้งานโปรแกรมได้เลยโดยที่ไม่จําเป็นต้อง<br>
                        อ่านคู่มือการใช้งาน ไม่จําเป็นต้องมีทักษะ HR <br>ระดับโลกก็สามารถใช้งานได้ทั้งมืออาชีพ <br>
                        ด้วยแนวคิดการออกแบบโปรแกรมที่ว่า<br>
                        “ทําอย่างไรให้ทุกคนสามารถใช้งานโปรแกรมได้ภายใน 5 นาที”</p>
                    <p class="text-gray">
                        ความรวดเร็วถือเป็นหัวใจหลักของโปรแกรมเงินเดือนนี้ เพียง 3<br>
                        ขั้นตอนง่ายๆ <br>
                    </p>
                    <p class="pl-4 mb-0 font-nomal"><b>1. ตั้งค่าบริษัท</b></p>
                    <p class="pl-4 mb-0 font-nomal"><b>2. ข้อมูลพนักงาน </b></p>
                    <p class="pl-4 mb-0 font-nomal"><b>3. สร้างเงินเดือน </b></p><br>
                    <p class="text-gray">
                        ผู้ใช้งานทํางาน 3 ขั้นตอนนอกนั้นระบบจะทํางานแทน <br> คุณเองในทุกเรื่อง ประหยัดเวลาการทํางานลงถึง 80%
                    </p>
                </div>
                <div style="background: #fafafa;" class="col-sm-12  d-block d-md-none">
                    <img class="img-fluid" src="{{ asset('images/section-3.png') }}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <div style="background: url({{ asset('images/bg-fish.png') }});">
        <section class="container pt-0">
            <div class="row py-5">
                <div class="col-sm-12  d-block d-md-none">
                    <img class="img-fluid" src="{{ asset('images/section-6.png') }}" alt="img">
                </div>
                <div class="col-sm-12 col-md-5 col-lg-6 text-phone">
                    <h2 class="text-color-function text-s-3 pt-4"><b>ครบทุกฟังก์ชั่นการทํางาน</b>
                    </h2>
                    <p class="text-gray">โปรแกรมเงินเดือน ที่อัดแน่นไปด้วยฟังก์ชั่นที่เรียกว่า ครบซะจนล้นแบบที่โปรแกรมเจ้าอื่นไม่สามารถให้ได้ ทุกระบบแทบจะเป็นระบบอัตโนมัติ ทําให้ช่วยลดเวลา การทํางานของผู้ใช้งาน โดยฟังก์ชั่นการทํางานประกอบไปด้วย
                    </p>
                    <div class=" font-nomal pt-2 pl-md-3 pl-lg-3">
                        • สามารถระบุค่าลดหย่อนประกอบการคํานวนภาษีได้ <br>
                        • ระบบคํานวณภาษีเงินได้บุคคลธรรมดาประจําเดือน <br>
                        • ระบบสร้างทะเบียนเงินเดือนประจําเดือน <br>
                        • ระบบสร้างสลิปเงินเดือนประจําเดือน <br>
                        • ระบบส่งสลิปเงินเดือนไปที่อีเมลพนักงานแต่ละคน <br>
                        • ระบบจัดทํา ภงด.1 (แบบนําส่งภาษีเงินได้หัก ณ ที่จ่าย พนักงานประจํา)<br>
                        • ระบบจัดทํา สปส.1-10 (แบบนําส่งประกันสังคมประจําเดือน) <br>
                        • ระบบจัดทํา ภงด. 1ก (แบบนําส่งสรุปเงินได้ประจําปีพนักงาน)<br>
                    </div>



                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 my-auto d-none d-md-block">
                    <img class="img-fluid" src="{{ asset('images/section-6.png') }}" alt="img">
                </div>
            </div>



        </section>
        <section class="container-fluid">
            <div class="row pt-1 pt-md-5 pt-lg-5">
                <div class="col-sm-12 col-md-7 col-lg-6 text-right">
                    <img class="img-fluid" src="{{ asset('images/section-5.png') }}" alt="img">
                </div>
                <div class="col-sm-12 col-md-5 col-lg-6 my-auto text-phone">
                    <h2 class="text-color-world text-s-3 pt-4"><b>ทํางานได้ทุกที่ในโลกนี้</b>
                    </h2>
                    <p class="text-gray">
                        ไม่ว่าท่านจะอยู่มุมไหนของโลกนี้ ท่านจะสามารถเข้าถึง <br>
                        โปรแกรมเงินเดือนได้เพียงแค่ต่อ Internet ไม่จําเป็นต้องมี <br>
                        PC หรือ Notebook เพียงแค่หยิบโทรศัพท์มือถือที่เป็น <br>
                        Smartphone ก็เพียงพอต่อการทํางานโปรแกรมเงินเดือน <br>
                        ทําให้ไม่พลาดที่จะจ่ายเงินเดือนพนักงาน
                    </p>

                </div>
            </div>
        </section>
        <section class="clear-bg-none pt-0" style="background: url({{ asset('images/section-4.png') }}) bottom right no-repeat;background-size: 80% auto;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-7 col-lg-6 d-block d-md-none">
                        <img class="img-fluid" src="{{ asset('images/section-4-mobie.png') }}" alt="img">
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-6  text-phone mt-md-5 mt-lg-5 ml-md-4 ml-lg-4">
                        <h2 class="text-color-safe text-s-3 pt-4"><b>ปลอดภัย</b>
                        </h2>
                        <p class="text-gray">  ระบบจัดเก็บข้อมูลด้วยระบบ Cloud ทําให้ข้อมูลเงินเดือน พนักงานไม่มีวันสูญหาย นอกจากนั้นเรายังมีระบบรักษา ความปลอดภัยของข้อมูลด้วยระบบ HTTPS (Hypertext Transfer Protocol Secure) ดังนั้นผู้ใช้งานสามารถมั่นใจ ในคุณภาพการจัดเก็บข้อมูลและการรักษาความลับ
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <section class="container-fluid pl-0">
        <div class="row pt-1 pt-md-5 pt-lg-5">
            <div class="col-sm-12 col-md-7 col-lg-6 my-auto">
                <img  class="img-fluid" src="{{ asset('images/section-7.png') }}" alt="img">
            </div>
            <div class="col-sm-12 col-md-5 col-lg-6 text-phone">
                <h2  class="text-color-develop text-s-3 pt-4"><b>ทําไมเราจึงพัฒนาโปรแกรมเป็น <br> Website application</b>
                </h2>
                <p class="font-nomal text-gray">
                    ปัจจุบันนี้เป็นยุคของ Website application เนื่องจากมี <br>
                    ข้อดีมากมาย ทําให้เราตัดสินใจที่จะเลือกพัฒนาโปรแกรมบน <br>
                    website โดยมีข้อดีดังนี้
                </p>
                <div class="font-nomal pt-2 pl-md-3 pl-lg-3 text-left mx-4 mx-md-0 mx-lg-0">
                    • สามารถใช้ได้กับทุกเครื่องคอมพิวเตอร์, Smartphone, Tablet โดยไม่ต้อง install โปรแกรม <br>
                    • สามารถอัพเดทโปรแกรมให้ทันสมัยได้อยู่เสมอ เนื่องจากโปรแกรมเงินเดือน <br>
                    จะต้องมีการอัพเดทอัตราภาษี ค่าลดหย่อนเพื่อให้สอดคล้องกับกรม <br>
                    สรรพากร และประกันสังคม<br>
                    • สามารถทํางานได้จากทุกที่ในโลกนี้ เพียงแต่ต่อ internet <br>
                    • ข้อมูลโปรแกรมไม่มีวันสูญหาย เนื่องจากเก็บไว้บน Cloud server<br>
                    • สามารถอัพเกรดโปรแกรมเพื่อเป็นฟังก์ชั่นต่างๆ ตามที่ผู้ใช้งานต้องการ<br>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url({{ asset('images/bg-table.png') }});padding-bottom: inherit;" class="pt-0">
        <div class="container-fluid padding-lg">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 text-center">
                    <h2 class="text-bold text-s-3">แพ็คเกจราคาคุ้มค่า <span class="ops"><a class="text-primary">ให้คุณเลือกตามต้องการ</a></span></h2>
                    <h4 class="text-gray">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                    </h4>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-12 col-lg-12">
                    <div class="row px-0 mx-0">
                        <div class="col-5 col-lg-5">
                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center shadow" style="
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
    background-image: linear-gradient(90deg,#5771db,#5791ec)!important;">
                            <div class="plan-header-blue" style="width:33%;">
                                แพคเกจ S
                            </div>
                            <div class="plan-header-blue" style="width:33%;">
                                แพคเกจ M
                            </div>
                            <div class="plan-header-blue" style="width:34%;">
                                แพคเกจ L
                            </div>
                        </div>
                    </div>
                    <div style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;" class="row px-0 mx-0 shadow">
                        <div  class="col-5 col-lg-5 plan-nomal text-header-table" style="border-left-color: #e2e2e2;border-top-left-radius:20px;color:#e8e8e8;">
                            Selelect Package

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal text-header-table" style="width:33%;">
                                990 <span class="ops">บาท</span>
                            </div>
                            <div class="plan-nomal text-header-table" style="width:33%;">
                                2,990 <span class="ops">บาท</span>
                            </div>
                            <div class="plan-nomal text-header-table"  style="width:34%;border-right:transparent;" >
                                5,990 <span class="ops">บาท</span>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i> ออกใบเสร็จรับเงินค่าบริการหักคชจ.บริษัท

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i>  ออกสลิปเงินเดือนอัตโนมัติ

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i> ออกใบประกัน (สปส.1-10) สังคมอัตโนมัติ

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i> ออกหนังสือชี้แจงการหักภาษีเงินได้ (ภงด.3 & 53) อัตโนมัติ

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i>  รายงานสรุปค่าใช้จ่ายต่อคนต่อเดือน

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i>  รองรับข้อมูลพนักงานรายเดือน รายวัน รายชั่วโมง
                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i>  คํานวนข้อมูลจภาษีจากพนักงานที่เข้า <br> กลางเดือน กลางปี เเละที่ลาออกกลางเดือน

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal pt-3" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal pt-3" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal pt-3"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i> ไม่จําเป็นต้องเริ่มคีย์ข้อมูลใหม่ตั้งแต่ ม.ค.

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i>  อัปโหลดไฟล์จากเครื่องสแกนนิ้วมือ ZTE

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i>  ระบบการอนุมัติก่อนออกสลิปจริง

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i>  บันทึกข้อมูลกองทุนสํารองเลี้ยงชีพ

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i> บันทึกข้อมูลสิทธิ์ประโยชน์ตามตําแหน่ง

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i>  ราคาต่อการออกสลิปเงินเดือน 1 ครั้ง

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                199.00 บาท
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                349.00 บาท
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                999.00 บาท
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;">
                            <i class="fas fa-angle-right pr-1"></i> ราคา LifeTime License จ่ายครั้งเดียวใช้ได้ไม่อั้น

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal" style="width:33%;">
                                19,888<span class="ops">.00 บาท</span>
                            </div>
                            <div class="plan-nomal" style="width:33%;">
                                59,888<span class="ops">.00 บาท</span>
                            </div>
                            <div class="plan-nomal"  style="width:34%;border-right:transparent;" >
                                129,888<span class="ops">.00 บาท</span>
                            </div>
                        </div>
                        <div  class="col-5 col-lg-5 plan-nomal" style="border-left-color: #e2e2e2;border-bottom-left-radius:20px;">

                        </div>
                        <div class="row-fake col-7 col-lg-7 text-center">
                            <div class="plan-nomal text-header-table-bottom text-primary" style="width:33%;">
                                ลองใช้ฟรี <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="plan-nomal text-header-table-bottom text-primary"  style="width:33%;">
                                ลองใช้ฟรี  <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="plan-nomal text-header-table-bottom text-primary"  style="width:34%;border-right:transparent;border-bottom-right-radius:20px;" >
                                ลองใช้ฟรี <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="container pt-0">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 text-center">
                <h2 class="text-s-3">รีวิวความประทับใจ <span class="ops"><a class="text-primary">จากลูกค้าที่ใช้บริการ</a></span></h2>
                <h4 class="font-nomal text-gray">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                    of classical Latin literature from 45 BC, making it over 2000 years old.
                </h4>
            </div>
        </div>
        <div class="row pt-1 pt-md-5 pt-lg-5">
            <div class="col-12 col-lg-4">
                <div class="card review-card">
                    <div class="card-body pt-5">
                        <img src="{{asset('images/profile-1.png')}}" alt="profile-image" class="profile">
                        <h3 class="card-title font-bold text-s-3 pt-2">Frank klin</h3>
                        <p class="card-title text-right"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        <h5><i class="fas fa-quote-left"></i>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </h5>
                        <p  class="text-center">
                            Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry.
                        </p>


                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card review-card">
                    <div class="card-body pt-5">
                        <img src="{{asset('images/profile-2.png')}}" alt="profile-image" class="profile">
                        <h3 class="card-title font-bold text-s-3 pt-2">Johne Major</h3>
                        <p class="card-title text-right"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        <h5><i class="fas fa-quote-left"></i>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _  </h5>
                        <p class="text-center">
                            abore et dolore magna aliqua. Ut<br>
                            enim ad minim veniam.
                        </p>


                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card review-card">
                    <div class="card-body pt-5">
                        <img src="{{asset('images/profile-3.png')}}" alt="profile-image" class="profile">
                        <h3 class="card-title font-bold text-s-3 pt-2">Linda Anand</h3>
                        <p class="card-title text-right"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        <h5><i class="fas fa-quote-left"></i>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </h5>
                        <p class="text-center">
                            exercitation ullamco laboris nisi ut<br>
                            aliquip ex ea commodo quat
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <script src="{{ asset('js/website/landing-page.js') }}"></script>
@endsection
