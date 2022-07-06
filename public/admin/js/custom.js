// image editor
  $(function () {
    $("#first_div").resizable({
      handles: "n, e, s, w"
    });
  });


  var img = new Image();
var canvas = document.getElementById("canvas");
var canvas2 = document.getElementById("canvas2");
var ctx = canvas.getContext("2d");
var ctx2 = canvas2.getContext("2d");
var fileName = "";

$(document).ready(function() {

  $("#download-btn").on("click", function(e) {

    var fileExtension = fileName.slice(-4);
    if (fileExtension == ".jpg" || fileExtension == ".png") {
      var actualName = fileName.substring(0, fileName.length - 4);
    }
    download(canvas, actualName + "-edited.jpg");
  });

  $("#upload-file").on("change", function() {
    var file = document.querySelector("#upload-file").files[0];
    var reader = new FileReader();
    if (file) {
      fileName = file.name;
      reader.readAsDataURL(file);
    }
    reader.addEventListener(
      "load",
      function() {
        img = new Image();
        img.src = reader.result;
        img.onload = function() {
          canvas.width = img.width;
          canvas2.width = img.width;
          canvas.height = img.height;
          canvas2.height = img.height;
          ctx.drawImage(img, 0, 0, img.width, img.height);
          ctx2.drawImage(img, 0, 0, img.width, img.height);
          $(".canvas-default").css('display','none')
          $("#canvas").css('display','block')
          $("#canvas2").css('display','block')
          $("#canvas").removeAttr("data-caman-id");
          $("#canvas2").removeAttr("data-caman-id");
        };
      },
      false
    );
  });
});

function download(canvas, filename) {
  var e;
  var lnk = document.createElement("a");

  lnk.download = filename;

  lnk.href = canvas.toDataURL("image/jpeg", 0.8);

  if (document.createEvent) {
    e = document.createEvent("MouseEvents");
    e.initMouseEvent(
      "click",
      true,
      true,
      window,
      0,
      0,
      0,
      0,
      0,
      false,
      false,
      false,
      false,
      0,
      null
    );
    lnk.dispatchEvent(e);
  } else if (lnk.fireEvent) {
    lnk.fireEvent("onclick");
  }
}



/*image editor*/







$('#add-new-fonts').click(function(){
  $('#add-new-fonts').css('display','none')
  $('.font-file').css('display','block')
})



$('#surface-tab').click(function(){
  $('#surface-tab-start').slideToggle();
  $('#surface-tab').toggleClass("icon-rotate");
})


$('#customization-tab').click(function(){
  $('#customization-tab-start').slideToggle();
  $('#customization-tab').toggleClass("icon-rotate");
})

$('#text-block-tab').click(function(){
  $('#text-block-tab-start').slideToggle();
  $('#text-block-tab').toggleClass("icon-rotate");
})
$('#data-block-tab').click(function(){
  $('#data-block-tab-start').slideToggle();
  $('#data-block-tab').toggleClass("icon-rotate");
})
$('#image-block-tab').click(function(){
  $('#image-block-tab-start').slideToggle();
  $('#image-block-tab').toggleClass("icon-rotate");
})
$('#option-block-tab').click(function(){
  $('#option-block-tab-start').slideToggle();
  $('#option-block-tab').toggleClass("icon-rotate");
})



//https://www.npmjs.com/package/vue-color
//https://github.com/xiaokaike/vue-color
//https://github.com/xiaokaike/vue-color#readme


//Chrome Selector
new Vue({
  el: "#vue_chrome_picker",
  components: {
    ChromeColor: VueColor.Chrome
  },
  data: {
    color: "#FF0000"
  }
}),
//Sketch Selector
Vue.component("color-picker", VueColor.Sketch), new Vue({
  el: "#vue_sketch_picker",
  data: function() {
    return {
      colors: {
        hex: "#000000"
      }
    }
  },
  methods: {
    updateValue: function(o) {
      data: {
        color: o
      }
      // console.log(o, o.hex)
    }
  }
});