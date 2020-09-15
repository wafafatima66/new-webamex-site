<?php include "link.php"?>

<style>
.testimonial-area{

}
.testimonial-section-header h3 {
  font-size: 36px;
  color: #283d50;
  text-align: center;
  font-weight: 500;
  position: relative
}

.testimonial-section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  color: #556877;
  width: 50%
}

 .testimonial-card {
     position: relative;
     display: flex;
     width: 350px;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 11px;
     -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
     -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
     box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
 }

 .testimonial-card-title h4{
     font-size:30px;
 }
 .testimonial-card .testimonial-card-body {
     padding: 1rem 1rem;
     height:300px
 }

 .testimonial-card-body {
     flex: 1 1 auto;
     padding: 1.25rem
 }

 .testimonial-card-body p {
     font-size: 0.875rem;
     margin-bottom: .5rem;
     line-height: 1.5rem;
     height:100px
 }

 .testimonial-card-body h4 {
     line-height: .2 !important
 }

 .profile {
     margin-top: 16px;
     margin-left: 11px
 }

 .profile-pic {
     width: 58px
 }

 .cust-name {
     font-size: 18px
 }

 .cust-profession {
     font-size: 10px
 }

 .testimonial-items {
     width: 90%;
     margin: 0px auto;
     margin-top: 50px
 }

 .slick-slide {
     margin: 10px
 }
</style>

<div class="testimonial-area m-4">
        <div class="testimonial-section-header">
            <h3>Testimonial</h3>
            <p>Let see what our client tell about us </p>
        </div>

<div class="testimonial-items">
    <div class="testimonial-card">
        <div class=" testimonial-card-body">
            <h4 class="testimonial-card-title"><i class="fas fa-quote-left"></i></h4>
            <div class="template-demo">
                <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2"> <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png"> </div>
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Delbert Simonas</h4>
                        <p class="cust-profession">Store Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-card">
        <div class=" testimonial-card-body">
            <h4 class="testimonial-card-title"><i class="fas fa-quote-left"></i></h4>
            <div class="template-demo">
                <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2"> <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png"> </div>
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Delbert Simonas</h4>
                        <p class="cust-profession">Store Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-card">
        <div class=" testimonial-card-body">
            <h4 class="testimonial-card-title"><i class="fas fa-quote-left"></i></h4>
            <div class="template-demo">
                <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2"> <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png"> </div>
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Delbert Simonas</h4>
                        <p class="cust-profession">Store Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-card">
        <div class=" testimonial-card-body">
            <h4 class="testimonial-card-title"><i class="fas fa-quote-left"></i></h4>
            <div class="template-demo">
                <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2"> <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png"> </div>
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Delbert Simonas</h4>
                        <p class="cust-profession">Store Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-card">
        <div class=" testimonial-card-body">
            <h4 class="testimonial-card-title"><i class="fas fa-quote-left"></i></h4>
            <div class="template-demo">
                <p>Online reviews can make or break a customer's decision to make a purchase. Read about these customer review sites where your customers'</p>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2"> <img class="profile-pic" src="https://img.icons8.com/bubbles/100/000000/edit-user.png"> </div>
                <div class="col-sm-10">
                    <div class="profile">
                        <h4 class="cust-name">Delbert Simonas</h4>
                        <p class="cust-profession">Store Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    </div>
    </div>

<script>
    $(document).ready(function(){

$('.testimonial-items').slick({
dots: true,
infinite: true,
speed: 800,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 3,
slidesToScroll: 3,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}

]
});
});
</script>