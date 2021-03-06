<?php
namespace Curder\LaravelPackageDemo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MyModel
 * @property int id
 * @property string name
 *
 * @package \Curder\LaravelPackageDemo\Models
 */
class MyModel extends Model
{
    use HasFactory;

    public $guarded = [];

    public function getUpperCasedName(): string
    {
        return strtoupper($this->name);
    }
}
