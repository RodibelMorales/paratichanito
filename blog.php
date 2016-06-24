<?php
  $rss = simplexml_load_file('http://blog.chanitoledo.com/feed/');
?>
     <div class=" row columnaBlog">
        <?php
          $entrada = 0;
          $alternarClase=0;
          foreach ($rss->channel->item as $item) {
            if($entrada<6){
            $thumbAttr = $item->children('media', true)->thumbnail->attributes(); 

             
              $alternarClase++;

              if ($alternarClase % 2) {
                $alternarClase ="fadeInLeft";
              }else{
                $alternarClase ="fadeInRight";
              }

        ?>

            <div class=" efectoBlog col-md-6 portfolio-item wow animated fadeInUp" data-wow-offset="1" data-wow-delay="1s">
              <section>
                  <img class="img-responsiveblog" src="<?php echo $thumbAttr['url']; ?>" alt="Jose Luis Toledo Medina, Chanito Toledo">
                  <article class="articulo">
                    <h3 class="titleBlog"><?php echo $item->title;?></h3>
                    <p class="textblog"><?php echo substr(strip_tags($item->description),0,220);?>........</p>
                    <a class="vermas" href="<?php echo $item->link;?>" target="_blank"><i class="fa fa-eye espacioIcono"></i>Leer más</a>
                  </article>  
              </section>
            </div>
        <?php
            $entrada++;
            }else{
              break;
            }
         }
        ?>
    </div>


