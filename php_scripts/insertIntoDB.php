<?php
/**
 * Created by PhpStorm.
 * User: robreder
 * Date: 17.12.15
 * Time: 13:29
 */
/*
 * Description of AT.txt
 * country code      : iso country code, 2 characters
 * postal code       : varchar(20)
 * place name        : varchar(180)
 * admin name1       : 1. order subdivision (state) varchar(100)
 * admin code1       : 1. order subdivision (state) varchar(20)
 * admin name2       : 2. order subdivision (county/province) varchar(100)
 * admin code2       : 2. order subdivision (county/province) varchar(20)
 * admin name3       : 3. order subdivision (community) varchar(100)
 * admin code3       : 3. order subdivision (community) varchar(20)
 * latitude          : estimated latitude (wgs84)
 * longitude         : estimated longitude (wgs84)
 * accuracy
*/

$file_array = file("../AT/AT.txt");
$sql = "INSERT INTO `geo_names_org` (`country_code`, `postal_code`, `place_name`, `admin_name1`, `admin_name2`, `admin_name3`) VALUES (?, ?, ?, ?, ?, ?);";
$stmt = $conn->prepare($sql);

foreach ($file_array AS $currentLine) {
    $line_array = explode("\t", $currentLine);
}

?>

<!-- INSERT INTO `geo_names_org` (`country_code`, `postal_code`, `place_name`, `admin_name1`, `admin_name2`, `admin_name3`) VALUES ('NA', '0000', '0000', '0000', '0000', '0000'); -->
