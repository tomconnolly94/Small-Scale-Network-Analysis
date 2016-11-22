master_data = 1;

function get_data() {
    $.get("http://localhost/small_scale_network_analysis/small_scale_network_analysis/php/processing_scripts/ajax_response/get_mapping_data.php", function(data, status){
        prepare_data(data);
    });
}