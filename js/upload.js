function readURL(input) {
    console.log('hello')
    if (input.files && input.files[0]) {
      console.log(input.files[0].name)
      console.log(input.files[1].name)

      //console.log(input.files[0].name)
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.image-upload-wrap').hide();
  
        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();
  
        $('.file-title').html(input.files[0].name);
        $('.file-title2').html(input.files[1].name);

        elem=document.getElementById("btAggiungi")
        elem.style.display="none"

      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload();
    }
  }
  
  function removeUpload() {
    elem=document.getElementById("btAggiungi")
    elem.style.display="block"
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function () {
          $('.image-upload-wrap').removeClass('image-dropping');
  });
  