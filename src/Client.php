<?php
namespace Mydev\Airlines;

class Client
{
    protected $session = null;

    public function get($url)
    {
        $this->session = curl_init();

        $options = [
            CURLOPT_URL => $url,
        ];

        curl_setopt_array($this->session, $options);

        return curl_exec($this->session);
    }

    public function __destruct()
    {
        curl_close($this->session);
        $this->session = null;
    }
}