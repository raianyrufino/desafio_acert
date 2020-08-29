<?php

namespace App\Models\Services;
use App\Exceptions\BusinessException;

class UserService
{
    public function get($name)
    {   
        $url = config('github.api_url').'users/'.$name;

        $ch = curl_init($url);
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["User-Agent: request"]);
        
        $user = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            
        if ($code == 200) {
            return json_decode($user);
        } else {
            throw new BusinessException("User not found!", 404);
        } 

        curl_close($ch);
    }
}
