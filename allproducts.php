<html>
    <head>
        <title>Website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
         <div class="row m-auto">
             <?php
        $products= [
"Broken Past" => [
         "price" => 50,
          "img" => "https://cdn.booksjuice.com/storage/posters/broken-past-200x300.jpeg",
          "desc" => "When Maria gets a package, she has to team up with the handsome billionaire, Daniel Humphrey to unravel the twenty year old murders. As chemistry heightens between them,their quest for the truth is not only roughened by threats on Maria's life but with lies and buried secrets..."
        ],
" عقل مذنب" => [
          "price" => 40,
          "img" => "https://cdn.booksjuice.com/storage/posters/aakl-mthnb--200x300.webp",
          "desc" => "حسين الصاوي مهندس مرموق، أرمل، يحيا حياته بانطلاق بعد وفاة زوجته، تنقلب حياته رأسا على عقب حينما يفاجأ بخبر وفاة إحدى الممثلات في حادث سيارة حيث يشير الخبر إلى وفاتها منذ ثلاثة أيام على الرغم من أنها كانت بصحبته في اليوم السابق لنشر الخبر، مما يدفعه لبداية الشك في مرضه النفسي وسبر أغوار نفسه بمساعدة صديقه خالد الطبيب النفسي والذي يتطرق معه إلى أحداث هامة مضت في حياته وكان لتلك الأحداث الأثر الكبير في تكوين شخصيته وعقدته النفسية ويزداد الأمر تعقيدا حينما يبدأ الشك يتسلل إليه في كونه قاتل زوجته بسبب عقدته النفسية تلك .. ليدخل في دوامة لا تنتهي من الشك والأسئلة وسيول جارفة من الأفكار تغمره حتى يتغير مجرى حياته تماما."
        ],
" جريمة في المقهى" => [
          "price" => 80,
          "img" => "https://cdn.booksjuice.com/storage/posters/grym-fy-almkh--200x300.webp",
          "desc" => "اسمي (م.ع.أ.ع) عربي الهوى و الهوية ، كنت شاهد عيان على جريمة قتل مكتملة الأركان و شديدة الغموض في آن واحد ، و هو الشيء الذي يحدث لأول مرة بحياتي، أخبرت بها فيصل فحولها إلى الرواية الماثلة أمامكم! لا يخفى عليكم أن ردودي كانت عبارة عن سرد بالعامية، و أنني فوضت الكاتب - و بحكم التخصص- لنقلها بإسلوبه الفصيح شريطة ألا يخل بالمعنى و روح و تفاصيل و وقائع القصة و الحادثة، و هو الأمر الذي التزمه الكاتب بحذافيره من أول نقطة و حتى آخر نقطة ، و اليوم و قد اطلعت على الجنين  فإنني أشهدكم جميعا أنني أعطيت الأخ فيصل الضوء الأخضر لنشرها !
م.ع.أ.ع."
        ],
"Science in the Soul" => [
          "price" => 90,
          "img" => "https://cdn.booksjuice.com/storage/posters/science-in-the-soul--200x300.webp",
          "desc" => "THE NEW YORK TIMES BESTSELLER. A sparkling new anthology of essays, lectures and letters by the brilliant evolutionary biologist, author of The Selfish Gene and The God Delusion"
        ],
        
    ];
        Foreach($products as $product => $values)
{
	    echo '<div class="col-3">';
    echo '<div class="card" style="width: 18rem;">';
        echo " <img class='card-img-top' src='".$values["img"]."'>";
  echo "<div class='card-body'>";
             echo " <h3 class='card-title'>".$product."</h3>";
            echo " <h5 class='card-title text-primary'>".$values['price'] ." EGP</h5>";
            echo " <p class='card-title'>".$values['desc'] ."</p>";
            
      echo"</div>";
  echo "</div>";
    echo "</div>";
}
        ?>
         </div>
        <button class="btn btn-danger position-fixed" style="bottom:0"><a class="text-white"href="logout.php">LogOut</a></button> 

         </body>

         </html>