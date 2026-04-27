$('document').ready(function(){
    $("#submit").on('click',function(@){
        let myNote = $('#note').val();
        $.ajax({
            url:'save.php',
            type:'POST',
            

        })
    })
})