var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(document).ready(function() {
    var id = getUrlParameter('id');
    $.ajax({
        url: "http://localhost:3000/api/v1/candidates/" + id
    }).then(function(data) {
        var result = JSON.parse(data);
        console.log(result.data[0].nom_candidat);

        $('.candidat').append('<tr>');
        $('.candidat').append('<td>'+ result.data[0].mail_candidat + '</td');
        $('.candidat').append('<td>'+ result.data[0].prenom_candidat + '</td');
        $('.candidat').append('<td>'+ result.data[0].nom_candidat + '</td');
        $('.candidat').append('<td>'+ result.data[0].description_candidat + '</td');
        $('.candidat').append('</tr>');

        for (var i = 0, len = result.data.length; i < len; i++){
            console.log(i);
            $('.skill').append('<li>'+ result.data[i].nom_competence +' : '+ result.data[i].nom_niveau +'</li>');
        }
    });
});