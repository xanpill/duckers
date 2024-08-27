<?php
class yosiket
{
  public function slip_check($qrcode)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://suba.rdcw.co.th/v1/inquiry',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => '{
          "payload": "' . $qrcode . '"
      }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        /// แก้เลขจากตรงนี้ base64_encode('เลขclientid:เลขsecret')
        'Authorization: Basic ' . base64_encode('267b7d8d036741b898a76d7b0f01befb:3qVY1klUv7_hvM6OCbphJ')
      ),
    ));

    $response = curl_exec($curl);
    return $response;
  }
}