<main>   
    
     <?php foreach ($news as $n) {  ?>
           
      <section>
      <div class="box-img" onclick="see(<?=$n['id']?>)">
                  <img src="publlic/images/<?=$n['hinh']?>" alt="">
      </div>

      <div class="box-text">
            <span><?=$n['tieu_de']?></span>
      </div>

      <div class="box-like">
      <input type="hidden" name="" value="<?=$n['id']?>">
            <div class="like"></div>
      </div>
      </section>
      <?php } ?>
    
      </main>
<div class="more">

</div>
