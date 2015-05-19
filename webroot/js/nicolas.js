/* Copyright by Nicolas, tu peux pas test mon code :!   */
/* Ps : laisse ce message ici car c'est le copyright :p */

jQuery(document).ready(function () {
    var $clinique = 196,
        $username = $('#login_register');
    
    $('#lastname, #firstname').on('input', function() {
        var $vlastname = $('#lastname').val().replace(/\s+/g, '').replace(/[àâªæáäãåā]/g,"a").replace(/[éèêëeęėē]/g,"e").replace(/[îïìíįī]/g,"i").replace(/[ôœºoöòóõøō]/g,"o").replace(/[ûùüúū]/g,"u").replace(/[ñń]/g,"n").replace(/[çćč]/g,"c").replace(/[ÿ]/g,"y").toUpperCase(),
            $vfirstname = $('#firstname').val().replace(/\s+/g, '').replace(/[àâªæáäãåā]/g,"a").replace(/[éèêëeęėē]/g,"e").replace(/[îïìíįī]/g,"i").replace(/[ôœºoöòóõøō]/g,"o").replace(/[ûùüúū]/g,"u").replace(/[ñń]/g,"n").replace(/[çćč]/g,"c").replace(/[ÿ]/g,"y").toUpperCase();
        
        if(($vlastname.length === 0) && ($vfirstname.length === 0)){
            $username.val('');
        }else{
            $username.val($clinique + $vlastname.substr(0,3) + $vfirstname.substr(0,3));
        }
    });
});