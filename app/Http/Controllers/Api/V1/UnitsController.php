<?php
/**
 * Created by PhpStorm.
 * User: Herval
 * Date: 28/12/2018
 * Time: 10:42
 */

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\ApiControllerTrait;
use App\Models\Unit;
use Laravel\Lumen\Routing\Controller;

class UnitsController extends Controller
{
    use ApiControllerTrait;

    protected $model;

    public function __construct(Unit $model)
    {
        $this->model = $model;
    }
}