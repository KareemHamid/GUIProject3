
  <!-- Buttons to related pages -->
  <a class="linkButton" href="<?= BASE_URL ?>/character/view/sokka">Character Page</a>
  <a class="linkButton" href="<?= BASE_URL ?>/character/view/sokka/relationships"> Relationshps</a>

  <!-- Individual -->
  <h2 class="centerH">Sokka Add Relationship</h2>
  <div class="portrait">
    <img class="centerH" id="relCharacterImg" src="<?= BASE_URL ?>/public/img/assets/Sokka.png" alt="Sokka's Image"/>
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
    <form>
      <h3>Basic Information</h3>
      <label>Relationship:</label>
      <select name="relationship">
        <option value="parent">Parent</option>
        <option value="sibling">Sibling</option>
        <option value="significant">Significant Other</option>
        <option value="other">Other</option>
      </select>
      <label>First Name:</label>
      <input type="text" />
      <label>Last Name:</label>
      <input type="text" />
      <label>General Description:</label>
      <textarea></textarea>
      <label>Image: </label>
      <input type="text" />
      <input class="button" type="button" value="Upload">
      <h3>Detailed Information</h3>
      <label>Birth:</label>
      <input type="text" />
      <label>Death:</label>
      <input type="text" />
      <label>Age:</label>
      <input type="text" />
      <label>Era:</label>
      <input type="text" />
      <label>Bender:</label>
      <input type="text" />
      <label>Bending Specialty:</label>
      <input type="text" />
      <label>Tribe/Group:</label>
      <input type="text" />
      <label>Occupation/Role:</label>
      <input type="text" />
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

