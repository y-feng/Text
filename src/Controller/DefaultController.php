<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/22/022
 * Time: 20:00
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response('hello!');
    }
}