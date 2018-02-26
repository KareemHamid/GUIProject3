  <a class="linkButton" href="<?= BASE_URL ?>/character/view/sokka/relationships/add">Add Relationship</a>
  <a class="linkButton" href="<?= BASE_URL ?>/character/view/sokka">Character Page</a>

  <!-- Individual -->
  <h2 class="centerH">Sokka's Relationships</h2>
  <div class="portrait">
    <img class="centerH" id="relCharacterImg" src="<?= BASE_URL ?>/public/img/assets/Sokka.png" alt="Sokka's Image"/>
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
    <h3>Parents</h3>
    <table>
      <tbody>
        <tr class="miniBio">
          <td>
            <div class="portrait">
              <!-- src = https://vignette.wikia.nocookie.net/avatar/images/b/b5/Kya_%28nonbender%29.png/revision/latest?cb=20170523213135 -->
              <img alt="Parent Image" src="<?= BASE_URL ?>/public/img/assets/kya.png"/>
            </div>
            <div>
              <h4>
                Name: Kya
              </h4>
              <h4>
                Relationship: Mother
              </h4>
              <h4>
                Description:
              </h4>
              <!-- src = http://avatar.wikia.com/wiki/Kya_(nonbender) -->
              <p>
                Kya was the mother of Sokka and Katara and the wife of Hakoda, the chief of their village at the Southern Water Tribe. She was killed during a raid on her home, and her death had a profound impact upon both her children. Katara wore her mother's necklace as a memento of her... <a href="#">Click to view page</a>
              </p>
            </div>
          </td>
        </tr>
        <tr class="miniBio">
          <td>
            <div class="portrait">
              <!-- src = https://vignette.wikia.nocookie.net/avatar/images/4/4e/Hakoda_smiling.png/revision/latest?cb=20140510202641 -->
              <img alt="Parent Image" src="<?= BASE_URL ?>/public/img/assets/hokada.png"/>
            </div>
            <div>
              <h4>
                Name: Hokada
              </h4>
              <h4>
                Relationship: Father
              </h4>
              <h4>
                Description:
              </h4>
              <!-- Src = http://avatar.wikia.com/wiki/Hakoda -->
              <p>
                Hakoda was the father of Sokka and Katara, the husband of the late Kya, the son of Kanna, and the chieftain of a minor tribe at the South Pole that was part of the Southern Water Tribe's tribal confederation. Even though Hakoda was not the formal chief of the Southern Water Tribe... <a href="#">Click to view page</a>
              </p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Siblings content-->
  <div class="tabcontent siblings">
    <h3>Siblings</h3>
    <table>
      <tbody>
        <tr class="miniBio">
          <td>
            <div class="portrait">
              <!-- src = http://avatar.wikia.com/wiki/katara -->
              <img alt="Sibling" src="<?= BASE_URL ?>/public/img/assets/katara.png"/>
            </div>
            <div>
              <h4>
                Name: Katara
              </h4>
              <h4>
                Relationship: Sister
              </h4>
              <h4>
                Description:
              </h4>
              <!-- src = http://avatar.wikia.com/wiki/Katara -->
              <p>
                Katara is a waterbending master, born in the Southern Water Tribe to Chief Hakoda and his wife, Kya. During her childhood, she was the only waterbender living in the South Pole. At first she lived a peaceful life with her family, until she lost her mother in a Fire Nation raid... <a href="#">Click to view page</a>
              </p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Significant others content-->
  <div class="tabcontent significant">
    <h3>Significant Others</h3>
    <table>
      <tbody>
        <tr class="miniBio">
          <td>
            <div class="portrait">
              <!-- src = http://avatar.wikia.com/wiki/suki -->
              <img alt="Significant Other Image" src="<?= BASE_URL ?>/public/img/assets/suki.png"/>
            </div>
            <div>
              <h4>
                Name: Suki
              </h4>
              <h4>
                Relationship: Girlfriend
              </h4>
              <h4>
                Description:
              </h4>
              <!-- src = http://avatar.wikia.com/wiki/suki -->
              <p>
                Suki was the eldest member and leader of the all-female Kyoshi Warriors of the Earth Kingdom's Kyoshi Island. Having begun her training when she was only eight years old, Suki was well-respected by her fellow warriors for her leadership and combat skills. When... <a href="#">Click to view page</a>
              </p>
            </div>
          </td>
        </tr>
        <tr class="miniBio">
          <td>
            <div class="portrait">
              <!-- src = http://avatar.wikia.com/wiki/yue -->
              <img alt="Significant Other Image" src="<?= BASE_URL ?>/public/img/assets/yue.png"/>
            </div>
            <div>
              <h4>
                Name: Yue
              </h4>
              <h4>
                Relationship: Girlfriend
              </h4>
              <h4>
                Description:
              </h4>
              <!-- src = http://avatar.wikia.com/wiki/yue -->
              <p>
                Yue was the sixteen-year-old daughter of Chief Arnook and princess of the Northern Water Tribe. After the death of Tui, the Moon Spirit, during the Siege of the North, she sacrificed her life to replace it, and became the new Moon Spirit<?= BASE_URL ?>/public/img<?= BASE_URL ?>/public/img <a href="#">Click to view page</a>
              </p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Children content (none for this example)-->
  <div class="tabcontent children">
    <h3>Children (None)</h3>
  </div>

  <!-- Other relatives Content-->
  <div class="tabcontent other">
    <h3>Other Family</h3>
    <table>
      <tbody>
        <tr class="miniBio">
          <td>
            <div class="portrait">
              <!-- src = http://avatar.wikia.com/wiki/kanna -->
              <img alt="Other Family Image" src="<?= BASE_URL ?>/public/img/assets/kanna.png"/>
            </div>
            <div>
              <h4>
                Name: Kanna
              </h4>
              <h4>
                Relationship: Grandmother
              </h4>
              <h4>
                Description:
              </h4>
              <!-- src = http://avatar.wikia.com/wiki/kanna -->
              <p>
                Kanna, referred to by her grandchildren as "Gran Gran", was Katara and Sokka's caring paternal grandmother. She was a nonbender and the oldest resident of the Southern Water Tribe. Although Kanna initially distrusted Aang, once he was revealed to be the Avatar... <a href="#">Click to view page</a>
              </p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>