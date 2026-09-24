<?php

namespace App\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;

class ViaCep extends Component
{
    public $cep;
    public $endereco;
    
    public function render()
    {
        (strlen($this->cep)==8) ? $this->buscarCep():'';
        return view('livewire.via-cep');
    }
    public function buscarCep(){
        $client = new Client();
        $url = 'https://viacep.com.br/ws/'.$this->cep.'/json/';
        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody(), true);
        $this->endereco = $data['logradouro'] . ' - ' . $data['bairro'] . ' - ' . $data['localidade'] . ' - ' . $data['uf'];
    }
}