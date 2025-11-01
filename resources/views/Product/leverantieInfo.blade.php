@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamin</title>
</head>

<body>
    <div class="container d-flex justify-content-center">

        <div class="col-md-9">

            <h1>{{ $title }}</h1>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" aria-label="sluiten" data-bs-dismiss="alert"></button>
                </div>
                <meta http-equiv="refresh" content="3;url={{ route('product.leverantieInfo') }}">
            @endif
            @forelse ($Leverancier as $Leverancier)
                Naam Leverancier: {{ $Leverancier->Naam }}
                <br>Naam Contactpersoon: {{ $Leverancier->Contactpersoon }}
                <br>Leveranciernummer: {{ $Leverancier->Leveranciernummer }}
                <br>Mobiel: {{ $Leverancier->Mobiel }}
            @empty
                <p>Geen Leverancier gevonden.</p>
            @endforelse


            <table class="table table-striped table-bordered table-hover mt-4 align-middle shadow-sm">
                <thead>
                    <th class="text-center">Naam </th>
                    <th class="text-center">DatumLevering</th>
                    <th class="text-center">Aantal</th>
                    <th class="text-center">DatumEerstVolgendeLevering</th>
                </thead>
                <tbody>
                    @if ($leverant[0]->AantalAanwezig != 0)
                        @foreach ($leverant as $lever)
                            <tr>
                                <td>{{ $lever->Naam }}</td>
                                <td>{{ $lever->DatumLevering }}</td>
                                <td class="text-center">{{ $lever->Aantal }}</td>
                            <td class="text-center">{{ $lever->DatumEerstVolgendeLevering }}</td>
                            
                        @endforeach
                    @else
                        <td class="text-center" colspan='4'>Er is van dit
product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: {{ $leverant[0]->DatumEerstVolgendeLevering }}</td>
                    @endif
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>