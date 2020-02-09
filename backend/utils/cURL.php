
<?php


class cURL{

    public static function get(string $url){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "$url",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

    }

    public static function post(string $url, array $params){

        $cURLConnection = curl_init($url);
        curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $params);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($cURLConnection);
        curl_close($cURLConnection);

        return json_decode($response);
    }

    public static function delete(string $url){
        $cURLConnection = curl_init($url);
        curl_setopt($cURLConnection, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        // curl_setopt(
        //     $cURLConnection,
        //     CURLOPT_HTTPHEADER,
        //     array(
        //         'Authorization: Bearer MY_API_TOKEN'
        //     )
        // );

        $response = curl_exec($cURLConnection);
        return json_encode($response);
    }

    public static function update(string $url, $data)
    {
        $cURLConnection = curl_init($url);
        curl_setopt($cURLConnection, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, http_build_query($data));

        // curl_setopt(
        //     $cURLConnection,
        //     CURLOPT_HTTPHEADER,
        //     array(
        //         'Authorization: Bearer MY_API_TOKEN'
        //     )
        // );

        $response = curl_exec($cURLConnection);
        return json_encode($response);
    }

}

?>