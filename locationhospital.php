<?php 

    include 'conn.php';

    $latFrom = $_GET['latitudeMe'];
    $lonFrom = $_GET['longtitudeMe'];

      $sql = " SELECT
    *, 111.1111 * DEGREES(
        ACOS(
            COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                RADIANS($lonFrom - hospital_longtitude)
            ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
        )
    ) AS distance_in_km
FROM
    tb_hospital
order by
111.1111 * DEGREES(
        ACOS(
            COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                RADIANS($lonFrom - hospital_longtitude)
            ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
        )
    )";

    $QueryResult = $connect->query($sql);
    $result = array();
    while($row = $QueryResult -> fetch_assoc()){
      $result = $row;
    }
    //   echo $sql;

      echo json_encode($result);
?>