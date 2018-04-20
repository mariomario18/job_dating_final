$(document).ready(function() {
    $.ajax({
        url: "http://localhost:3000/api/v1/candidates"
    }).then(function(data) {
        var result = JSON.parse(data);
        console.log(result.data[0].nom_candidat);

        for (var i = 0, len = result.data.length; i < len; i++)
        {
            $('.candidates').append('<tr>');
            $('.candidates').append('<td>'+ result.data[i].prenom_candidat + '</td');
            $('.candidates').append('<td>'+ result.data[i].nom_candidat + '</td');
            $('.candidates').append('<td><a href="index.php?link=candidat&id='+ result.data[i].id_candidat +'" class="button">Details</a></td');
            $('.candidates').append('</tr>');
        }
    });
});