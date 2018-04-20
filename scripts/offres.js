$(document).ready(function() {
    $.ajax({
        url: "http://169.254.196.39:3000/api/v1/posts"
    }).then(function(data) {
        var result = JSON.parse(data);
        console.log(result.data[0].intitule_poste);

        for (var i = 0, len = result.data.length; i < len; i++)
        {
            $('.offres').append('<tr>');
            $('.offres').append('<td>'+ result.data[i].nom_entreprise + '</td');
            $('.offres').append('<td>'+ result.data[i].intitule_poste + '</td');
            $('.offres').append('<td><a href="index.php?link=offre&id='+ result.data[i].id_poste +'" class="button">Details</a></td');
            $('.offres').append('</tr>');
        }
    });
});