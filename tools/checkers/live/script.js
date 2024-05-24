$(document).ready(function() {
    $('#start').attr('disabled', false);
    $('#stop').attr('disabled', true);
    var interval;
  
    function validateCard(cardData) {
      // Simulated API response logic
      const randomError = Math.floor(Math.random() * 4) + 1;
      let msg = `<p>${cardData} - `;
      if (randomError === 1) {
        msg += 'Live</p>';
        return { error: 1, msg: msg };
      } else if (randomError === 2) {
        msg += 'Die</p>';
        return { error: 2, msg: msg };
      } else if (randomError === 3) {
        msg += 'Unknown</p>';
        return { error: 3, msg: msg };
      } else {
        msg += 'Invalid</p>';
        return { error: 4, msg: msg };
      }
    }
  
    $('#form').submit(function(event) {
      event.preventDefault();
  
      // Clear previous results
      $('.success').empty();
      $('.danger').empty();
      $('.warning').empty();
      $('.live').text(0);
      $('.die').text(0);
      $('.unknown').text(0);
  
      var ccData = $('#cc').val().split('\n');
  
      if (ccData.length > 0 && ccData[0] !== "") {
        var liveCount = 0, dieCount = 0, unknownCount = 0;
        var totalCards = ccData.length;
        var currentIndex = 0;
  
        interval = setInterval(function() {
          if (currentIndex >= totalCards) {
            clearInterval(interval);
            $('#cc').val('');
            $('#start').attr('disabled', false);
            $('#stop').attr('disabled', true);
          } else {
            var cardData = ccData[currentIndex];
            var response = validateCard(cardData);
  
            var message = response.msg;
  
            if (response.error == 1) {
              $('.success').append(message);
              liveCount++;
              $('.live').text(liveCount);
            } else if (response.error == 2) {
              $('.danger').append(message);
              dieCount++;
              $('.die').text(dieCount);
            } else if (response.error == 3) {
              $('.warning').append(message);
              unknownCount++;
              $('.unknown').text(unknownCount);
            } else if (response.error == 4) {
              $('.info').append(message);
            }
  
            currentIndex++;
            $('#start').attr('disabled', true);
            $('#stop').attr('disabled', false);
          }
        }, 1500);
      } else {
        $('.info').append('<b>Check the validity of a credit card</b> | [GATE:01] @/Checked - RgChecker');
      }
    });
  
    $('#stop').click(function() {
      clearInterval(interval);
      $('#cc').val('');
      $('#start').attr('disabled', false);
      $('#stop').attr('disabled', true);
    });
  });
  