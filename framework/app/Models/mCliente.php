<?php
namespace App\Models;
use CodeIgniter\Model;
class mCliente extends Model{

	protected $table = 'cliente';
	protected $primaryKey = 'id_cliente';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['usuario', 'password','nombre', 'apellido','edad'];

}
?>