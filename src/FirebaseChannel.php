<?php

namespace Veldman\Firebase;

use Exception;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;

class FirebaseChannel
{
    public function __construct()
    {
        // Initialisation code here
    }

    /**
     * @throws Exception
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toVoice($notifiable);


        $url = '';
        $data = [];

        $response = Http::post($url, $data);

        if($response->error) {
            throw new Exception('Problem with sending firebase notification message');
        }

        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}