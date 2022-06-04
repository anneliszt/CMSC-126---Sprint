// Allows file uploads

function triggerClick(e) {
    // Query selector returns the first element that matches a CSS selector
    document.querySelector('#productImage').click();
  }

  // Displays image from uploaded file
  function displayImage(e) {
    if (e.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e){
        document.querySelector('#productDisplay').setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(e.files[0]);
    }
  }