<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-auto">
            <a id="" class="btn btn-primary" href="{{ route('ajouter') }}" role="button">Ajouter</a>
        </div>
        <div class="col-auto">
            <a id="" class="btn btn-outline-danger" href="{{ route('Afficher') }}" role="button">Logout</a>
        </div>
    </div>
</div>

<table class="table">
    <tr>
        <th>Réference</th>
        <th>libellé</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Description</th>
        <th>Photo produit</th>
        <th>Type</th>
        <th>Action</th>
    </tr>
    @foreach ($produits as $produit)
    <tr>
        <td> {{$produit->RefPdt}} </td>
        <td> {{$produit->libPdt}} </td>
        <td> {{$produit->Prix}} </td>
        <td> {{$produit->Qte}} </td>
        <td> {{$produit->description}}</td>
        <td> 
            <img src="{{ asset('image/'.$produit->image) }}" width="100px" height="100px">
        </td>
        <td> {{$produit->type}}</td>
        <td> 
            <a id="" class="btn btn-primary" href="{{ route('show',$produit->id) }}" role="button">Show</a>
            <form action="{{ route('delete',$produit->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
