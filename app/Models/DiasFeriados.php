<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiasFeriados extends Model {

	protected $table = 'dnm_catalogos.cat_dias_feriados';
    protected $primaryKey = 'idDia';
    protected $connection = 'mysql';
    const CREATED_AT = 'fechaCreacion';
	const UPDATED_AT = 'fechaModificacion';

}
