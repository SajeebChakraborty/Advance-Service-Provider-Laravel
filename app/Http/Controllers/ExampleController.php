<?php

namespace App\Http\Controllers;

use App\Services\ExampleService;

class ExampleController extends Controller
{
    protected $exampleService;

    public function __construct(ExampleService $exampleService)
    {
        $this->exampleService = $exampleService;
    }

    public function index()
    {
        $result = $this->exampleService->performTask();
        return $result;
    }
}
