/**
  Main scripting file for the website
*/
$(document).ready(function() {
  
  // Select between tabs using, classes
  $('.tablinks').click (function() {
    var boxChosen = $(this).attr('class').split(' ')[1];
    $('.tablinks').removeClass('active');
    $(this).addClass('active'); // Set current button to active
    // Fade out old content in favor of newly selected content
    $('.tabcontent').fadeOut('fast').promise().done( function () {
      $('div.' + boxChosen).fadeIn('fast');
    });
  });

  // On login check to make sure both fields have content, then redirect to a new page
  /*
  $('form').on('submit', function() {
    error = '';
    $(this).find('input').each(function() {
      if($(this).val() === "") {
        error += this.name + " field is empty!\n";
      }
    });

    if (error != '') {
      alert(error);
    }
  }); */

  $('.addEvent').click(function () {
    $(this).hide();
    $(this).before("<h4>New Event</h4>")
    $(this).before("<label>Title: </label>")
    $(this).before("<input type='hidden' name='eventIDs[]' value='-1' />");
    $(this).before("<input type='text' name='eventTitles[]' data-char-id='-1'/>");
    $(this).before("<label>Details: </label>")
    $(this).before("<textarea name='eventBodies[]'></textarea>");
  });

  // When Edit Page is clicked, replace gDesc and events with editable text fields
  $('.linkButton').click(function () {
    console.log(location.href);
    if (this.text == "Edit Page") {
      $(this).hide();
      var currDesc = $('#gDesc');
      currDesc.children('div').hide()
      currDesc.children('form').show()
      var form = currDesc.children('form')
      var content = currDesc.find('p');
      var titles = currDesc.find('h4');
      var cancel = form.children('input[value="Cancel"]')
      // Loop through events and create Title, Lables, fields, and button
      for (var i = 1; i < content.length; i++) {
        $event_id = $(titles[i - 1]).attr('data-char-id');
        cancel.before("<h4>Event " + i + "</h4>")
        cancel.before("<label>Title: </label>")
        cancel.before("<input type='hidden' name='eventIDs[]' value='" + 
          $event_id + "' />");
        cancel.before("<input type='text' name='eventTitles[]' data-char-id='" + 
          $event_id + "' value='" + $(titles[i - 1]).text().trim() + "'/>");
        cancel.before("<label>Details: </label>")
        cancel.before("<textarea name='eventBodies[]'>" + $(content[i]).text().trim() + "</textarea>");
      }
    }
  });

  $('input[value="Delete"]').click(function () {
    if (confirm('Are you sure you want to delete this character?')) {
      return true;
    } else {
      return false;
    }
  });
});
