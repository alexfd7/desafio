<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Document extends Model
{

    protected $table = 'documents';
    protected $dates = ['created_at'];
    protected $fillable = [
            'access_key','xml_base64','xml_decode','num_nf','val_nf','key_nf'
    ];	

	public function getCreatedAtAttribute( $value ) {
	  return (new Carbon($value))->format('d/m/Y');
	}	


}
