<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface; 


class SessionAdmin implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null){
        // code
        if(!session('type') == 'admin'){
            return redirect()->to(base_url('/')); // regresa al inicio si tratas de entrar por el navegador

        } 
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){
        // code
    }
}