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
        url: "http://localhost:3000/api/v1/posts/" + id
    }).then(function(data) {
        var result = JSON.parse(data);
        console.log(result.data[0].intitule_poste);

        for (var i = 0, len = result.data.length; i < len; i++)
        {
            $('.offre').append('<tr>');
            $('.offre').append('<td>'+ result.data[i].nom_entreprise + '</td');
            $('.offre').append('<td>'+ result.data[i].intitule_poste + '</td');
            $('.offre').append('<td>'+ result.data[i].description_poste + '</td');
            $('.offre').append('<td><a href="index.php?link=offreEdition&id='+ result.data[i].id_poste +'" class="button">Editer</a></td');
            $('.offre').append('</tr>');
        }
    });
});