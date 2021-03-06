<?php

namespace App;

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\Model;

class HistoryStock extends Model
{

    /**
     * The name table rewrite
     *
     * @var array
     */
    protected $table = 'historico_estoque';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message', 'produto_id', 'usuario_id'
    ];

    public static function clearHistoryStockByProductIdAndUserId($productId, $userId)
    {
        return HistoryStock::where('produto_id', $productId)->where('usuario_id', $userId)->delete();
    }

}
