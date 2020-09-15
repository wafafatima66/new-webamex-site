<?php include "link.php"?>

<style>

.blog-area{
    
    padding:40px;
}
a.img-caption {
    margin: 0 0 40px;
    display: block
}

.img-caption img {
    position: relative
}

.img-caption figure {
    box-sizing: content-box;
    overflow: hidden;
    position: relative
}

.img-caption figcaption {
    background: rgba(0, 0, 0, .4);
    position: absolute;
    box-sizing: content-box;
    padding: 17px 25px;
    bottom: 0;
    display: block;
    width: 100%;
    -webkit-transition: background-color .2s ease-in-out;
    -moz-transition: background-color .2s ease-in-out;
    -ms-transition: background-color .2s ease-in-out;
    -o-transition: background-color .2s ease-in-out;
    transition: background-color .2s ease-in-out
}

.img-caption:hover figcaption {
    background: #ff6600;
}

.img-caption figcaption h3 {
    color: #fff;
    text-transform: uppercase;
    font-size: 17px;
    font-weight: 700;
    line-height: 24px
}

.mega .img-caption figcaption h3 {
    font-size: 14px;
    line-height: 20px
}

.mega .img-caption figcaption span {
    font-size: 14px;
    line-height: 14px
}

.mega .img-caption figcaption {
    padding: 10px 20px
}

.img-caption figcaption span {
    color: #fff;
    font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    display: block;
    position: relative;
    opacity: 0;
    max-height: 0;
    padding: 0;
    -webkit-transition: max-height .2s ease-in-out, opacity .2s ease-in-out, padding .2s ease-in-out;
    -moz-transition: max-height .2s ease-in-out, opacity .2s ease-in-out, padding .2s ease-in-out;
    -ms-transition: max-height .2s ease-in-out, opacity .2s ease-in-out, padding .2s ease-in-out;
    -o-transition: max-height .2s ease-in-out, opacity .2s ease-in-out, padding .2s ease-in-out;
    transition: max-height .2s ease-in-out, opacity .2s ease-in-out, padding .2s ease-in-out
}

.img-caption:hover figcaption span {
    max-height: 50px;
    opacity: 1;
    padding: 5px 0 4px
}
</style>
<div class="blog-area mt-5">
    

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-title">Read our articles</h2>
        </div>

        <div class="one-third col-md-4"> <a href="#" class="img-caption">
                <figure> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1556030102/home-office-336373_640.jpg" alt="" />
                    <figcaption>
                        <h3>MY First Caption</h3> <span>For what reason would it be advisable for me to think about business content?</span>
                    </figcaption>
                </figure>
            </a> </div>
        <div class="one-third col-md-4"> <a href="#" class="img-caption">
                <figure> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1556030091/office-620822_640.jpg" alt="" />
                    <figcaption>
                        <h3>MY Second Caption</h3> <span>For what reason would it be advisable for me to think about business content?</span>
                    </figcaption>
                </figure>
            </a> </div>
        <div class="one-third col-md-4"> <a href="#" class="img-caption">
                <figure> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1556030070/desktop-1985856_640.jpg" alt="" />
                    <figcaption>
                        <h3>MY Third Caption</h3> <span>For what reason would it be advisable for me to think about business content?</span>
                    </figcaption>
                </figure>
            </a> </div>
    </div>
</div>
</div>