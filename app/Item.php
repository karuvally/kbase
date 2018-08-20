<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    public $timestamps = false;

    /**
     * Fetch latest stock for item in a camp
     *
     * @param int $camp_id
     * @return object
     */
    public function getStock($camp_id)
    {
        $last_stock = Stock::where('camp_id', $camp_id)
            ->where('item_id', $this->id)
            ->select('availability', 'requirement', 'updated_at')
            ->orderBy('updated_at', 'DESC')
            ->first();

        if ($last_stock) {
            return $last_stock;
        }
        return false;
    }


    /**
     * Update stock for item in a camp, reducing entries
     *
     * @param int $camp_id
     * @param decimal $available
     * @param decimal $required
     * @return boolean
     */
    public function updateStock($camp_id, $availability = null, $requirement = null)
    {
        $stock = new Stock;
        $stock->camp_id = $camp_id;
        $stock->item_id = $this->id;
        $stock->availability = $availability;
        $stock->requirement = $requirement;

        $last_stock = Stock::where('camp_id', $camp_id)
            ->where('item_id', $this->id)
            ->orderBy('updated_at', 'DESC')
            ->first();
        if ($last_stock) {
            if (!$availability) {
                $stock->availability = $last_stock->availability;
            } else if (!$requirement) {
                $stock->requirement = $last_stock->requirement;
            }
        } else {
            if (!$availability) {
                $stock->availability = 0;
            } else if (!$requirement) {
                $stock->requirement = 0;
            }
        }

        if ($stock->save()) {
            return true;
        }
        return false;
    }
}
