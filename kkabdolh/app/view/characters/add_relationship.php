
  <!-- Buttons to related pages -->
  <a class="linkButton" href="<?= BASE_URL ?>/characters/<?= $name ?>">Character Page</a>
  <a class="linkButton" href="<?= BASE_URL ?>/characters/<?= $name ?>/relationships"> Relationshps</a>

  <!-- Individual -->
  <h2 class="centerH">Sokka Add Relationship</h2>
  <div class="portrait">
    <img class="centerH" id="relCharacterImg" src="<?= BASE_URL ?>/public/img/assets/<?= $name ?>.png" alt="Sokka's Image"/>
  </div>
  <br />

  <!-- Tabbed Content, src -> https://www.w3schools.com/howto/howto_js_tabs.asp-->
  <div class="centerH tab">
    <button class="tablinks newChar active">New Character</button>
    <button class="tablinks alreadyExist">Already Existing</button>
  </div>


  <!-- Add new character -->
  <div class="tabcontent newChar" style="display: block">
    <!-- Form for adding new family member -->
    <form method="POST" action="<?= BASE_URL ?>/characters/<?= $name ?>/relationships/processAdd/">
      <h3>Basic Information</h3>
      <label>Relationship:</label>
      <select name="relationship">
        <option value="parent">Parent</option>
        <option value="sibling">Sibling</option>
        <option value="significant">Significant Other</option>
        <option value="child">Child</option>
        <option value="other">Other</option>
      </select>
      <label>Name:</label>
      <input type="text" name="new_name"/>
      <label>Image: </label>
      <input type="text" name="img"/>
      <label>General Description:</label>
      <textarea name="general_description"></textarea>
      <h3>Detailed Information</h3>
      <label>Birth:</label>
      <input type="text" name="birth"/>
      <label>Death:</label>
      <input type="text" name="death"/>
      <label>Age:</label>
      <input type="text" name="age"/>
      <label>Era:</label>
      <input type="text" name="era"/>
      <label>Bender:</label>
      <input type="text" name="bender"/>
      <label>Bending Specialty:</label>
      <input type="text" name="bending_specialty"/>
      <label>Tribe/Group:</label>
      <input type="text" name="tribe_group"/>
      <input class="centerH button" type="submit" value="Submit" />
    </form>
  </div>

  <!-- Already Existing member -->
  <div class="tabcontent alreadyExist">
    <form class="centerH">
      <select name="relationship">
        <option value="parent">Parent</option>
        <option value="sibling">Sibling</option>
        <option value="significant">Significant Other</option>
        <option value="other">Other</option>
      </select>
      <input type="text" placeholder="Search">
      <input class="button" type="submit" value="Submit" />
    </form>
  </div>

