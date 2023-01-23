<!DOCTYPE html>
<html lang="an">
<head>
    <title></title>
    <style>
        #participants {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #participants td, #participants th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #participants tr:nth-child(even){background-color: #f2f2f2;}

        #participants tr:hover {background-color: #ddd;}

        #participants th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #e84323;
            color: white;
        }
        #participants td {
            font-size: 12px;
        }
    #cont{
            margin-bottom:90px;
            width:100%;
        }
        #image{
            width:30%;
            float:left;
        }
        #texte{
            width:70%;
            float:right;
        }
    </style>
</head>
<body>

<br>

<center style="font-weight: bolder; text-decoration: underline;">Liste des Participants</center>
<br>
<table id="participants">
    <tr>
        <th>Nom</th>
        <th>Prénoms</th>
        <th>Numéro de téléphone</th>
		<th>Email</th>
    </tr>
    @foreach($participants as $participant)
        <tr>
            <td>{{ucfirst($participant->nom ?? '-')}}</td>
            <td>{{ucfirst($participant->prenoms ?? '-')}}</td>
            <td>{{ucfirst($participant->telephone ?? '_')}}</td>
            <td>{{ucfirst($participant->email ?? '_')}}</td>

        </tr>
    @endforeach
</table>

</body>
</html>
