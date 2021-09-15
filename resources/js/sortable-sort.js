$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#sortable').sortable({
        update: function(event, ui) {
            // var uuid = "{{ $uuid ?? ''}}";
            // var path = "{{ $path ?? ''}}";

            var data_ids = $('tbody.sortable tr').map(function(){
                return $(this).data("id")
            }).get();

            var category_id = $('table.category').map(function(){
                return $(this).data("categoryid")
            }).get();

            $.ajax({
                type: "POST",
                url: path,
                dataType: "json",
                data: {data_ids: data_ids, category_id: category_id, uuid: uuid},
                success: function(order){
                    console.log(path, category_id, data_ids, uuid)
                }
            })
        }
    });
});
