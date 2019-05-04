/** Amir Modification to get real client ip using X-Forward */
public function getIp(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HT$
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
                }
            }
        }
    }
}

    /**
     * Returns the client IP address.
     *
     * @return string
     */
    public function ip()
    {
//        return $this->getClientIp(); //original method
return $this->getIp(); // Amir new method
    }

    /**
     * Returns the client IP addresses.
     *
     * @return array
     */
