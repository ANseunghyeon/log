var elite_creative_agency_keyboard_navigation_loop = function (elem) {
  var elite_creative_agency_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var elite_creative_agency_firstTabbable = elite_creative_agency_tabbable.first();
  var elite_creative_agency_lastTabbable = elite_creative_agency_tabbable.last();
  elite_creative_agency_firstTabbable.focus();

  elite_creative_agency_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      elite_creative_agency_firstTabbable.focus();
    }
  });

  elite_creative_agency_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      elite_creative_agency_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};