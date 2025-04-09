<?php
namespace Mydev\Airlines;

class Client
{
    protected $session = null;
<<<<<<< HEAD

    // get funciton
=======
    // function to get url
>>>>>>> 743cfb4eca7c63ab0ee08c51807872e3227ac189
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
