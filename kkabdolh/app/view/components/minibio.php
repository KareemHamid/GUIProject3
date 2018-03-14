<tr class="miniBio">
  <td>
    <div class="portrait">
      <img alt="Parent Image" src="<?= BASE_URL ?>/public/img/assets/<?= $char->character['img'];?>"/>
    </div>
    <div>
      <h4>
        Name: <?= ucfirst($char->character['name']);?>
      </h4>
      <h4>
        Description: 
      </h4>
      <!-- src = http://avatar.wikia.com/wiki/Kya_(nonbender) -->
      <p>
        <?php $s = substr($char->character['general_description'], 0, 400); $s = preg_replace('/ [^ ]*$/', '...', $s);?> 
        <?= $s; ?>
        <a href="<?= BASE_URL ?>/characters/<?= $char->character['name'] ?>">Click to view page</a>
      </p>
    </div>
  </td>
</tr>