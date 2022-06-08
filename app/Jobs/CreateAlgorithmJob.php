<?php

namespace App\Jobs;

use App\Http\Services\AlgorithmService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreatePostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected AlgorithmService $service;
    protected array $data;


    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function handle(AlgorithmService $service)
    {
        $service->create($this->data);
    }
}