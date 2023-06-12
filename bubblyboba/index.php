<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Bubbly Boba</title>

    <!--icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--css-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<header class="header">

    <section class="flex">

    <!--logo-->
        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>
    <!--navigation bar-->
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#variant">variant</a>
            <a href="#review">review</a>
            <a href="#blogs">gallery</a>
            <a href="logout.php">logout</a>
        </nav>
    
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

    </section>

</header>

<div class="home-container">

    <section class="home" id="home">

        <div class="content">
        <h1>Get your boba here</h1><article>
            <p> Boba is more than just a drink; it's a symbol of a lifestyle, a culture, and a community. 
                It represents the simple pleasures of life that bring joy to our daily routine. 
                From the moment we take that first sip of the sweet and creamy milk tea, and feel the chewy 
                tapioca pearls slide up the straw and into our mouths, we are transported to a place of comfort 
                and happiness. </p></article>
                <a href="#variant" class="btn">view more</a>
        </div>
    
    </section>

</div>

    <!--untuk bagian about-->
<section class="about" id="about">

    <h1 class="heading"> <span>Asal Usul</span> Boba </h1>

    <div class="row">

        <div class="image">
            <img src="images/boba2.jpg">
        </div>

        <div class="content">
            <h3>Sejarah Boba</h3>            
            <p><br><strong>pada tahun 1980-an :</strong>
                <br>minuman boba berasal dari kreativitas karyawan di kedai teh Chun Shui Tang yaitu 
                Lin Hsui Hui yang mencoba bereksperimen dengan mencampur bola tapioka dari sebuah 
                makanan penutup yang populer di Taiwan yaitu Fen Yuan ke dalam segelas es teh susu.
                Karena rasa yang enak dan unik, seiring berjalannya waktu, minuman ini semakin terkenal 
                dan semakin populer di berbagai negara. Di tahun 1990-an minuman ini mulai menyebar 
                ke Asia Timur dan di tahun yang sama, gerai boba tea pertama buka di Los Angeles.
            <p></p>
        </div>

    </div>

</section>


    <!--untuk bagian variant-->
<section class="menu" id="variant">

    <h1 class="heading"> variant <span>boba</span> </h1>

    <div class="box-container">

    <div class="box">
            <img src="images/boba4.png" alt="">
            <h3>Brown Sugar Boba</h3>
            <div class="price">Rp20.000</div>
            <div class="desc">Campuran susu segar dengan brown sugar dan boba</div>
            <a href="https://api.whatsapp.com/send?phone=6282193058651&text=Hellow! Saya ingin memesan Brown Sugar Boba." target="_blank" rel="noopenernoreffer" class="btn">get now</a>
        </div>

        <div class="box">
            <img src="images/boba5.png" alt="">
            <h3>Green Tea Boba</h3>
            <div class="price">Rp20.000</div>
            <div class="desc">Susu segar dengan campuran seduhan daun green tea dan topping boba</div>
            <a href="https://api.whatsapp.com/send?phone=6282193058651&text=Hellow! Saya ingin memesan Green Tea Boba." target="_blank" rel="noopenernoreffer" class="btn">get now</a>
        </div>

        <div class="box">
            <img src="images/boba6.png" alt="">
            <h3>Coffee Milk Boba</h3>
            <div class="price">Rp20.000</div>
            <div class="desc">Susu yang dicampur dengan kopi pilihan dan disuguhkan dengan topping boba</div>
            <a href="https://api.whatsapp.com/send?phone=6282193058651&text=Hellow! Saya ingin memesan Coffee Milk Boba." target="_blank" rel="noopenernoreffer" class="btn">get now</a>
        </div>

        <div class="box">
            <img src="images/boba7.PNG" alt="">
            <h3>Taro Boba Slush</h3>
            <div class="price">Rp20.000</div>
            <div class="desc">Bubuk taro dicampur dengan susu segar dan tambahan boba rasa taro</div>
            <a href="https://api.whatsapp.com/send?phone=6282193058651&text=Hellow! Saya ingin memesan Taro Boba Slush." target="_blank" rel="noopenernoreffer" class="btn">get now</a>
        </div>

        <div class="box">
            <img src="images/boba8.png" alt="">
            <h3>Strawberry Boba Slush</h3>
            <div class="price">Rp25.000</div>
            <div class="desc">Potongan buah strawberry yang di blend dengan susu dan ditambah boba strawberry </div>
            <a href="https://api.whatsapp.com/send?phone=6282193058651&text=Hellow! Saya ingin memesan Strawberry Boba Slush." target="_blank" rel="noopenernoreffer" class="btn">get now</a>
        </div>

        <div class="box">
            <img src="images/boba9.png" alt="">
            <h3>Butterfly Pea Flower Boba</h3>
            <div class="price">Rp28.000</div>
            <div class="desc">Susu segar yang dicampur dengan seduhan butterfly pea flowers dan ditambah boba </div>
            <a href="https://api.whatsapp.com/send?phone=6282193058651&text=Hellow! Saya ingin memesan Butterfly Pea Flower Boba." target="_blank" rel="noopenernoreffer" class="btn">get now</a>
        </div>
        
        <a href="unggah.php" class="btn2">Upload Your Photo with Your Boba here</a>

    </div>

