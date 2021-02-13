<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{url('produit/create')}}">create</a>
    <table>
    <tr>
        <td>Id</td>
        <td>Titre</td>
        <td>Descreption</td>
    </tr>
    
    @foreach($Products as $produit)
    <tr>
        <td>{{$produit->id}}</td>
        <td>{{$produit->titre}}</td>
        <td>{{$produit->description}} </td>

    </tr>
    @endforeach
    
    </table>
</body>
</html>


