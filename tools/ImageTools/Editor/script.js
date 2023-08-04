const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");

let x = 0;
let degrees = 0;
let img = new Image();
let fileName = "";
let rotate = false;
let wrh = 0;
let newWidth = 0;
let newHeight = 0;
let cropper = "";
let caman;
let url;
let i = 0;
let j = 0;

const downloadBtn = document.getElementById("download-btn");
const uploadFile = document.getElementById("upload-file");
const revertBtn = document.getElementById("revert-btn");
console.log(revertBtn);

$(document).on("change", "input[type=range]", function () {
  var bright = parseInt($("#bright").val());
  var cntrst = parseInt($("#contrast").val());
  var saturation = parseInt($("#saturation").val());
  caman.revert();
  caman.brightness(bright).contrast(cntrst).saturation(saturation);
  caman.render(function () {
    cropper.replace(this.toBase64(), true);
  });
});

uploadFile.addEventListener("change", (e) => {
  const file = document.getElementById("upload-file").files[0];
  console.log(file);
  const reader = new FileReader();

  if (file) {
    fileName = file.name;
    reader.readAsDataURL(file);
  }

  reader.addEventListener("load", () => {
    url = URL.createObjectURL(file);
    console.log(url);
    caman = Caman(canvas, url, function () {
      //alert('file url: ' + url);

      URL.revokeObjectURL(url);
      cropper = new Cropper(canvas, {
        zoomable: false,
        viewMode: 0,
        background: false,
        rotatable: true,
      });
      document.getElementsByClassName("center")[0].style.display = "block";
      document.getElementsByClassName("option")[0].style.display = "block";
      document.getElementsByClassName("center1")[0].style.display = "none";
    });
    var uploadedImageURL = URL.createObjectURL(file);
  });
});

document.addEventListener("click", (e) => {
  if (e.target.classList.contains("filter-btn")) {
    if (e.target.classList.contains("vintage-add")) {
      caman.revert();
      caman.vintage().render();
    } else if (e.target.classList.contains("lomo-add")) {
      caman.revert();
      caman.lomo().render();
    } else if (e.target.classList.contains("clarity-add")) {
      caman.revert();
      caman.clarity().render();
    } else if (e.target.classList.contains("sincity-add")) {
      caman.revert();
      caman.sinCity().render();
    } else if (e.target.classList.contains("crossprocess-add")) {
      caman.revert();
      caman.crossProcess().render();
    } else if (e.target.classList.contains("pinhole-add")) {
      caman.revert();
      caman.pinhole().render();
    } else if (e.target.classList.contains("nostalgia-add")) {
      caman.revert();
      caman.nostalgia().render();
    } else if (e.target.classList.contains("hermajesty-add")) {
      caman.revert();
      caman.herMajesty().render();
    } else if (e.target.classList.contains("revert-btn")) {
      caman.revert();
    }
    caman.render(function () {
      cropper.replace(this.toBase64(), true);
    });
  }
});

revertBtn.addEventListener("click", (e) => {
  caman.revert();
});

downloadBtn.addEventListener("click", () => {
  const fileExtension = fileName.slice(-4);
  let newFilename;
  if (fileExtension === ".jpg" || fileExtension === ".png") {
    newFilename = fileName.substring(0, fileName.length - 4) + "-edited.jpg";
  }
  download(canvas, newFilename);
});

function download(canvas, filename) {
  let e;
  const link = document.createElement("a");
  link.download = filename;
  link.href = cropper.getCroppedCanvas().toDataURL("image/jpeg", 0.8);
  e = new MouseEvent("click");
  link.dispatchEvent(e);
}

document.getElementById("rotate").addEventListener("click", () => {
  caman.render(function () {
    cropper.rotate(90);
    cropper.replace(this.toBase64(), true);
  });
});

document.getElementById("flipV").addEventListener("click", () => {
  i += 1;
  caman.render(function () {
    if (i % 2 == 0) {
      cropper.scale(1, 1);
    } else {
      cropper.scale(1, -1);
    }
    cropper.replace(this.toBase64(), true);
  });
});

document.getElementById("flipH").addEventListener("click", () => {
  j += 1;
  caman.render(function () {
    if (j % 2 == 0) {
      cropper.scale(1, 1);
    } else {
      cropper.scale(-1, 1);
    }
    cropper.replace(this.toBase64(), true);
  });
});
