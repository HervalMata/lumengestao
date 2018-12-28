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

    protected $rules = [
        'name' => 'required|min:3|max:20|unique:units,name',
        'sector' => 'required|min:3|max:20',
        'state' => 'required|size:2',
        'city' => 'required|min:3|max:30',
    ];

    protected $messages = [
        'required' => ':attribute é obrigatório',
        'min' => ':attribute precisa de pelo menos :min caracteres',
        'max' => ':attribute não pode ter mais que :max caracteres',
        'size' => ':attribute tem que ter o tamanho de :size caracteres',
        'unique' => ':attribute não pode ser duplicado'
    ];

    public function __construct(Unit $model)
    {
        $this->model = $model;
    }
}