<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medications</title>
    
</head>
<body>
    <form action="{{ route('medications.store') }}" method="POST">
        @csrf
        <label for="medication-name"> Medication Name</label>
        <input type="text" name="medication-name" id="medication-name">
        <label for="medication-dose"> Medication Dose</label>
        <input type="number" name="medication-dose" id="medication-dose">
        <label for="medication-dose-uom"> UOM</label>
        <select name="medication-dose-uom" id="medication-dose-uom">
            <option value="mg">MG</option>
            <option value="oz">OZ</option>
            <option value="cmg">cmg</option>
        </select>
        <label for="medication-frequency"> Number of times a day</label>
        <input type="number" name="medication-frequency" id="medication-frequency">
        <label for="medication-time-of-day"> Medication Quantity</label>
        <select name="medication-time-of-day" id="medication-time-of-day">
            <option value="morning">Morning</option>
            <option value="morning-and-noon">Morning and Noon</option>
            <option value="morning-and-evening">Morning-and-evening</option>
            <option value="morning-and-night">Morning-and-night</option>

        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
