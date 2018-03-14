<?php if(isset($_SESSION['email'])) { ?>
  <a class="linkButton" href="<?= BASE_URL ?>/characters/<?= $name ?>/relationships/add">Add Relationship</a>
<?php } ?>
  <a class="linkButton" href="<?= BASE_URL ?>/characters/<?= $name ?>">Character Page</a>

  <!-- Individual -->
  <h2 class="centerH"><?= ucfirst($name) ?>'s Relationships</h2>
  <div class="portrait">
    <img class="centerH" id="relCharacterImg" src="<?= BASE_URL ?>/public/img/assets/<?= $name ?>.png" alt="<?= ucfirst($name) ?>'s Image"/>
  </div>
  <br />
  <!-- Tabbed Content, src -> https://www.w3schools.com/howto/howto_js_tabs.asp-->
  <div class="centerH tab">
    <button class="tablinks parents active" >Parents</button>
    <button class="tablinks siblings">Siblings</button>
    <button class="tablinks significant" >Significant Others</button>
    <button class="tablinks children" >Children</button>
    <button class="tablinks other" >Other Family</button>
  </div>


  <!-- Parents content-->
  <div class="tabcontent parents" style="display: block">
    <?php $charList = $list['parent'] ?>
    <h3>Parents</h3>
       <?php include SYSTEM_PATH.'/view/components/char_list.php'; ?>
  </div>

  <!-- Siblings content-->
  <div class="tabcontent siblings">
  <?php $charList = $list['sibling'] ?>
    <h3>Siblings</h3>
      <?php include SYSTEM_PATH.'/view/components/char_list.php'; ?>
  </div>

  <!-- Significant others content-->
  <div class="tabcontent significant">
  <?php $charList = $list['significant'] ?>
    <h3>Significant Others</h3>
      <?php include SYSTEM_PATH.'/view/components/char_list.php'; ?>
  </div>

  <!-- Children content (none for this example)-->
  <div class="tabcontent children">
  <?php $charList = $list['child'] ?>
    <h3>Children</h3>
      <?php include SYSTEM_PATH.'/view/components/char_list.php'; ?>
  </div>

  <!-- Other relatives Content-->
  <div class="tabcontent other">
  <?php $charList = $list['other'] ?>
    <h3>Other Family</h3>
      <?php include SYSTEM_PATH.'/view/components/char_list.php'; ?>
  </div>