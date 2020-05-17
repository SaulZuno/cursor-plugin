jQuery("#btn_myplugin").on("click",function(e){

    var efectos = jQuery("#efectos").val();
            var url = "../wp-admin/admin-ajax.php";
            var select_option = jQuery("#efectos").val();
            //var ebck_nonce = jQuery("ebck_nonce").val();

            let data_export = new FormData();

            data_export.append('action', 'myplugineffect');
            data_export.append('select_option', select_option);
            //data_export.append('myplugin_nonce', ebck_nonce);

            jQuery.ajax({
                type: "POST",
                url: url,
                data: data_export,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    
                },
                success: function(data) {
                    console.log(data);
                    alert("Datos guardados con Éxito");
                }
            });

})