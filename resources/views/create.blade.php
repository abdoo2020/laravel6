 <h1> creaaaaaaate</h1>



 <form action="{{url('produit')}}" method="post">
    {{csrf_field()}}
    titre :  <input type="text" name="titre">
    description :  <input type="text" name="description">

    <input type="submit" value="ajouter">
 </form>