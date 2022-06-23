<?php 

    include 'conn.php'; error_reporting(0);

    $getorderbynamehospital = $_GET['orderby'];
    $getprovId = $_GET['provName'];
    $getSearch = $_GET['getSearch'];
    $latFrom = $_GET['latitudeMe'];
    $lonFrom = $_GET['longtitudeMe'];

    if(isset($_GET['getSearch'])){
        if(isset($_GET['provName'])){
            if(isset($_GET['orderby'])){
                $QueryResult = $connect->query("SELECT *,111.1111 * DEGREES(
                    ACOS(
                        COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                            RADIANS($lonFrom - hospital_longtitude)
                        ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
                    )
                ) AS distance_in_km 
                FROM tb_hospital WHERE province_id = $getprovId AND hospital_name like '%$getSearch%' ORDER BY CONVERT (hospital_name USING tis620) ASC");
    
            } else {
                $QueryResult = $connect->query("SELECT *,111.1111 * DEGREES(
                    ACOS(
                        COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                            RADIANS($lonFrom - hospital_longtitude)
                        ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
                    )
                ) AS distance_in_km
                 FROM tb_hospital WHERE province_id = $getprovId AND hospital_name like '%$getSearch%' order by
111.1111 * DEGREES(
        ACOS(
            COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                RADIANS($lonFrom - hospital_longtitude)
            ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
        )
    ) ");
            }
        }else{
            if(isset($_GET['orderby'])){
                $QueryResult = $connect->query("SELECT *,111.1111 * DEGREES(
                    ACOS(
                        COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                            RADIANS($lonFrom - hospital_longtitude)
                        ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
                    )
                ) AS distance_in_km
                 FROM tb_hospital WHERE hospital_name like '%$getSearch%' ORDER BY CONVERT (hospital_name USING tis620) ASC");
    
            } else {
                $QueryResult = $connect->query("SELECT *,111.1111 * DEGREES(
                    ACOS(
                        COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                            RADIANS($lonFrom - hospital_longtitude)
                        ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
                    )
                ) AS distance_in_km
                 FROM tb_hospital WHERE hospital_name like '%$getSearch%' order by
111.1111 * DEGREES(
        ACOS(
            COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                RADIANS($lonFrom - hospital_longtitude)
            ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
        )
    ) ");
            }
        }
    }else{
        if(isset($_GET['provName'])){
            if(isset($_GET['orderby'])){
                $QueryResult = $connect->query("SELECT *,111.1111 * DEGREES(
                    ACOS(
                        COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                            RADIANS($lonFrom - hospital_longtitude)
                        ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
                    )
                ) AS distance_in_km
                 FROM tb_hospital WHERE province_id = $getprovId ORDER BY CONVERT (hospital_name USING tis620) ASC");
    
            } else {
                $QueryResult = $connect->query("SELECT *,111.1111 * DEGREES(
                    ACOS(
                        COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                            RADIANS($lonFrom - hospital_longtitude)
                        ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
                    )
                ) AS distance_in_km
                 FROM tb_hospital WHERE province_id = $getprovId order by
111.1111 * DEGREES(
        ACOS(
            COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                RADIANS($lonFrom - hospital_longtitude)
            ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
        )
    ) ");
            }
        }else{
            if(isset($_GET['orderby'])){
                $QueryResult = $connect->query("SELECT *,111.1111 * DEGREES(
                    ACOS(
                        COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                            RADIANS($lonFrom - hospital_longtitude)
                        ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
                    )
                ) AS distance_in_km
                 FROM tb_hospital ORDER BY CONVERT (hospital_name USING tis620) ASC");
    
            } else {
                $QueryResult = $connect->query("SELECT *,111.1111 * DEGREES(
                    ACOS(
                        COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                            RADIANS($lonFrom - hospital_longtitude)
                        ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
                    )
                ) AS distance_in_km
                 FROM tb_hospital order by
111.1111 * DEGREES(
        ACOS(
            COS(RADIANS($latFrom)) * COS(RADIANS(hospital_latitude)) * COS(
                RADIANS($lonFrom - hospital_longtitude)
            ) + SIN(RADIANS($latFrom)) * SIN(RADIANS(hospital_latitude))
        )
    ) ");
            }
        }
    }
    
    
    $result = array();

    while($fetchData = $QueryResult -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);

?>