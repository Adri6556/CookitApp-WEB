/**
 * Created by adrii on 04/03/2017.
 */
function loadLogin() {
    $.ajax({
        url: 'user/login',
        success: function(result){
            $('#content').html(result);
        }});
}