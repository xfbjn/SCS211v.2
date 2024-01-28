<!DOCTYPE html>
<html lang="en">

<head>

     <!-- css -->
  <?php include("layouts/cs-css.php") ?>


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
                <img class="m-4" src="http://cs.vru.ac.th/images/css.png" height="70">
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target justify-content-center" role="banner">

    <!-- header -->
      <?php include("layouts/cs-header.php") ?>

    </header>
    <!-- start of content , see end in footer -->
    <div class="content">

        <div class="site-block-wrap">
            <div class="owl-carousel with-dots">
                <div style="background-image : url(http://cs.vru.ac.th/images/slide/1.jpg);" class="site-blocks-cover overlay overlay-2" data-aos="fade" id="home-section"></div>
                <div style="background-image : url(http://cs.vru.ac.th/images/slide/2.jpg);" class="site-blocks-cover overlay overlay-2" data-aos="fade" id="home-section"></div>
                <div style="background-image : url(http://cs.vru.ac.th/images/slide/3.jpg);" class="site-blocks-cover overlay overlay-2" data-aos="fade" id="home-section"></div>
                <div style="background-image : url(http://cs.vru.ac.th/images/slide/5.jpg);" class="site-blocks-cover overlay overlay-2" data-aos="fade" id="home-section"></div>
                <div style="background-image : url(http://cs.vru.ac.th/images/slide/6.jpg);" class="site-blocks-cover overlay overlay-2" data-aos="fade" id="home-section"></div>
                <div style="background-image : url(http://cs.vru.ac.th/images/slide/8.jpg);" class="site-blocks-cover overlay overlay-2" data-aos="fade" id="home-section"></div>
                <div style="background-image : url(http://cs.vru.ac.th/images/slide/10.jpg);" class="site-blocks-cover overlay overlay-2" data-aos="fade" id="home-section"></div>
            </div>
        </div>
        <style>
            .carousel {
                position: relative;
                width: 1500px;
                height: 300px;
                left: 50px;
                top: 20px;
                text-align: center;
            }

            .carousel-control-next {
                top: 20px;
                left: 600px;
            }

            .carousel-control-prev {
                top: 20px;
                left: -60px;
            }

            .col-lg-3,
            li {
                text-align: center;
            }

            /*
    //Extra small devices (portrait phones, less than 576px)
    // No media query for `xs` since this is the default in Bootstrap
    */
            .site-blocks-cover,
            .site-block-wrap {
                min-height: 0px;
                height: calc(23vh);
            }

            /*
    // Small devices (landscape phones, 576px and up)
    */
            @media (min-width: 576px) {

                .site-blocks-cover,
                .site-block-wrap {
                    min-height: 0px;
                    height: calc(26vh);
                }
            }

            /*
    // Medium devices (tablets, 768px and up)
    */
            @media (min-width: 768px) {

                .site-blocks-cover,
                .site-block-wrap {
                    min-height: 0px;
                    height: calc(30vh);
                }
            }

            /*
    // Large devices (desktops, 992px and up)
    */
            @media (min-width: 992px) {

                .site-blocks-cover,
                .site-block-wrap {
                    min-height: 0px;
                    height: calc(60vh);
                }
            }

            /*
    // Extra large devices (large desktops, 1200px and up)
    */
            @media (min-width: 1200px) {

                .site-blocks-cover,
                .site-block-wrap {
                    min-height: 0px;
                    height: calc(80vh);
                }

            }

            /* iframe[Attributes Style] {
        width: 200px;
        height: 500px;
        border-top-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 0px;
    } */
            .img {
                width: 180px;
                height: 500px;
                border-style: solid !important;
            }

            .text-center {
                text-align: center !important;

            }

            img {
                vertical-align: middle;
                border-style: none;
            }

            /*
    .row2 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right:0;
        margin-left:0;      

    }
    
    */
            .with-dots .owl-dots {
                margin-top: 0px;
                margin-bottom: 0px;
                /*text-align: center;
        position: absolute;*/
                bottom: 40px;
                /*width: 100%;*/
            }

            .site-blocks-cover.overlay:before {
                background: rgba(0, 0, 0, 0) !important;
            }

            .site-blocks-cover.overlay-2:after {
                background: rgba(0, 0, 0, 0) !important;
            }
        </style>
        <!-- start slide -->
        <div class="container-fluid py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-8">
                                <img class="img-thumbnail" src="http://cs.vru.ac.th/images/tcas/pr-2020-05-14.jpg" style="width:100%;">
                            </div>
                            <div class="col-lg-4 py-4">
                                <h5 class="mt-0 mb-2">รับสมัครนักศึกษา (ปริญญาตรีภาคจันทร์-ศุกร์ และภาคเสาร์-อาทิตย์)</h5>
                                <p class="py-2">
                                    หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                                    รับสมัครนักศึกษา TCAS 66 (ปริญญาตรี จันทร์-ศุกร์ และภาคเสาร์-อาทิตย์) ตั้งแต่วันนี้เป็นต้นไป
                                    ดูรายละเอียดและกรอกใบสมัครได้ที่นี่
                                </p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="tcas.php">สมัครเรียน</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-9">
                    <h4>COMSCI VRU NEWS</h4>
                    <div class="img-responsive" style="display:block;width:auto;height:100%; float:left;">

                        <ul class="nav nav-tabs" id="maincontent" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <font color="black">ประชาสัมพันธ์</font>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <font color="black">ทุนการศึกษา</font>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                    <font color="black">รับสมัครงาน/ฝึกงาน</font>
                                </a>
                            </li>
                        </ul>
                        <div class="" style="border: 2px solid #F5F5F5; overflow: auto; width: 100%; height: 420px;">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="margin-left:10px;margin-right:10px">
                                    <br />
                                    <a href="uploads/06-21/001.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;คำร้องขอเทียบโอนผลการเรียนเพื่อยกเว้นรายวิชา หมวดวิชาศึกษาทั่วไป(18 มิ.ย. 64)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/03-21/8-3-64.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ประกาศมหาวิทยาลัยเรื่อง แจ้งกำหนดการจองรายวิชาผ่านระบบออนไลน์นักศึกษาเต็มเวลา (จันทร์-ศุกร์) ภาคการศึกษาที่ 1/2564(8 มี.ค. 64)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/02-21/Binder1.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ศูนย์ภาษา แจ้งรายชื่อหลักสูตรเสริมทักษะภาษาอังกฤษระยะสั้น (ออนไลน์) รอบที่ ๒(9 ก.พ. 64)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-21/16-01-64_1.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ศูนย์ภาษา ประชาสัมพันธ์รับสมัครหลักสูตรเสริมทักษะภาษาอังกฤษระยะสั้นออนไลน์ รอบที่ 2(16 ม.ค. 64)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-21/16-01-64.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ศูนย์ภาษา ประชาสัมพันธ์รับสมัครหลักสูตรเสริมทักษะภาษาอังกฤษระยะสั้นออนไลน์ รอบที่ 1(16 ม.ค. 64)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/12-20/3-12-20.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;คณะวิทยาศาสตร์และเทคโนโลยี ขอเชิญศิษย์เก่าเข้าร่วมกิจกรรม(3 ธ.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/09-20/29-09-2563.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ศูนย์ภาษา ประชาสัมพันธ์ตารางสอบวัดความสามารถภาษาอังกฤษ VRU-TEP(29 ก.ย. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/08-20/25-08-2563(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ประกาศมหาวิทยาลัย เรื่องการรับสมัครนักศึกษาปริญญาตรี เสาร์-อาทิตย์ ภาคเรียนที่2 ปีการศึกษา 2564(25 ส.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/08-20/25-08-2563.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ประกาศมหาวิทยาลัย เรื่องการรับสมัครนักศึกษาปริญญาตรี จันทร์-ศุกร์ ปีการศึกษา 2564(25 ส.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/07-20/30-07-2563.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ประกาศมหาวิทยาลัย ฉบับที่ 9 กำหนดอัตราค่าธรรมเนียมเรียกเก็บสำหรับการจัดการศึกษาระดับปริญญาตรี พ.ศ.2563(30 ก.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/07-20/30-07-2563(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;กองพัฒนานักศึกษา ขอประชาสัมพันธํ์และส่งหลักเกณฑ์การประกวดคลิปวิดิโอ หัวข้อ "VRU Safe Driving"(30 ก.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/07-20/2-07-2563(2).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;แนวทางการดำเนินกิจกรรม งดการจัดกิจกรรมต้อนรับน้องใหม่และประชุมเชียร์(2 ก.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/07-20/2-07-2563(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ประกาศมหาวิทยาลัย งดการจัดกิจกรรมต้อนรับน้องใหม่ และประชุมเชียร์(2 ก.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/07-20/2-07-2563.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ประกาศมหาวิทยาลัย มาตรการเฝ้าระวังการระบาดเชื้อไวรัสโคโรนา(2 ก.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/04-20/27-04-2563.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ประชาสัมพันธ์ ประกาศมหาวิทยาลัย วิธีการจ่ายเงินช่วยเหลือนักศึกษาได้รับผลกระทบโควิด-19(27 เม.ย. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/04-20/27-04-2563(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ประชาสัมพันธ์รายละเอียดระบบเรียนออนไลน์ทักษะด้านดิจิทัล(27 เม.ย. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/04-20/27-04-2563(2).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;แจ้งการคัดเลือกผลงาน กิจกรรม สัมมนานักศึกษาฝึกประสบการณ์วิชาชีพสหกิจศึกษาและนักศึกษาฝึกประสบการวิชาชีพ(23 เม.ย. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/03-20/04-03-2563.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;บริษัท ซีพี ออลล์ จำกัด(มหาชน) ประชาสัมพันธ์โครงการ "Leadership Development Program"(4 มี.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/02-20/11-02-63.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;งานวิชาการศึกษาทั่วไป ประชาสัมพันธ์เกี่ยวกับการลงทะเบียนเรียนวิชาศึกษาทั่วไป (11 ก.พ. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-20/20-01-63.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศมหาวิทยาลัย เรื่อง แจ้งกำหนดจองรายวิชาผ่านระบบออนไลน์ นักศึกษาระดับปริญญาตรีเต็มเวลา เสาร์-อาทิตย์ ภาคฤดูร้อน /2562 (20 ม.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-20/20-01-63(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ศูนย์ภาษา แจ้งกำหนดการสอบวัดความสารมารถภาษาอังกฤษ VRU-TEP สำหรับนักศึกษาปริญญาตรีเต็มเวลา จันทร์-ศุกร์ ชั้นปีที่2รหัส 61 และชั้นปีที่4รหัส 59 ประจำปีการศึกษา 2562 (20 ม.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-20/16-01-63.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; คณะวิทยาศาสตร์และเทคโนโลยี ขอเชิญนักศึกษาเข้าร่วมโครงการอบรม Mocktial Mixology Class (16 ม.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-20/09-01-63(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ศูนย์ภาษา ประชาสัมพันธ์ตารางรอบจัดสอบวัดความสามารถภาษาอังกฤษ VRU-TEP สำหรับนักศึกษาเสาร์-อาทิตย์ชั้นปีสุดท้าย/ก่อนสำเร็จการศึกษา ปีการศึกษา2562 (10 ม.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-20/09-01-63.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; กองพัฒนานักศึกษา ประชาสัมพันธ์ให้นักศึกษาสมัครนายกองค์การนักศึกษาภาคปกติ (10 ม.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-20/03-01-63.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศมหาวิทยาลัยเรื่อง การทดสอบภาษาอังกฤษสำหรับนักศึกษา ระดับปริญญาตรี พ.ศ. 2559 (3 ม.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-20/03-01-63(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศมหาวิทยาลัยเรื่อง เกณฑ์มาตรฐานและการรับรองความสามารถภาษาอังกฤษของนักศึกษาระดับปริญญาตรี พ.ศ. 2561 (3 ม.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/12-19/17-12-19(3).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; สำนักงานพัฒนาการวิจัยการเกษตร ประชาสัมพันธ์ทุนวิจัยบัณฑิตศึกษาด้านการเกษตร (17 ธ.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/11-19/23-11-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; กองพัฒนานักศึกษาขออนุญาตให้นักศึกษาเข้าร่วมกิจกรรมพิธีอัญเชิญตราพระราชลัญจกร ประจำปีการศึกษา 62 (23 พ.ย. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/11-19/23-11-19(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; กรมบัญชีกลาง ประชาสัมพันธ์แนวทางปฏิบัติในการกำหนดคุณสมบัติของผู้ยื่นข้อเสนอและการกำหนดผลงาน (23 พ.ย. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/11-19/4-11-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ขอแจ้งนักศึกษาชั้นปีที่1 เข้าร่วมฝึกซ้อมพิธีอัญเชิญตราพระราชลัญจกร ประจำปีการศึกษา 2562 (4 พ.ย. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/10-19/24-10-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; คณะวิทยาศาสตร์และเทคโนโลยี แจ้งวันปฐมนิเทศนักศึกษาสหกิจศึกษา (24 ต.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/09-19/05-09-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศมหาวิทยาลัยการรับสมัครนักศึกษาระดับ ปริญญตรี จันทร์-ศุกร์ ประจำปีการศึกษา 2563 (5 ก.ย. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/08-19/19-08-19(2).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศการรับสมัครนักศึกษาระดับปริญญาตรี เสาร์-อาทิตย์ ภาคการศึกษาที่ 2 /2562 (19 ส.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/07-19/24-7-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; สำนักงานพัฒนาเทคโนโลยีอวกาศและภูมิสารสนเทศ(องค์การมหาชน) ขอเชิญร่วมเยี่ยมชมนิทรรศการและกิจกรรมในงาน Thailand Space Week 2019(24 ก.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/07-19/12-7-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศรายชื่อนักศึกษา ผู้มีสิทธิ์กู้ยืมเงิน กยศ. และ กรอ.(12 ก.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/07-19/7-7-19(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; กระทรวงการอุดมศึกษา ขอความร่วมมือกำกับดูแลการจัดกิจกรรมต้อนรับน้องใหม่(7 ก.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/06-19/22-06-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; การกำกับดูแลการจัดกิจกรรมรับน้องนักศึกษาใหม่ ชั้นปีที่ 1(22 มิ.ย. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/03-19/07-03-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศมหาวิทยาลัย เรื่องการลงทะเบียนวิชาการฝึกประสบการณ์วิชาชีพ สหกิจศึกษา 62(7 มี.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/02-19/09-02-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ขอเปลี่ยนแปลงกำหนดการรับสมัครนักศึกษาระดับปริญญาตรีเต็มเวลา เสาร์-อาทิตย์ ภาคการศึกษาที่1 ปีการศึกษา 2562
                                            (9 ก.พ. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/10-18/25-10-18(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; งานบ่มเพาะธุรกิจ สถาบันวิจัยและพัฒนา ขอส่งคำอธิบายรายวิชา UBI 101 การสร้างและพัฒนาศักยภาพผู้ประกอบการใหม่
                                            (25 ต.ค. 61)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/10-18/09-10-61.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; บริษัท ซัมมิท แคปปิตอล ลีสซิ่ง จำกัด ประชาสัมพันธ์โครงการกลับบ้านปลอดภัย เพื่อร่วมกิจกรรมประกวดออกแบบ ตราสัญลักษณ์ประจำโครงการ ชิงเงินรางวัลมูลค่ากว่า 120,000 บาท พร้อมโล่ประกาศเกียรติคุณ
                                            (9 ต.ค. 61)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/08-18/2-8-18(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; กองพัฒนานักศึกษา ประชาสัมพันธ์นักศึกษาชายที่มีความประสงค์ผ่อนผันทหารกองประจำการ 2562 (2 ส.ค. 61)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/06-18/30-06-18.PDF">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศมหาวิทยาลัย เรื่องแจ้งกำหนดการจองรายวิชาผ่านระบบออนไลน์ นักศึกษาระดับปริญญาตรี เต็มเวลา (จันทร์-ศุกร์) ภาคการศึกษาที่ 1/2561 (30 มิ.ย. 61)</font>
                                    </a>
                                    <hr>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="margin-left:10px;margin-right:10px">
                                    <br />
                                    <a href="uploads/12-19/17-12-19(2).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; สำนักงานปลัดกระทรวงการอุดมศึกษา เปิดรับสมัครทุน Franco-Thai Scholarship Program ประจำปี 2563 (17 ธ.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/12-19/17-12-19(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;กระทรวงการอุดมศึกษาประชาสัมพันธ์ทุนการศึกษา Stipendlum Hungaricum ประจำปีการศึกษา 2020-2021 ของรัฐบาลฮังการี (17 ธ.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/11-19/23-11-19(2).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;สำนักงานปลัดกระทรวงการอุดมศึกษา ประชาสัมพันธ์ทุนมูลนิธิอายิโนะโมะโต๊ะ จำนวน 50 ทุน (23 พ.ย. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/09-19/05-09-19(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;มูลนิธิอมตะ ประชาสัมพันธ์คัดเลือกนักศึกษารับทุนการศึกษาต่อเนื่อง (5 ก.ย. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/01-19/27-1-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; มูลนิธิการศึกษาไทย - อเมริกัน(ฟุลไบรท์) เปิดรับสมัครผู้ที่สนใจชิง ทุนการศึกษา Fulbright thai graduate scholarship program ประจำปีการศึกษา 2563 จำนวน 7 ทุน เพื่อศึกษาต่อระดับปริญญาโท หรือปริญญาเอก ในประเทศสหรัฐอเมริกา (27 ม.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/10-18/25-10-18(2).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; สถานเอกอัครราชทูตออสเตรเลีย ประชาสัมพันธ์ทุนการศึกษา (25 ต.ค. 61)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/09-18/22-9-61.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; มูลนิธิอายิโนะโมะโต๊ะ ประกาศการให้ทุนการศึกษาโครงการ "ทุนส่งน้องเรียนจบ" ประจำปีการศึกษา2561 (22 พ.ย. 61)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/08-18/2-8-18(3).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ทุนการศึกษา เทสโก้ โลตัส เพื่อนักศึกษามหาวิทยาลัย (2 ส.ค. 61)</font>
                                    </a>
                                    <hr>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" style="margin-left:10px;margin-right:10px">
                                    <br />
                                    <a href="uploads/07-20/2-07-2563(3).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; สนง.คุ้มครองผู้บริโภค ขอความประชาสัมพันธ์การรับนักศึกษาฝึกงาน (2 ก.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/05-20/14-05-20.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226;ประกาศรับสมัครสอบแข่งขันเพื่อบรรจุและแต่งตั้งบุคคลเข้าเป็นพนักงานมหาวิทยาลัย สายสนับสนุน ตำแหน่งนักวิชาการคอมพิวเตอร์ จำนวน 1 ตำแหน่ง 2 อัตรา สังกัดศูนย์คอมพิวเตอร์ สำนักงานอธิการบดี มรภ.วไลยอลงกรณ์ ในพระบรมราชูปถัมภ์(14 พ.ค. 63)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/10-19/29-10-19.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; รับสมัครเจ้าหน้าที่ประจำตามสัญญาจ้าง ตำแหน่ง นักวิชาการคอมพิวเตอร์ จำนวน 1 อัตรา สังกัดคณะวิทยาศาสตร์และเทคโนโลยี (29 ต.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/08-19/19-08-19(1).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; บริษัทสเปเชียลตี้ ประชาสัมพันธ์รับนักศึกษาฝึกประสบการณ์วิชาชีพ (19 ส.ค. 62)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/10-18/25-10-18(3).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; สำนักงานพัฒนาเทคโนโลยีอวกาศ ประกาศรับสมัครนักศึกษาฝึกงานและนักศึกษาสหกิจ (25 ต.ค. 61)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/08-18/2-8-18(2).pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; บริษัท อีปิค คอมพิวเตอร์ ประชาสัมพันธ์รับนักศึกษาฝึกงาน (2 ส.ค. 61)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/07-18/12-7-18.PDF">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; บริษัท เซ้าท์ อีสท์ เอเชีย เน็ทเวอร์ค คอร์ปอเรชัน จำกัด ประกาศรับสมัครโปรแกรมเมอร์ หลายตำแหน่ง (12 ก.ค. 61)</font>
                                    </a>
                                    <br />
                                    <a href="uploads/07-18/9-7-18.pdf">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศมหาวิทยาลัย เรื่อง รับสมัครสอบแข่งขันเพื่อบรรจุแต่งตั้งบุคคลเข้าเป็นบุคคลเป็นพนักงานมหาวิทยาลัย สายสนับสนุน จำนวน 2 ตำแหน่ง 2 อัตรา (9 ก.ค. 61)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/06-18/19-06-18.PDF">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศคณะวิทยาศาสตร์และเทคโนโลยี เรื่อง รายชื่อผู้มีสิทธิสอบภาคความรู้ความสามารถทั่วไปและสัมภาษณ์ (19 มิ.ย. 61)</font>
                                    </a>
                                    <hr>
                                    <a href="uploads/06-18/05-06-18.PDF">
                                        <font color="black">&nbsp;&nbsp;&nbsp;&#8226; ประกาศคณะวิทยาศาสตร์และเทคโนโลยี เรื่อง รับสมัครเจ้าหน้าที่ประจำตามสัญญาจ้าง ตำแหน่งเจ้าหน้าที่บริหารงานทั่วไป จำนวน 1 อัตรา (4 มิ.ย. 61)</font>
                                    </a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcs.vru.ac.th%2F&amp;tabs=timeline&amp;width=250&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1267020360104932" width="250" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <h4>Quick Links</h4>
                    <div class="text-center">
                        <a href="http://cms.vru.ac.th/login.aspx">
                            <img src="http://cs.vru.ac.th/images/CMS.jpg" width="250" height="70" style="margin-top:3px;">
                        </a>
                        <a href="http://reg1.vru.ac.th/">
                            <img src="http://cs.vru.ac.th/images/Grade.jpg" width="250" height="70" style="margin-top:20px;">
                        </a>
                        <a href="http://reg3.vru.ac.th/acad_mka/">
                            <img src="http://cs.vru.ac.th/images/TQF.jpg" width="250" height="70" style="margin-top:3px;">
                        </a>
                        <a href="https://goo.gl/forms/59Nz2gnBpnc9QSEX2">
                            <img src="http://cs.vru.ac.th/images/fromfix.jpg" width="250" height="70" style="margin-top:3px;">
                        </a>
                        <a href="https://forms.gle/5tiPTzzFoivjKCNV6">
                            <img src="http://cs.vru.ac.th/images/123.jpg" style="margin-top:3px;">
                        </a>
                        <a href="https://forms.gle/7StYDzL6H2esgBi1A">
                            <img src="http://cs.vru.ac.th/images/Network.jpg" style="margin-top:3px;">
                        </a>
                    </div>

                </div>

            </div>



        </div>

        <!-- ติดตามข่าวสารได้ที่นี่ -->
        <div class="container pt-5">
            <h2 class="anchor" id="qr-code"><i class="fa fa-bullhorn"></i> ติดตามข่าวสารการสมัครได้ที่นี่</h2>
            <div class="">
                <p>หลักจากที่คุณได้สมัครเข้ามาแล้ว คุณสามารถติดตามข่าวสารการสมัครของคุณ รวมถึงการประกาศต่างๆ จากทางมหาวิทยาลัยอย่างใกล้ชิดให้ที่ Line กลุ่มของหลักสูตร โดยจะแบ่งเป็น 2 กลุ่ม ได้แก่่ </p>
                <div class="row text-center">
                    <div class="col-lg-6 mb-4">
                        <img class="img-thumbnail" src="http://cs.vru.ac.th/images/tcas/Line66-Mon-Fri.jpg" style="max-width:300px; width:100%;">
                        <div><strong>CS-VRU#66 (จันทร์ - ศุกร์)</strong></div>
                        <div><a href="https://line.me/R/ti/g/A1qfif64ro">https://line.me/R/ti/g/A1qfif64ro</a></div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <img class="img-thumbnail" src="http://cs.vru.ac.th/images/tcas/Line66-Sat-Sun.jpg" style="max-width:300px; width:100%;">
                        <div><strong>CS VRU #66 (เสาร์ - อาทิตย์)</strong></div>
                        <div><a href="https://line.me/R/ti/g/IpAq74I8OO">https://line.me/R/ti/g/IpAq74I8OO</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->

    </div>
    <!-- end of content, see start in header -->
    <style>
        .site-footer,
        .footer-heading,
        .site-footer .p {
            font-size: 16px;
            text-align: center !important;
            background: #8e24aa !important;
            /*color: #fff!important;*/
        }

        .site-footer p,
        .site-footer a {
            color: #bbb !important;
        }

        .site-footer .border-top {
            border-top: 1px solid #bbb !important;
        }

        .site-footer {
            padding: 0 !important;
            padding-top: 4em !important;
            padding-bottom: 4em !important;

        }
    </style>
    <div class="container-fluid bg-light  p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pl-4">
                    <h3>สมัครเรียนกับเรา</h3>
                    <h5 id="schedule">สอบถามข้อมูลการรับสมัครเพิ่มเติม</h5>
                    <p>โทร. 02-909-1432 ต่อ 322 หรือ 323</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="py-4">
                        <a class="btn btn-primary" href="tcas.php">รายะละเอียดสมัครเรียน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
         <!-- footer -->
       <?php include("layouts/cs-footer.php") ?>
       
    </footer>
    <!-- script -->
    <?php include("layouts/cs-script.php") ?>

</body>

</html>