$(document).ready(function(){
    load_data();
    function load_data(query)
    {
        $.ajax({
            url:"../controller/inventory_maintain.php?action=view_suppliers",
            method:"post",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
        });
    }

    $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();
        }
    });
});


    setTimeout(function() {
        let alert = document.querySelector(".alert");
        alert.remove();
    }, 1600);
