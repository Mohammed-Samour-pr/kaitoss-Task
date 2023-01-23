<script>
    $(function() {

        $(document).on("click", ".ConfirmLink", function() {
            $("#Confirm").modal("show");
            $("#Confirm .btn-light-danger ").attr("href", $(this).attr("href"));
            return false;
        });

        $(document).on("click", ".Popup", function() {
            // $("#Popup .modal-body").html(
            //     "<h1 class='text-center'><div class='spinner spinner-track spinner-primary spinner-lg mr-15'></div></h1>"
            //     );
            $("#Popup .modal-body").html(
                "<h1 class='text-center'><i style='font-size:48px;' class='fa fa-spinner fa-spin' ' ></i></h1>"
                );
            $("#Popup .modal-title").text($(this).attr("title"));
            $("#Popup .modal-body").load($(this).attr("href"));
            $("#Popup").modal("show");
            return false;
        });
        $(document).on("click", ".PopupModal", function() {
            // $("#Popup .modal-body").html(
            //     "<h1 class='text-center'><div class='spinner spinner-track spinner-primary spinner-lg mr-15'></div></h1>"
            //     );
            $("#PopupModal .modal-body").html(
                "<h1 class='text-center'><i style='font-size:48px;' class='fa fa-spinner fa-spin' ' ></i></h1>"
            );
            $("#PopupModal .modal-title").text($(this).attr("title"));
            $("#PopupModal .modal-body").load($(this).attr("href"));
            $("#PopupModal").modal("show");
            return false;
        });


    });


</script>



