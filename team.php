<?php include "link.php"?>

<style>
#team {
    background: #fff;
    padding: 60px 0;
    box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
}

.section-header h3 {
    font-size: 36px;
    color: #283d50;
    text-align: center;
    font-weight: 500;
    position: relative
}

.section-header p {
    text-align: center;
    margin: auto;
    font-size: 15px;
    padding-bottom: 60px;
    color: #556877;
    width: 50%
}

.fadeInUp {
    animation-name: fadeInUp
}

#team .member {
    text-align: center;
    margin-bottom: 20px;
    position: relative;
    border-radius: 50%;
    overflow: hidden
}

#team .member .member-info {
    opacity: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    transition: 0.2s
}

#team .member .member-info-content {
    margin-top: 50px;
    transition: margin 0.2s
}

#team .member:hover .member-info {
    background: #ff6600a8;
    opacity: 1;
    transition: 0.4s
}

#team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: #fff
}

#team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
    color: #fff
}

#team .member .social a {
    transition: none;
    color: #fff
}
</style>

<section id="team">
    <div class="container">
        <div class="section-header">
            <h3>Team</h3>
            <p>Meet our team</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="member"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559454811/team-1.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Walt Hannis</h4> <span>Chief Executive Officer</span>
                            <div class="social"> <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-google-plus"></i></a> <a href=""><i class="fa fa-linkedin"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="member"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559454840/team-2.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Namia Sarah</h4> <span>Project Manager</span>
                            <div class="social"> <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-google-plus"></i></a> <a href=""><i class="fa fa-linkedin"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="member"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559454870/team-3.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Jammy Anderson</h4> <span>CTO</span>
                            <div class="social"> <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-google-plus"></i></a> <a href=""><i class="fa fa-linkedin"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="member"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559454900/team-4.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Jepson Sinah</h4> <span>Developer</span>
                            <div class="social"> <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-google-plus"></i></a> <a href=""><i class="fa fa-linkedin"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>