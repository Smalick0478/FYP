<!DOCTYPE html>
<html>

<head>
    <title>View Live location</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <script src="./socket.io.js"></script>
    <script src="./SensorOnOff.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <div class="row">

            <h2>Live Locations of Parking Space</h2>

            <table style="width:100%">
                <tr>
                    <th>Sensors</th>
                    <th>On/Off</th>
                    <th>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ParkingSeats">
                            See Available Spots
                        </button>

                        <div class="modal fade" id="ParkingSeats" tabindex="-1" aria-labelledby="ParkingSeatsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ParkingSeatslLabel">Parking Seats Available</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="content col-sm-4">
                                                    Parking Spot 1:
                                                    <i id="sensor1ParkOn" class="img-responsive"></i>
                                                </div>
                                                <div class="content col-sm-4">
                                                    Parking Spot 2:
                                                    <i id="sensor2ParkOn" class="img-responsive"></i>
                                                </div>
                                                <div class="content col-sm-4">
                                                    Parking Spot 3:
                                                    <i id="sensor3ParkOn" class="img-responsive"></i>
                                                </div>
                                                <div class="content col-sm-4">
                                                    Parking Spot 4:
                                                    <i id="sensor4ParkOn" class="img-responsive"></i>
                                                </div>
                                                <div class="content col-sm-4">
                                                    Parking Spot 5:
                                                    <i id="sensor5ParkOn" class="img-responsive"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr>
                    <td id="sensor1"></td>
                    <td id="sensor1On/Off"></td>


                </tr>
                <tr>
                    <td id="sensor2"></td>
                    <td id="sensor2On/Off"></td>
                </tr>
                <tr>
                    <td id="sensor3"></td>
                    <td id="sensor3On/Off"></td>
                </tr>
                <tr>
                    <td id="sensor4"></td>
                    <td id="sensor4On/Off"></td>
                </tr>
                <tr>
                    <td id="sensor5"></td>
                    <td id="sensor5On/Off"></td>
                </tr>
            </table>


            </script>


        </div>

    </div>
</body>

</html>
