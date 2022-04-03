<section class="container">
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 8 CRUD Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('proprietaire.liste') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        @foreach ($proprietaires as $proprietaire)
        <tr>
            <th>Nom:</th>
            <td>{{ $proprietaire->nom }}</td>
        </tr>
        <tr>
            <th>Prenom:</th>
            <td>{{ $proprietaire->prenom }}</td>
        </tr>
        <tr>
            <th>Adresse:</th>
            <td>{{ $proprietaire->adresse }}</td>
        </tr>
 
        <tr>
            <th>Telephone:</th>
            <td>{{ $proprietaire->telephone }}</td>
        </tr>
 
        <tr>
            <th>Date de Naissance:</th>
            <td>{{ $proprietaire->date_naissance }}</td>
        </tr>
 
        <tr>
            <th>Sexe:</th>
            <td>{{ $proprietaire->sexe }}</td>
        </tr>

        <tr>
            <th>Lieu de Naissance:</th>
            <td>{{ $proprietaire->lieu_naissance }}</td>
        </tr>

        <tr>
            <th>Email:</th>
            <td>{{ $proprietaire->email }}</td>
        </tr>
        @endforeach
      
 
    </table>
</section>
