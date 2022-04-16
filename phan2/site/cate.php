<input type="checkbox" name="cate" id="cate1" value="1">
<label for="cate1">themcate1</label>  </br>
<input type="checkbox" name="cate" id="cate2" value="2s">
<label for="cate2">themcate2</label>
<main>   
    
<?php foreach ($newsCate as $n) {  ?>
      
 <section>
 <div class="box-img" onclick="see(<?=$n['id']?>)">
             <img src="publlic/images/<?=$n['hinh']?>" alt="">
 </div>

 <div class="box-text">
       <span><?=$n['tieu_de']?></span>
 </div>

 <div class="box-like">
       <div class="like"></div>
 </div>
 </section>
 <?php } ?>

   </main>

   <div class="more">

</div>