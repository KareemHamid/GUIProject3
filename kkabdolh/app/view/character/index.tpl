  <h1><?= ucfirst($post->character['name']); ?></h1>

  <a class="linkButton" href="#">Edit Page</a>
  <a class="linkButton" href="<?= BASE_URL ?>/character/<?= post['name'] ?>/relationships"> Relationships</a>


  <!--
   - Information retrieved from http://avatar.wikia.com/wiki/Sokka
   - Image from https://vignette.wikia.nocookie.net/avatar/images/c/cc/Sokka.png/revision/latest?cb=20140905085428
   - Information Column under image
  -->
  <div id="infoCol">
    <div class="portrait">
      <img style="vertical-align: bottom" alt="Character Image" src="<?= BASE_URL ?>/public/img/assets/<?= $post->character['img'] ?>"/>
    </div>
    <table id="gInfo">
      <caption>General Information&nbsp;</caption>
      <tbody>
        <tr>
          <td>Birth:<br /><?= $post->character['birth'] ?></td>
          <td>Death:<br /><?= $post->character['death'] ?></td>
        </tr>
        <tr>
          <td>Age:<br /><?= $post->character['age'] ?></td>
          <td>Era:<br /><?= $post->character['era'] ?></td>
        </tr>
        <tr>
          <td>Bender:<br /><?= $post->character['bender'] ?></td>
          <td>Bending Specialty:<br /><?= $post->character['bending_specialty'] ?></td>
        </tr>
        <tr>
          <td>Tribe/Group:<br /><?= $post->character['tribe_group'] ?></td>
          <td>Occupation/Roles:<br />
            <ul>
              <li>
                Warrior
              </li>
              <li>
                Tactician
              </li>
              <li>
                Swordsman
              </li>
              <li>
                Councilman
              </li>
              <li>
                Chief of Southern Water Tribe
              </li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>
    <p>Avatar(s) During Lifespan:</p>
      <ul>
        <li><a href="#">Aang</a></li>
      </ul>
    <p><a href="<?= BASE_URL ?>/character/<?= $post->character['name'] ?>/relationships">Relationships</a></p>
  </div>

<!-- Info recieved from http://avatar.wikia.com/wiki/Sokka
  General Description and live events for a character
-->
  <div id="gDesc">
    <div>
        <h2>General Description</h2>
        <p>
          <?= $post->character['general_description'] ?>
        </p>
        <h3>History</h3>
        <h4>Early Life - 84 AG</h4>
        <p>
          Sokka was born at the South Pole to Chief Hakoda and Kya in 84 AG. Growing up as part of a minor tribe that lived in the remains of the Southern Water Tribe's ruined capital, Sokka was raised from a young age to be a warrior and possessed much knowledge of Water Tribe weapons and tactics. When he was ten, Sokka witnessed one of the last major Fire Nation raids on his tribe, during which his mother was targeted and killed, leaving him with great hatred for the Fire Nation.
        </p>
        <br />
        <h4>Helping to Train Team Beifong - 101 AG</h4>
        <p>
          During the year immediately subsequent to the Hundred Year War, Sokka joined Katara and Aang in the "Harmony Restoration Movement" to disassemble the Fire Nation colonies in service of Earth King Kuei.
        </p>
    </div>
    <form>
        <h2>General Description</h2>
        <textarea></textarea>
        <h3>History</h3>
        <input type='button' value='Add Event' name='addEvent'/>
        <!-- HTML generated here by js due to the variable events -->
        <input class="button" type="submit" value="Cancel" name = "cancel"/>
        <input class="button" type="submit" value="Submit" name = "submit"/>
    </form>
  </div>