<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Covid19 Country Stats</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1 mx-auto">Covid19 Statistics Globally</span>
      </nav>
    <div class="container-fluid pt-3">
        <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>Country Name</th>
                    <th>Cases</th>
                    <th>Deaths</th>
                    <th>Total Recovered</th>
                    <th>New Deaths</th>
                    <th>New Cases</th>
                    <th>Critical</th>
                    <th>Active Cases</th>
                    <th>Total tests</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($response->countries_stat as $country)
                <tr>
                    <td>{{ $country->country_name}}</td>
                    <td>{{ $country->cases}}</td>
                    <td>{{ $country->deaths}}</td>
                    <td>{{ $country->total_recovered}}</td>
                    <td>{{ $country->new_deaths}}</td>
                    <td>{{ $country->new_cases}}</td>
                    <td>{{ $country->serious_critical}}</td>
                    <td>{{ $country->active_cases}}</td>
                    <td>{{ $country->total_tests}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Country Name</th>
                    <th>Cases</th>
                    <th>Deaths</th>
                    <th>Total Recovered</th>
                    <th>New Deaths</th>
                    <th>New Cases</th>
                    <th>Critical</th>
                    <th>Active Cases</th>
                    <th>Total tests</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

    <script>
        $('#example').DataTable({
            order: [],
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });

    </script>
</script>
</body>
</html>
