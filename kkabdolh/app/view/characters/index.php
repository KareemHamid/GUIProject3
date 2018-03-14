  <h1><?= ucfirst( $post->character['name']); ?></h1>

  <?php if(isset($_SESSION['email'])) { ?>
    <a class="linkButton" href="#">Edit Page</a>
  <?php } ?>
  <a class="linkButton" href="<?= BASE_URL ?>/characters/<?=  $post->character['name'] ?>/relationships"> Relationships</a>
  

  <!--
   - Information retrieved from http://avatar.wikia.com/wiki/Sokka
   - Image from https://vignette.wikia.nocookie.net/avatar/images/c/cc/Sokka.png/revision/latest?cb=20140905085428
   - Information Column under image
  -->
  <div id="infoCol">
    <div class="portrait">
      <img style="vertical-align: bottom" alt="Character Image" src="<?= BASE_URL ?>/public/img/assets/<?=  $post->character['img'] ?>"/>
    </div>
    <table id="gInfo">
      <caption>General Information&nbsp;</caption>
      <tbody>
        <tr>
          <td>Birth:<br /><?=  $post->character['birth'] ?></td>
          <td>Death:<br /><?=  $post->character['death'] ?></td>
        </tr>
        <tr>
          <td>Age:<br /><?=  $post->character['age'] ?></td>
          <td>Era:<br /><?=  $post->character['era'] ?></td>
        </tr>
        <tr>
          <td>Bender:<br /><?=  $post->character['bender'] ?></td>
          <td>Bending Specialty:<br /><?=  $post->character['bending_specialty'] ?></td>
        </tr>
        <tr>
          <td>Tribe/Group:<br /><?=  $post->character['tribe_group'] ?></td>
        </tr>
      </tbody>
    </table>
    <p>Avatar(s) During Lifespan:</p>
      <ul>
        <li><a href="<?= BASE_URL ?>/characters/aang">Aang</a></li>
      </ul>
    <p><a href="<?= BASE_URL ?>/characters/<?=  $post->character['name'] ?>/relationships">Relationships</a></p>
  </div>

<!-- Info recieved from http://avatar.wikia.com/wiki/Sokka
  General Description and live events for a character
-->
  <div id="gDesc">
    <div>
        <h2>General Description</h2>
        <!-- USE data-event-id to define events when they are put on the page to make them easy to update -->
        <p>
          <?= $post->character['general_description'] ?>
        </p>
        <h3>History</h3>
        <?php foreach($events as $event) { ?>
          <h4 data-char-id="<?= $event->id; ?>"><?= $event->title;?></h4>
          <p><?= $event->body; ?></p>
        <?php } ?>
    </div>
    <form method="POST" action="<?= BASE_URL ?>/characters/<?=  $post->character['name'] ?>/processEdit/">
        <h2>General Description</h2>
        <textarea name="general_description"><?=  $post->character['general_description'] ?></textarea>
        <h3>History</h3>
        <input class='addEvent' type='button' value='Add Event' name='addEvent'/>
        <!-- HTML generated here by js due to the variable events -->
        <input class="button" type="submit" value="Cancel" name = "submit"/>
        <input class="button" type="submit" value="Delete" name = "submit"/>
        <input class="button" type="submit" value="Submit" name = "submit"/>
    </form>
  </div>