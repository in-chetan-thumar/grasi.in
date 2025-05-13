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

function confirmDelete(e) {
    e.preventDefault(); // prevent form submit
    var url = $(e.currentTarget).attr("data-url");
    new swal({
        title: "Delete dealer?",
        text: "Are you sure you want to delete dealer?",
        showCancelButton: !0,
        confirmButtonColor: "#000000",
        cancelButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = url;
        }
    });
}
