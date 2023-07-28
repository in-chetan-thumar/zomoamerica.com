function showSaveModel(e) {
    e.preventDefault();
    $(".divOffcanvas").empty();
    $("#status").show();
    $("#preloader").show();
    var url = $(e.currentTarget).attr("href");
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: url,
        type: "get",
        data: {},
        success: function (data, textStatus, jqXHR) {
            $("#status").hide();
            $("#preloader").hide();
            if (!data.error) {
                $(".divOffcanvas").html(data.view);
                var bsOffcanvas = new bootstrap.Offcanvas(
                    $("#offcanvasCreate")
                );
                bsOffcanvas.show();
            } else {
                toastr.error(data.message);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $("#status").hide();
            $("#preloader").hide();
            toastr.error("Error occurred!");
        },
    });
}

function showEditModel(e) {
    $(".divOffcanvas").empty();
    e.preventDefault();
    $("#status").show();
    $("#preloader").show();
    var url = $(e.currentTarget).attr("href");
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        url: url,
        type: "get",
        data: {},
        success: function (data, textStatus, jqXHR) {
            $("#status").hide();
            $("#preloader").hide();
            if (!data.error) {
                $(".divOffcanvas").html(data.view);
                var bsOffcanvas = new bootstrap.Offcanvas(
                    $("#offcanvasCreate")
                );
                bsOffcanvas.show();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $("#status").hide();
            $("#preloader").hide();
            toastr.error("Error occurred!");
        },
    });
}

$(document).ready(function () {
    if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function (e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i];
                var fileReader = new FileReader();
                fileReader.onload = function (e) {
                    var file = e.target;
                    $(
                        '<span class="pip" style="">' +
                            '<img class="imageThumb" src="' +
                            e.target.result +
                            '" title="' +
                            file.name +
                            '"/>' +
                            '<br/><span class="remove">X</span>' +
                            "</span>"
                    ).insertAfter("#files");

                    $(".remove").click(function () {
                        $(this).parent(".pip").remove();
                        $("#files").val("");
                    });
                };
                fileReader.readAsDataURL(f);
            }
        });
    } else {
        alert("Your browser doesn't support to File API");
    }
});

function previewImages() {
    var preview = document.querySelector("#preview");
    if (this.files) {
        [].forEach.call(this.files, readAndPreview);
    }
}

function readAndPreview(file) {
    // File type validator based on the extension
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
        return alert(file.name + " is not an image");
    }

    var reader = new FileReader();

    reader.addEventListener("load", function () {
        var image = new Image();
        image.height = 100;
        image.title = file.name;
        image.src = this.result;
        preview.appendChild(image);
    });

    reader.readAsDataURL(file);
}

document.querySelector("#files").addEventListener("change", previewImages);
