<?php

namespace App\Models\Services;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\Exceptions\BusinessException;

class UserService
{
    public function get($name)
    {   
        try {
            $client = new Client(['base_uri' => config('github.api_url')]);

            $response = $client->request('GET', 'users/' . $name);

            if ($response->getStatusCode() === 200) {
                
                $body = $response->getBody();

                $content = json_decode($body->getContents());
                
                return $content;
            }
        } catch (GuzzleException $e) {
            throw new BusinessException("User not found!", 404);
        }
    }
}
