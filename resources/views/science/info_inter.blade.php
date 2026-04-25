<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title><link rel="preload" as="image" imagesrcset="https://developergtm.in/wp-content/uploads/2024/03/Screenshot-202024-03-10-20103614.png" imagesizes="(max-width: 749px) 100vw, 749px" /><link rel="preload" as="font" href="https://developergtm.in/wp-content/themes/smart-mag/css/icons/fonts/ts-icons.woff2?v3.1" type="font/woff2" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
            * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .header-top {
            display: flex;
            justify-content: center;
            padding: 10px 30px;
            column-gap: 813px;
            align-items: center;
            height: 20px;
            background-color: rgba(255, 20, 145, 0.822);
        }
        
        .header-top .logo {
            display: flex;
            column-gap: 10px;
        }
        
        .header-top .header-item {
            display: flex;
            column-gap: 10px;
        }
        
        .header-top .header-item a {
            text-decoration: none;
            font-size: 20px;
            color: black;
        }
        
        .header {
            display: flex;
            justify-content: center;
            padding: 10px 30px;
            column-gap: 290px;
            align-items: center;
            height: 50px;
            background-color: white;
        }
        
        .header .header-item {
            display: flex;
            column-gap: 30px;
        }
        
        .header .header-item a {
            text-decoration: none;
            font-size: 20px;
            color: black;
        }
        
        .header .header-item .home-btn {
            border-bottom: 2px solid black;
        }
        
        .header .shop-icon {
            display: flex;
            column-gap: 10px;
        }
        
        .header .shop-icon i {
            cursor: pointer;
        }
        
        .home {
            background-image: linear-gradient(299deg, #c2efeb, #baceed);
            background-size: cover;
            height: 465px;
            width: 100%;
        }
        
        .home .slide {
            display: flex;
            column-gap: 5px;
            margin-top: -70px;
            justify-content: center;
            align-items: center;
        }
        
        .home .slide .one {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            border: 1px solid black;
        }
        
        .home .slide .two {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: flex;
            background: darkgray;
        }
        
        .home .slide span {
            width: 10px;
            cursor: pointer;
            height: 10px;
            border-radius: 50%;
            display: flex;
            background: darkgray;
        }
        
        .home .main-sec {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
            padding-top: 80px;
        }
        
        .home .main-sec .left .txt {
            display: flex;
            flex-direction: column;
            row-gap: 20px;
        }
        
        .home .left .txt p {
            font-size: 3rem;
            color: black;
        }
        
        .home .left .txt button {
            padding: 15px 20px;
            border: none;
            width: fit-content;
            box-shadow: rgba(111, 87, 130, 0.32) 0px 12px 30px 0px;
            background-color: rgba(255, 20, 145, 0.822);
            cursor: pointer;
        }
        
        .home .left {
            width: 46vw;
            padding: 30px;
        }
        
        .home .right {
            width: 46vw;
        }
        
        .product-box {
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .product-box .main-box {
            display: flex;
            justify-content: center;
            align-items: center;
            column-gap: 20px;
        }
        
        .product-box .main-box .box {
            width: 350px;
            height: 360px;
            background-image: linear-gradient(143deg, #c79969, transparent);
            border-radius: 8px;
            padding: 20px;
            overflow: hidden;
        }
        
        .product-box .main-box .box .txt {
            display: flex;
            flex-direction: column;
            row-gap: 10px;
        }
        
        .product-box .main-box .box .txt button {
            padding: 10px 20px;
            border: none;
            background: white;
            width: fit-content;
            cursor: pointer;
        }
        
        .product-box img {
            width: 450px;
        }
        
        .product-box .main-box .box2 {
            width: 350px;
            height: 360px;
            background-image: linear-gradient(143deg, #7a7b87, transparent);
            border-radius: 8px;
            padding: 20px;
            overflow: hidden;
        }
        
        .product-box .main-box .box2 .txt {
            display: flex;
            flex-direction: column;
            row-gap: 10px;
        }
        
        .product-box .main-box .box2 .txt button {
            padding: 10px 20px;
            border: none;
            background: white;
            width: fit-content;
            cursor: pointer;
        }
        
        .product-box .head {
            width: 230px;
            margin-left: 116px;
        }
        
        .product-box .main-box .box3 {
            width: 350px;
            height: 360px;
            background-image: linear-gradient(143deg, #75c9c6, transparent);
            border-radius: 8px;
            padding: 20px;
            overflow: hidden;
        }
        
        .product-box .main-box .box3 .txt {
            display: flex;
            flex-direction: column;
            row-gap: 10px;
        }
        
        .product-box .main-box .box3 .txt button {
            padding: 10px 20px;
            border: none;
            background: white;
            width: fit-content;
            cursor: pointer;
        }
        
        .product-box .box3 .air {
            margin-left: 39px;
            width: 372px;
            margin-top: -65px;
        }
        
        .trending {
            height: 300px;
            /* background-color: #75c9c6; */
            width: auto;
            padding: 30px;
        }
        
        .trending .txt {
            display: flex;
            justify-content: center;
        }
        
        .trending .main-box {
            display: flex;
            justify-content: center;
            column-gap: 40px;
            margin-top: 20px;
        }
        
        .trending .main-box .box {
        
            width: 271px;
            height: 256px;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            row-gap: 13px;
        }
        
        .trending .main-box .box img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }
        
        .popular {
            height: 850px;
            /* background-color: #75c9c6; */
            width: auto;
            padding: 30px;
        }
        
        .popular .txt {
            display: flex;
            justify-content: center;
        }
        
        .popular .main-box {
            display: flex;
            justify-content: center;
            column-gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
            row-gap: 20px;
            height: 820px;
        }
        
        .popular .main-box .box img {
            height: 220px;
        }
        
        .popular .main-box .box {
            padding: 20px;
            width: 255px;
            display: flex;
            flex-direction: column;
            row-gap: 11px;
            background-image: linear-gradient(231deg, #e7eff1, #baffec);
            border-radius: 8px;
        }
        
        .popular .main-box .box .offer p {
            background-color: deeppink;
            color: white;
            width: fit-content;
            padding: 6px 16px;
            font-family: cursive;
            position: absolute;
            margin-top: 18px;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        
        .popular .main-box .box .dis {
            display: flex;
            column-gap: 68px;
            margin-top: 10px;
        }
        
        .popular .main-box .box .clr {
            display: flex;
            column-gap: 10px;
        }
        
        .popular .main-box .box .clr .one {
            width: 15px;
            height: 15px;
            display: flex;
            background: rgb(3, 3, 3);
            border-radius: 50%;
        }
        
        .popular .main-box .box .clr .two {
            width: 15px;
            height: 15px;
            display: flex;
            background: rgb(214, 214, 52);
            border-radius: 50%;
        }
        
        .popular .main-box .box .clr .three {
            width: 15px;
            height: 15px;
            display: flex;
            background: rgb(110, 104, 8);
            border-radius: 50%;
        }
        
        .popular .main-box button {
            padding: 10px 20px;
            border: 1px solid black;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .foot-sec {
            height: 300px;
            background-color: whitesmoke;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: auto;
        }
        
        .foot-sec .main-txt-box {
            display: flex;
            column-gap: 20px;
            align-items: center;
            justify-content: center;
        }
        
        .foot-sec .main-txt-box .txt1 {
            /* background: red; */
            width: 300px;
            display: flex;
            flex-direction: column;
            row-gap: 9px;
            padding: 20px;
        }
        
        .foot-sec .main-txt-box .txt1 .social i {
            font-size: 20px;
        }
        
        .foot-sec .main-txt-box .txt2 {
            /* background: blue; */
            width: 220px;
            display: flex;
            flex-direction: column;
            row-gap: 9px;
            padding: 20px;
        }
        
        .foot-sec .main-txt-box .txt2 .item {
            display: flex;
            flex-direction: column;
            row-gap: 10px;
        }
        
        .foot-sec .main-txt-box .txt2 .item a {
            text-decoration: none;
            color: darkgray;
        }
        
        .foot-sec .main-txt-box .txt3 {
            /* background: orange; */
            width: 220px;
            display: flex;
            flex-direction: column;
            row-gap: 9px;
            padding: 20px;
        }
        
        .foot-sec .main-txt-box .txt3 .item {
            display: flex;
            flex-direction: column;
            row-gap: 10px;
        }
        
        .foot-sec .main-txt-box .txt3 .item a {
            text-decoration: none;
            color: darkgray;
        }
        
        .foot-sec .main-txt-box .txt4 {
            /* background: yellowgreen; */
            width: 300px;
            display: flex;
            flex-direction: column;
            row-gap: 9px;
            padding: 20px;
        }
        
        .foot-sec .main-txt-box .txt4 .sub input {
            width: 15vw;
            height: 3vw;
            padding-left: 20px;
        }
        
        .foot-sec .main-txt-box .txt4 p {
            color: darkgray;
        }
        
        .foot-sec .main-txt-box .txt4 .sub i {
            background: white;
            border: 1px solid;
            padding: 12px;
            cursor: pointer;
        }
        
        .copy{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        
        .copy .deve{
            color: blueviolet;
        }
    </style>
</head>

<body class="bg-green-100">
<x-navbar></x-navbar>



 
  <section class="product-box">
    <div class="main-box">
      <div class="box">
        <div class="txt">
                <form action="/test/Science/info_inter/i1" method="POST">
                    @csrf
                    <label for="">Why does the sky appear blue?</label>
                    <select name="shape" class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select why</option>
                            <option value="a1">because of a phenomenon called Rayleigh scattering.
                                 Sunlight is made up of different colors, and when it reaches Earth's atmosphere, the shorter wavelengths 
                                (blue and violet) scatter more than the longer wavelengths (like red and yellow).</option>
                            <option value="a2">ecause Earth is tilted at an angle of about 23.5 degrees on its axis
                                . As the planet orbits the Sun, different parts of Earth receive varying amounts of
                                 sunlight, causing the seasons</option>
                        
                    </select>

                    <button type="submit" class="w-[60%] mx-auto bg-purple-500 text-black rounded-3xl px-4 py-2">submit</button>
                    @if (session('message111'))
                        <div class="alert alert-info">
                            {{ session('message111') }}
                        </div>
                    @endif
                </form>

        </div>
        <img decoding="async" src="{{asset('img/sky.jpg')}}" alt="">
      </div>

      <div class="box2">
        <div class="txt">
        <form action="/test/Science/info_inter/i2" method="POST">
                    @csrf
                    <label for="">What causes seasons on Earth?</label>
                    <select name="shape" class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select answer</option>
                            <option value="a1">because of a phenomenon called Rayleigh scattering. Sunlight is made up of different colors,</option>
                            <option value="a2">because Earth is tilted at an angle of about 23.5 degrees on its axis. As the planet orbits the Sun, different parts of Earth receive varying amounts of sunlight, causing the seasons</option>
                        
                    </select>

                    <button type="submit" class="w-[60%] mx-auto bg-purple-500 black rounded-3xl px-4 py-2">submit</button>
                    @if (session('message222'))
                        <div class="alert alert-info">
                            {{ session('message222') }}
                        </div>
                    @endif
                </form>
        </div>
        <img decoding="async"  src="{{asset('img/earth2.jpg')}}" alt="">
      </div>

      <div class="box3">
        <div class="txt">
        <form action="/test/Science/info_inter/i3" method="POST">
                    @csrf
                    <label for="">How do vaccines work?</label>
                    <select name="shape" class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select answer</option>
                            <option value="a1">help protect against diseases by stimulating the immune system. They contain weakened or inactive parts of a virus or bacteria, which prompt the body to produce antibodies</option>
                            <option value="a2">is the amount of matter in an object and remains constant no matter where you are in the universe.</option>
                        
                    </select>

                    <button type="submit" class="w-[60%] mx-auto bg-purple-500 black rounded-3xl px-4 py-2">submit</button>
                    @if (session('message333'))
                        <div class="alert alert-info">
                            {{ session('message333') }}
                        </div>
                    @endif
                </form>
        </div>
        <img decoding="async"  src="{{asset('img/vaccines.jpg')}}" alt="">
      </div>

      <div class="box">
        <div class="txt">
        <form action="/test/Science/info_inter/i4" method="POST">
                    @csrf
                    <label for="">What is the difference between mass and weight?</label>
                    <select name="shape" class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select answer</option>
                            <option value="a1">help protect against diseases by stimulating the immune system. They contain weakened or inactive parts of a virus or bacteria, which prompt the body to produce antibodies</option>
                            <option value="a2">is the amount of matter in an object and remains constant no matter where you are in the universe.</option>
                        
                    </select>

                    <button type="submit" class="w-[60%] mx-auto bg-purple-500 black rounded-3xl px-4 py-2">submit</button>
                    @if (session('message444'))
                        <div class="alert alert-info">
                            {{ session('message444') }}
                        </div>
                    @endif
                </form>
        </div>
        <img decoding="async"  src="{{asset('img/mass.jpg')}}" alt="">
      </div>
    </div>
  </section>

 
  


  <div class="copy">
    <p>Copyright © 2024 Design By <span class="deve">DeveloperGTM</span></p>
  </div>

  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
