<?php

class AccountController
{
    public function __construct(private AccountGateway $gateway) 
    {}

    public function processRequest(string $method, ?string $id): void {
        // var_dump($method, $id);

        if ($id) {
            $this->processsRescourceRequest($method, $id);
        } else {
            $this->processCollectionRequest($method);
        }
    }

    private function processsRescourceRequest(string  $method, string $id): void {

    }

    private function processCollectionRequest(string $method): void {
        switch ($method) {
            case "GET":
                echo json_encode($this->gateway->getAll());
                break;
        }
    }
}
?>
