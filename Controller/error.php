  
  <?php if(count($error)>0): ?>
       
       <div class="error">
        <?php  foreach($error as $mistake):?>
         <p> <?php echo $mistake ?> </p>
        <?php endforeach ?>       
       </div>
     
     
  <?php endif ?>