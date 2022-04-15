<script type="text/javascript">

//////////////////////  Photo Validation
// Check Valid Image
  $(document).ready(function(){
//  MADHYAMIK DOC UPLOAD
     //$('#success').hide();
    
 
    $("#photo").change(function () {
        if(fileExtValidate(this)) {
           if(fileSizeValidate(this)) {
            showImg(this);
           }   
        }    
      });
    // File extension validation, Add more extension you want to allow
    var validExt = ".jpg , .jpeg , .png";
    function fileExtValidate(fdata) {
     var filePath = fdata.value;
     var getFileExt = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
     var pos = validExt.indexOf(getFileExt);
     if(pos < 0) {
       toastr.options = {
                  "closeButton": true,  // true or false
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,  // true or false
                  "rtl": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false, // true or false
                  "showDuration": 300,
                  "hideDuration": 1000,
                  "timeOut": 5000,
                  "extendedTimeOut": 1000,
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                 }
                  $('#photo').val('');
                  toastr["error"]("This file is not allowed, please upload valid file.", "Message");
                  $('#photo_gif').addClass(' d-none ');
                  //$('#success').hide();
      //alert("This file is not allowed, please upload valid file.");
                
      return false;
      } else {
        return true;
      }
    }
    // file size validation
    function fileSizeValidate(file) {
        var FileSize = file.files[0].size/1024;  //1024/1024; // in MB
        if (FileSize >120) {  /// 120 KB CHECK ALL FILE
             toastr.options = {
                  "closeButton": true,  // true or false
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,  // true or false
                  "rtl": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false, // true or false
                  "showDuration": 300,
                  "hideDuration": 1000,
                  "timeOut": 5000,
                  "extendedTimeOut": 1000,
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                 }
                  $('#photo').val('');
                  toastr["warning"]("File size exceeds 120 KB"+FileSize, "Message");
                  $('#photo_gif').addClass(' d-none ');
            //alert('File size exceeds 1 MB'+FileSize);
              //$('#success').hide();
              
              // $('#zip_img').attr('src','');
          return false;
           // $(file).val(''); //for clearing with Jquery
        } else {
            //alert('File size '+FileSize);
              return true;
          }
       }
     // display img preview before upload.
    function showImg(fdata) {
            if (fdata.files && fdata.files[0])
             {
                var reader = new FileReader();
              reader.onload = function (e) 
                {
                  toastr.options = {
                  "closeButton": true,  // true or false
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,  // true or false
                  "rtl": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false, // true or false
                  "showDuration": 300,
                  "hideDuration": 1000,
                  "timeOut": 5000,
                  "extendedTimeOut": 1000,
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                 }
                  toastr["success"]("Photo Upload Success", "Message");
                  $('#pic').attr('src', e.target.result);
                   $('#photo_gif').removeClass(' d-none ');
                   $('#show_div').removeClass('d-none');
                  //$('#success').show();
                }
                reader.readAsDataURL(fdata.files[0]);
            }
        }

     });

///////////////// Signature Validation ////////////////	// 

// Check Valid Image
  $(document).ready(function(){
//  MADHYAMIK DOC UPLOAD
     //$('#success').hide();
    
    $("#sig").change(function () {
        if(fileExtValidate(this)) {
           if(fileSizeValidate(this)) {
            showImg(this);
           }   
        }    
      });
    // File extension validation, Add more extension you want to allow
    var validExt = ".jpg , .jpeg , .png";
    function fileExtValidate(fdata) {
     var filePath = fdata.value;
     var getFileExt = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
     var pos = validExt.indexOf(getFileExt);
     if(pos < 0) {
       toastr.options = {
                  "closeButton": true,  // true or false
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,  // true or false
                  "rtl": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false, // true or false
                  "showDuration": 300,
                  "hideDuration": 1000,
                  "timeOut": 5000,
                  "extendedTimeOut": 1000,
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                 }
                  $('#sig').val('');
                  toastr["error"]("This file is not allowed, please upload valid file.", "Message");
                  $('#sig_gif').addClass(' d-none ');
                  //$('#success').hide();
      //alert("This file is not allowed, please upload valid file.");
                
      return false;
      } else {
        return true;
      }
    }
    // file size validation
    function fileSizeValidate(file) {
        var FileSize = file.files[0].size/1024;  //1024/1024; // in MB
        if (FileSize >50) {  /// 50 KB CHECK ALL FILE
             toastr.options = {
                  "closeButton": true,  // true or false
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,  // true or false
                  "rtl": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false, // true or false
                  "showDuration": 300,
                  "hideDuration": 1000,
                  "timeOut": 5000,
                  "extendedTimeOut": 1000,
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                 }
                  $('#sig').val('');
                  toastr["warning"]("File size exceeds 50 KB"+FileSize, "Message");
                  $('#sig_gif').addClass(' d-none ');
            //alert('File size exceeds 1 MB'+FileSize);
              //$('#success').hide();
              
              // $('#zip_img').attr('src','');
          return false;
           // $(file).val(''); //for clearing with Jquery
        } else {
            //alert('File size '+FileSize);
              return true;
          }
       }
     // display img preview before upload.
    function showImg(fdata) {
            if (fdata.files && fdata.files[0])
             {
                var reader = new FileReader();
              reader.onload = function (e) 
                {
                  toastr.options = {
                  "closeButton": true,  // true or false
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,  // true or false
                  "rtl": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false, // true or false
                  "showDuration": 300,
                  "hideDuration": 1000,
                  "timeOut": 5000,
                  "extendedTimeOut": 1000,
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                 }
                  toastr["success"]("Signature Upload Success", "Message");
                  $('#sin').attr('src', e.target.result);
                  $('#sig_gif').removeClass('d-none');
                  $('#show_div').removeClass('d-none');
                  //$('#success').show();
                }
                reader.readAsDataURL(fdata.files[0]);
            }
        }

     });
</script>