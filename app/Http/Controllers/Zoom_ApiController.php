<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BeforeValidException;
use App\ExpiredException;
use App\SignatureInvalidException;
use App\zoom;
use App\JWT;
use Exception;
use App\Zoom_Api;

class Zoom_ApiController extends Controller
{
    public function ZoomPost(Request $request)
    {
        $meeting = new zoom();
        $meeting->topic = $request->topic;
        $meeting->start_date = $request->start_date;
        $meeting->start_time = $request->start_time;
        $meeting->save();


        $topic = $request->topic;
        $start_date = $request->start_date;
        $start_time = $request->start_time;
        $time = $request->start_date.$request->start_time;

        

        return view('backend.zoom.zoom_post', [
            'topic' => $topic,
            'start_date' => $start_date,
            'start_time' => $start_time,
            'time' => $time
        ]);
    }


    // use Firebase\JWT\JWT;
    // use GuzzleHttp\Psr7\Request;
    // use Illuminate\Support\Facades\Request as FacadesRequest;
    // use PhpParser\Node\Stmt\Foreach_;

    private $zoom_api_key = 'ZpabVdq5Rs2pqDr_jaL4Dg';
    private $zoom_api_secret = 'TNwBBWZhrixzLbH8MyZxR1tBJWDEZU2Ys6Mx';

    protected function sendRequest($data)
    {
        $request_url = 'https://api.zoom.us/v2/users/me/meetings';
        $headers = ['authorization: Bearer ' . $this->generateJWTKey(), 'content-type: application/json'];
        $postFields = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $request_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if (!$response) {
            return $err;
        }
        return json_decode($response);
    }

    //function to generate JWT
    private function generateJWTKey()
    {
        $key = $this->zoom_api_key;
        $secret = $this->zoom_api_secret;
        $token = [
            'iss' => $key,
            'exp' => time() + 3600, //60 seconds as suggested
        ];
        // $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6IlI1OWZNMEViUXFPcWNrU0c4dzR2MmciLCJleHAiOjE1OTA1MTM4NDUsImlhdCI6MTU5MDUwODQ0N30.4ch2OZoFM_vZFdqhoMzJX8r8GPYjKlOkV_vUa7LprFc";
        return JWT::encode($token, $secret);
    }

    public function createAMeeting($data = [])
    {
        $post_time = $data['start_date'];
        $start_time = $post_time;
        $createAMeetingArray = [];
        if (!empty($data['alternative_host_ids'])) {
            if (count($data['alternative_host_ids']) > 1) {
                $alternative_host_ids = implode(',', $data['alternative_host_ids']);
            } else {
                $alternative_host_ids = $data['alternative_host_ids'][0];
            }
        }
        $createAMeetingArray['topic'] = $data['meetingTopic'];
        $createAMeetingArray['agenda'] = !empty($data['agenda']) ? $data['agenda'] : '';
        $createAMeetingArray['type'] = !empty($data['type']) ? $data['type'] : 2; //Scheduled
        $createAMeetingArray['start_time'] = $start_time;
        $createAMeetingArray['timezone'] = $data['timezone'];
        $createAMeetingArray['password'] = !empty($data['password']) ? $data['password'] : '';
        $createAMeetingArray['duration'] = !empty($data['duration']) ? $data['duration'] : 60;
        $createAMeetingArray['settings'] = [
            'join_before_host' => !empty($data['join_before_host']) ? true : false,
            'host_video' => !empty($data['option_host_video']) ? true : false,
            'participant_video' => !empty($data['option_participants_video']) ? true : false,
            'mute_upon_entry' => !empty($data['option_mute_participants']) ? true : false,
            'enforce_login' => !empty($data['option_enforce_login']) ? true : false,
            'auto_recording' => !empty($data['option_auto_recording']) ? $data['option_auto_recording'] : 'none',
            'alternative_hosts' => isset($alternative_host_ids) ? $alternative_host_ids : '',
        ];
        return $this->sendRequest($createAMeetingArray);
    }
}

$zoom_meeting = new Zoom_Api();

    $z = $zoom_meeting::create([
        'start_date' => date("Y-m-d h:i:s", strtotime('now')),
        'meetingTopic' => 'Example Test Meeting',
        'timezone' => '(GMT+6:00) Astana, Dhaka',
    ]);
    

    print_r($z);