<!DOCTYPE html>
<html>
<head>
    <title>Medications Index</title>
</head>
<body>
    <h1>Medications Index</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Dose</th>
                <th>Unit of Measure</th>
                <th>Frequency</th>
                <th>Time of Day</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medications as $medication)
                <tr>
                    <td>{{ $medication->name }}</td>
                    <td>{{ $medication->dose }}</td>
                    <td>{{ $medication->dose_uom }}</td>
                    <td>{{ $medication->frequency }}</td>
                    <td>{{ $medication->time_of_day }}</td>
                </tr>
            @endforeach
        </tbody>

        
    </table>

