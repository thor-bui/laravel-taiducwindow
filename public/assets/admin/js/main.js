$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function deleteProductCategoryById(categoryId, url) {
    $('#confirmModal').modal('show');
    $('#js-confirm-button').click(function () {
        $.ajax({
            method: 'DELETE',
            url: url,
            data: {id: categoryId},
            dataType: 'JSON',
            success: function (response) {
                if (!response.error) {
                    $('#confirmModal').modal('hide');
                    location.reload();
                } else {
                    $('#confirmModal').modal('hide');
                    location.reload();
                }
            }
        })
    })
}
