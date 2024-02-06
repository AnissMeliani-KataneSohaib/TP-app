<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container pt-5">
    <h1>Information sur le produit : {{$produit->RefPdt}}</h1>
    <div class="row">
        <div class="col-lg-6" style="
            height: 50vh;
            overflow: hidden;">
            <img src={{asset('image/'.$produit->image) }} alt="" style="
            object-fit: cover;
            width: 100%;
            height: 100%;">
        </div>
        <div class="col-lg-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Reference produit</th>
                        <td>{{$produit->RefPdt}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Libelle produit</th>
                        <td>{{$produit->libPdt}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Prix produit</th>
                        <td>{{$produit->Prix}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Quantite produit</th>
                        <td>{{$produit->Qte}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Description produit</th>
                        <td>{{$produit->description}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Type produit</th>
                        <td>{{$produit->type}}</td>
                    </tr>            
                </thead>
            </table>
            <a class="btn btn-info" href="{{route('produits')}}">retour</a>
        </div>
    </div>

</div>