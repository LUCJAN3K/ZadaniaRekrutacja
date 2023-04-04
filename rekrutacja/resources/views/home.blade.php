<!DOCTYPE html>
<html>
    <head>
        <title>TEST</title>
    </head>
    <style> table,th,td{border:1px solid;} </style>
    <body>
        <h2>TASK 1</h2>
        <table>
            <tr>
                <td>Client</td>
                    @foreach($clients as $client)
                        <td>{{$client->client_name}}</td>
                    @endforeach
            </tr>
            <tr>
                <td>Assigned Employee</td>
                @foreach($clients as $client)
                <td>{{$client->employee->employee_name}}</td>
                @endforeach
            </tr>
            <tr>
                <td>Ordered items ids</td>
                @foreach($clients as $client)
                    <td>
                        @foreach($client->orders as $orders)
                            {{$orders->ordered_item_id.','}}
                    @endforeach
                    </td>
                @endforeach
            </tr>
        </table>
        <h2>TASK 2</h2>
        <table>
            <tr><td>Car</td>
              @foreach($cars as $car)
                <td>{{$car->marka.' '.$car->model}}</td>
              @endforeach
            </tr>
            <tr><td>Owned By</td>
                @foreach($cars as $car)
                    <td>{{$car->owner->employee_name}}</td>
                @endforeach
            </tr>
            <tr><td>In use</td>
                @foreach($cars as $car)
                    <td>{{$car->in_use ? 'yes':'no'}}</td>
                @endforeach
            </tr>
        </table>
    </body>
</html>