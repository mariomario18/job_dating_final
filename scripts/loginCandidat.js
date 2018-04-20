

$(document).ready(function() {
    $('form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url     : 'http://localhost:3000/api/v1/candidates/login',
            type    : 'POST',
            dataType: 'json',
            data    : {'mail_candidat': $('.mail_candidat').val(), 'mdp_candidat': $('.mdp_candidat').val()},
            success : function(response) {
                if (!$.trim(response.data)) {
                    console.log("empty response");
                }
                else {
                    $.ajax({
                        url         : 'index.php?link=loginCandidat',
                        type        : 'POST',
                        contentType : 'application/x-www-form-urlencoded',
                        data        : 'id='+ response.data[0].id_candidat +'&prenom='+ response.data[0].prenom_candidat +'&nom='+ response.data[0].nom_candidat + '&mail=' + response.data[0].mail_candidat
                    }).done(function () {
                        window.location.replace("index.php?link=offres")
                    });
                }
            }
        });
    });
});