</section>


    <!--untuk bagian review-->
<section class="review" id="review">

    <h1 class="heading"><span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Butterfly Pea Flower Boba memiliki rasa yang sangat autentik. Tidak terlalu manis dan sangat pas, juga Boba yang
                digunakan pada setiap produknya memiliki sensasi tersendiri ketika digigit yang membuat produk dari Bubbly Boba sangat digemari
                oleh berbagai kalangan.
            </p>
            <img src="images/pic-1.jpg" class="user" alt="">
            <h3>Heavenly J.C Mewengkang</h3>
            <p>210211060187</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Coffee milk boba memiliki kombinasi yang sempurna antara susu yang manis dan tambahan kopi yang pahit, dan juga topping boba yang 
                kenyal, membuat rasa yang ada menjadi lebih enak, tidak terlalu manis ataupun pahit. Cocok diminum
                juga untuk orang dewasa yang jarang menyukai minuman yang manis
            </p>
            <img src="images/pic-2.jpg" class="user" alt="">
            <h3>Gladys T. Sumenge</h3>
            <p>210211060202</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

    </div>

</section>


    <!--untuk bagian blogs-->
<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>gallery</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog-1.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Brown Sugar Boba</a>
                <span>by admin / 2nd may, 2023</span>
                <p>Serving our signature "Brown Sugar Boba".</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Coffee Milk Boba</a>
                <span>by admin / 2nd may, 2023</span>
                <p>Making our strong flavored "Coffee Milk Boba".</p>
            </div>
        </div>

    </div>

</section>



<section class="footer">

    <div class="share">
        <a href="https://youtube.com/playlist?list=PLqdrQ592LtTSf4FQOele7KfvACpX9oUvx" target="_blank" rel="noopenernoreffer"
        class="fa fa-youtube-play"></a>
        <a href="https://api.whatsapp.com/send?phone=6282193058651&text=Hellow!" target="_blank" rel="noopenernoreffer"
        class="fab fa-whatsapp"></a>
        <a href="https://instagram.com/bubbly___boba?igshid=MzNlNGNkZWQ4Mg==" target="_blank" rel="noopenernoreffer"
        class="fab fa-instagram"></a>
    </div>

        <!--footer untuk menu dibagian bawah-->
    <div class="links">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#variant">variant</a>
        <a href="#review">review</a>
        <a href="#blogs">gallery</a>
    </div>

    <div class="credit">
      &copy; <?php echo date("Y"); ?> - Kelompok 9. All Rights Reserved.
    </div>

</section>


    <!--javascript-->
<script src="js/script.js"></script>

</body>
</html>