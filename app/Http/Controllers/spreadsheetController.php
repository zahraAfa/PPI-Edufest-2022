<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spreadsheetController extends Controller
{
    public function getServiceGoogleSheet() {
        //Reading data from spreadsheet.
        $client = new \Google_Client();
        $client->setApplicationName('Google Sheets and PHP');
        // $client->addScope(\Google\Service\Sheets\Resource\Spreadsheets::SPREADSHEET);
        $client->setScopes([
            \Google_Service_Sheets::SPREADSHEETS
        ]);
        $client->setAccessType('offline');
        $client->setAuthConfig(__DIR__ . '/../../../credentials.json');
        $service = new \Google_Service_Sheets($client);
        return $service;
    }

    public function read() {
        $spreadsheetId = array("1wRpwxI6KuB-zuMzR6qfWSGysfJKdmyLrwrqe12sHAvE", "1YCRPxGWacJLa8FUj0RErlIZ8kruUxBFhcEwzinv0__U", "1p3q4DYLsYK2QyKYYuvcjp4efcHpS7ONhui2KKowtJC4");
        $get_range = array("B2:C116", "B2:C112" ,"B2:C65");

        $registrants = $this->getListRegistrants($spreadsheetId, $get_range);
        $attendances = $this->getListOfAttendance("1BGVrzZNu63H8JPMwJcO0OleVb3rqLyQfdC6O_8rhg2M", "C2:D79");
        $comparison = array_diff($attendances["emailAttendances"], $registrants);
        $resultEmail = array_diff($attendances['emailAttendances'], $comparison);
        $listName = array();
        $listEmail = array();
        $nonEligibleName = array();
        $nonEligibleEmail = array();
        // print_r($attendances['nameAttendances']);
        foreach($comparison as $x => $value) {
            $nonEligibleName[] = $attendances['nameAttendances'][$x];
            $nonEligibleEmail[] = $value;
        }
        foreach($resultEmail as $x => $value) {
            $listName[] = $attendances['nameAttendances'][$x];
            $listEmail[] = $value;
            // print_r($attendances['nameAttendances'][$x]);
        }
        
        return [
            "email" => $listEmail,
            "name" => $listName,
            "nonEligibleEmail" => $nonEligibleEmail,
            "nonEligibleName" => $nonEligibleName,
            "totalRegistrants" => count($registrants),
            "totalAttendances" => count($attendances['emailAttendances'])
        ];
    }

    public function getListRegistrants($urls, $ranges) {
        $service = $this->getServiceGoogleSheet();

        $emailRegistrant = array();
        if (count($urls) === count($ranges)) {
            for ($i = 0; $i < count($urls); $i++) {
                $spreadsheetId = $urls[$i];
                $get_range = "Form Responses 1!" . $ranges[$i];
    
                $registrantsValues = $service->spreadsheets_values->get($spreadsheetId, $get_range);
                $registrantList = $registrantsValues->getValues();
    
                $j = 0;
                foreach ($registrantList as $x => $secondArray) {
                    foreach ($secondArray as $x => $email) {
                        if ($j%2 == 0) {
                            $emailRegistrant[] = $email;
                        }
                        $j++;
                    }
                }
            }
            return $emailRegistrant;
        }
        else {
            abort(500, "The length of the urls does not have the same with ranges");
        }
    }

    public function getListOfAttendance($url, $range) {
        $service = $this->getServiceGoogleSheet();
        $get_range = "Form responses!" . $range;
        $attendancesValues = $service->spreadsheets_values->get($url, $range);
        $attendancesList = $attendancesValues->getValues();
        $emailAttendances = array();
        $nameAttendances = array();
        $j = 0;
        foreach ($attendancesList as $x => $secondArray) {
            foreach ($secondArray as $x => $value) {
                if ($j%2 == 0) {
                    $emailAttendances[] = $value;
                } else if ($j%2 != 0) {
                    $nameAttendances[] = $value;
                }
                $j++;
            }
        }

        return [
            "emailAttendances" => $emailAttendances,
            "nameAttendances" => $nameAttendances
        ];
    }

}
