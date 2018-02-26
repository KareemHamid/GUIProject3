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
  $('#login').on('submit', function(e) {
    var submit = true;
    // Are both boxes filled?
    $(this).find('input').each(function() {
      if($(this).val() === "") {
        alert(this.name + " field is empty!");
        submit = false;
      }
    });
  });

  // Checks if login boxes are properly filled
  $('#login').on('submit', function(e) {
    var submit = true;
    // Are both boxes filled?
    $(this).find('input').each(function() {
      if($(this).val() === "") {
        alert(this.name + " field is empty!");
        submit = false
      }
    });
  });

  // When Edit Page is clicked, replace gDesc and events with editable text fields
  $('.linkButton').click(function () {
    if (this.text == "Edit Page") {
      var currDesc = $('#gDesc');
      currDesc.children('div').hide()
      currDesc.children('form').show()
      var form = currDesc.children('form')
      var content = currDesc.find('p');
      var titles = currDesc.find('h4');
      var generalDescription = $(content[0]).text().trim()
      form.children('textarea').text(generalDescription)
      var cancel = form.children('input[name="cancel"]')
      // Loop through events and create Title, Lables, fields, and button
      for (var i = 1; i < content.length; i++) {
        cancel.before("<h4>Event " + i + "</h4>")
        cancel.before("<label>Title: </label>")
        cancel.before("<input type='text' value='" + $(titles[i - 1]).text().trim() + "'/>");
        cancel.before("<label>Details: </label>")
        cancel.before("<textarea>" + $(content[i]).text().trim() + "</textarea>");
        cancel.before("<input type='button' value='Add Event' name='addEvent'/>")
      }
    }
  });
});
