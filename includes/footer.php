  <div id="footer1">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <ul class="collection">
            <?php foreach($footer_links as $value) {?>
            <li class="collection-item"><a href="<?php echo $value['link']?>"><?php echo $value['name']?></a></li>
            <?php }?>
          </ul>

          <ul class="socialIcons">
            <?php foreach($social_icons as $value) {?>
              <li><a class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-<?php echo $value?>"></i></a></li>
            <?php }?>
          </ul>
        </div>

        <div class="col m6 s12 offset-m2">
          <h5 class="white-text section">SIGN UP FOR SPECIAL OFFERS</h5>
          <form action="" method="POST" id="footerForm">
            <div class="input-field">
              <input id="name" type="text" name="name" class="validate white-text">
              <label for="name">Full Name</label>
            </div>            

            <div class="input-field">
              <input id="email" type="text" name="email" class="validate white-text">
              <label for="email">Email</label>
            </div>            

            <button type="submit" class="waves-effect waves-light btn">JOIN</button>
          </form>
        </div>
      </div>
    </div>  
  </div>

  <div class="black white-text section" id="footer2">
    <div class="left">&copy; <?php echo Date('Y'); ?> Adge Dining</div>
    <div class="right">Designed &amp; Developed by Afzal Ashraf</div>
  </div>


    <script src="jquery-2.2.3.min.js"></script>
    <script src="./materialize/js/materialize.min.js"></script>
    <script src="./scripts/index.js"></script>
</body>
</html>