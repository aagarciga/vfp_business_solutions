<?php

use Dandelion\Tools\Helpers\FieldDefinition;

$statusValue = FieldDefinition::getValues($FieldDefinition);

?>

<select class="select2-ajax">

</select>

<script>
    $(".select2-ajax").select2({
        ajax: {
            url: "<?php echo $View->Href('EditTupleDashboard', 'GetWorkOrders')?>",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function (data, page) {
                // parse the results into the format expected by Select2.
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data
                return {
                    results: data.items
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    });
</script>




