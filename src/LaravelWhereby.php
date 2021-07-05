<?php

namespace Kraenkvisuell\LaravelWhereby;

use Illuminate\Support\Facades\Http;

class LaravelWhereby
{
    protected $entryPoint = 'https://api.whereby.dev/v1';

    protected function call(string $url, $verb = 'get', $data = [])
    {
        return Http::withToken(config('whereby.api_key'))
            ->{$verb}($this->entryPoint.'/'.$url, $data);
    }

    public function findMeeting($id, $withHostRoomUrl = true)
    {
        $data = $withHostRoomUrl ? ['fields' => 'hostRoomUrl'] : [];

        $response = $this->call('meetings/'.$id, 'get', $data);

        if ($response->failed()) {
            return;
        }

        return $response->collect();
    }

    public function createMeeting($data)
    {
        $response = $this->call('meetings', 'post', $data);

        return $response->throw()->json();
    }

    public function deleteMeeting($id)
    {
        $response = $this->call('meetings/'.$id, 'delete');

        return $response->throw()->json();
    }
}
