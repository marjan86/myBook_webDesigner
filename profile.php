<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کتاب من | پروفایل</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="./style/main.css">
    <style>
       .primary{
            background-color: rgb(59,89,152);
            color: whitesmoke;
        }
        .text_color{
            color: whitesmoke;
            border: solid 1px whitesmoke;
           
        }
        .text_color_2{
            color: rgb(59,89,152);
        }
        .profile_img{
            height: 3rem;
            }
       
        .brand {
            position: absolute;
            left: 50%;
            margin-left: -50px !important;  /* 50% of your logo width */
            display: block;
        }
        .hero_profile{
            background-image: url("./socialImages/mountain.jpg");
            background-color: white;
            background-repeat: no-repeat;
            background-size:cover;
        }
        .link_name{
            color: rgb(59,89,152);
            text-decoration: none;
            font-weight: bold;
        }
        #friend-list { 
            display: block;
            margin: 0;
            padding: 0;
            /* width: 300px; */
            /* height: 100%; */
            list-style-type: none;
        }

        .friend {
            /* width: 300px;
            height: 60px; */
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .friend img {
            width: 75px;
            height: 75px;
            object-fit: cover;
        }
        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

    </style>

</head>
<body class="bg-light" style="overflow-x: hidden;">
    <!-- blue bar -->
    <header class="p-3 mb-3 border-bottom primary">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <div class="nav col-12 col-lg-2 me-lg-auto mb-2 justify-content-center mb-md-0 text-white fs-4 fw-bold">
          کتاب من
        </div>

        <form class="col-12 col-lg-8 mb-3 mb-lg-0 me-lg-5">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="جستجو" aria-label="Example text with two button addons">
                    <button class="btn text_color" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"> <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/> </svg>
                    </button>
            </div>
        </form>
       

        <div class="dropdown ms-5">
          <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="./socialImages/selfie.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">درباره من</a></li>
            <li><a class="dropdown-item" href="#">دوستان</a></li>
            <li><a class="dropdown-item" href="#">تصاویر</a></li>
            <li><a class="dropdown-item" href="#">تنظیمات</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">خروج</a></li>
          </ul>
        </div>
      </div>
    </div>
    </header>

    <!-- cover bar -->
    <div class="mx-3 px-4 py-5 text-center hero_profile">
        <img class="d-block mx-auto mb-4 border border-3 rounded-circle w-25" src="./socialImages/selfie.jpg" alt="">
        <h1 class="display-6 text-white">مینا اکبری</h1>   
    </div>
    <ul class="nav justify-content-center bg-white mx-3">
        <li class="nav-item">
            <a class="nav-link fs-5 px-md-5 text_color_2" aria-current="page" href="#">درباره من</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 px-md-5 text_color_2" href="#">دوستان</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 px-md-5 text_color_2" href="#">تصاویر</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-5 px-md-5 text_color_2" href="#" >تنظیمات</a>
        </li>
    </ul>

    <!-- posts -->
    <div class="row m-3">

        <div class="col-lg-8 ps-0 pe-3">
            <div class="border border-1 bg-white position-relative">
                <textarea placeholder="چه در ذهن دارید؟" cols="30" rows="8" class="p-3 w-100 bordre border-0"></textarea>
                <button class="primary px-3 py-1 fw-bold rounded position-absolute bottom-0 end-0 me-1 mb-1">ارسال</button>
            </div>
            <div class="bg-white mt-3">
                <div class="d-flex justify-content-center align-self-center p-3">
                    <div>
                        <img src="./socialImages/user1.jpg" alt="freinds" width="75" height="75">
                    </div>
                    <div class="ms-3">
                        <h5 class="text_color_2 fw-bold ">کاربر 1</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای 
                            علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                    </div>
                </div>
                
                <div class=""  style="margin-right: 110px;">
                    <a href="" class="text_color_2 " style="text-decoration: none;"> لایک .</a>
                    <a href="" class="text_color_2 " style="text-decoration: none;" >نظر . </a>
                    <span class="text-secondary ">1 مهر 1402</span>
                </div>
                <hr class="mx-3">

                <div class="d-flex justify-content-center align-self-center p-3">
                    <div>
                        <img src="./socialImages/user2.jpg" alt="freinds" width="75" height="75">
                    </div>
                    <div class="ms-3">
                        <h5 class="text_color_2 fw-bold ">کاربر 2</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای 
                            علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                    </div>
                </div>
                
                <div class=""  style="margin-right: 110px;">
                    <a href="" class="text_color_2 " style="text-decoration: none;"> لایک .</a>
                    <a href="" class="text_color_2 " style="text-decoration: none;" >نظر . </a>
                    <span class="text-secondary ">1 مهر 1402</span>
                </div>
                <hr class="mx-3">

                <div class="d-flex justify-content-center align-self-center p-3">
                    <div>
                        <img src="./socialImages/user3.jpg" alt="freinds" width="75" height="75">
                    </div>
                    <div class="ms-3">
                        <h5 class="text_color_2 fw-bold ">کاربر 3</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای 
                            علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                    </div>
                </div>
                
                <div class=""  style="margin-right: 110px;">
                    <a href="" class="text_color_2 " style="text-decoration: none;"> لایک .</a>
                    <a href="" class="text_color_2 " style="text-decoration: none;" >نظر . </a>
                    <span class="text-secondary ">1 مهر 1402</span>
                </div>
                <hr class="mx-3">
            </div>
        </div>

        <div class="col-12 col-lg-4 bg-white">
            <h4 class="text_color_2 fw-bold m-3">دوستان</h4>
            <ul id='friend-list'>
                <li class='friend m-3 border border-1 p-1 '>
                    <img src='https://i.imgur.com/nkN3Mv0.jpg' class="me-5 " alt="friend" />
                    <div class=''>
                        <p class="p-0 m-0 fw-bold">علی اکبری</p>
                        <p class="p-0 m-0">09121234567</p>
                    </div>
                </li>
                <li class='friend m-3 border border-1 p-1'>
                    <img src='https://i.imgur.com/0I4lkh9.jpg' class="me-5" alt="friend" />
                    <div class='name'>
                        <p class="p-0 m-0 fw-bold">لیلا رحیمی</p>
                        <p class="p-0 m-0">09121234567</p>
                    </div>
                </li> 
                <li class='friend m-3 border border-1 p-1'>
                    <img src='https://i.imgur.com/s2WCwH2.jpg' class="me-5" alt="friend" />
                    <div class='name'>
                        <p class="p-0 m-0 fw-bold"> کاربر 3 </p>
                        <p class="p-0 m-0">09121234567</p>
                    </div>
                </li>
                <li class='friend m-3 border border-1 p-1'>
                    <img src='https://i.imgur.com/rxBwsBB.jpg' class="me-5" alt="friend" />
                    <div class='name'>
                        <p class="p-0 m-0 fw-bold"> کاربر 4 </p>
                        <p class="p-0 m-0">09121234567</p>
                    </div>
                </li>
                <li class='friend m-3 border border-1 p-1'>
                    <img src='https://i.imgur.com/tovkOg2.jpg' class="me-5" alt="friend" />
                    <div class='name'>
                        <p class="p-0 m-0 fw-bold"> کاربر 5 </p>
                        <p class="p-0 m-0">09121234567</p>
                    </div>
                </li>
                <li class='friend m-3 border border-1 p-1'>
                    <img src='https://i.imgur.com/A7lNstm.jpg' class="me-5" alt="friend" />
                    <div class='name'>
                        <p class="p-0 m-0 fw-bold"> کاربر 6 </p>
                        <p class="p-0 m-0">09121234567</p>
                    </div>
                </li>
            </ul>
        </div>
    
    </div>

    

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>