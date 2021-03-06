<?php
namespace Curder\LaravelPackageDemo\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 * Class MyController
 *
 * @package \Curder\LaravelPackageDemo\Http\Controllers
 */
class MyLaravelPackageDemoController extends Controller
{
    public function index() : string
    {
        return view('package-demo::sub-directory.index');
    }
}
