
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Zakat_model extends CI_Model
{

    function getGoldPrice()
    {

        $isDataExist = $this->db->get_where('emas', ['tanggal' => date("Y-m-d")])->row_array();
        if ($isDataExist === null) {

            $this->db->delete('emas', ['id' => 1]);

            // set API Endpoint and API key 
            https: //metals-api.com/api/latest?access_key=h640okvpspvciht2hj9k51sdp4e5l44w23cd2a35fooslz99pb3p4so7amh7&from=USD&to=IDR

            $endpoint = 'latest';
            $access_key = 'h640okvpspvciht2hj9k51sdp4e5l44w23cd2a35fooslz99pb3p4so7amh7';

            // Initialize CURL:
            $ch = curl_init('https://metals-api.com/api/' . $endpoint . '?access_key=' . $access_key . '');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Store the data:
            $response = curl_exec($ch);
            curl_close($ch);

            // Decode JSON response:
            $data = json_decode($response, true);

            // Access the exchange rate values, e.g. GBP:
            $usd = $data['rates']['USD'];
            $xau = $data['rates']['XAU'];
            $gram = 0.0352733686;
            $usd_per_gram = $gram / $xau;


            $data = [
                'id' => 1,
                'usd' => $usd,
                'xau' => $xau,
                'usd_per_gram' => $usd_per_gram,
                'tanggal' => date("Y-m-d")
            ];

            $this->db->insert('emas', $data);
            return $usd_per_gram;
        }

        return $isDataExist['usd_per_gram'];
    }

    function usdToIdr()
    {

        $curl = curl_init('https://free.currconv.com/api/v7/convert?q=USD_IDR&compact=ultra&apiKey=c35c4fca0b3471f28f05');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($response, true);

        return $data['USD_IDR'];
    }
}
