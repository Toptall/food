<?php

namespace App\Schedule;
use DOMDocument;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use DateTime;
class XmlUsers
{
    public function makeXml()
    {
        $user = User::orderBy('id', 'DESC')->first(); //createdAt
        $datetime = new DateTime($user->createdAt);
        $time_name = $datetime->format('ymdhi');
        $xml = new DOMDocument();
        $xml_album = $xml->createElement("Заказы");
        $xml_track = $xml->createElement("Заказ");
        $xml_track_date = $xml->createElement("ДатаСоздания", '23.23.23');

        $xml_track->appendChild( $xml_track_date );
        $xml_album->appendChild( $xml_track );
        $xml->appendChild( $xml_album );
        $xml->save($time_name."_".$user->id.".xml");
    }
}
