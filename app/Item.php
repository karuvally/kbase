<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     *
     * Update stock for item in a camp, reducing entries
     *
     * @param int $camp_id
     * @param decimal $available
     * @param decimal $required
     * @return boolean
     *
     */
    protected function updateStock($camp_id, $availability = null, $requirement = null)
    {
        $stock = new Stock;
        $stock->camp_id = $camp_id;
        $stock->item_id = $this->id;
        $stock->availability = $availability;
        $stock->requirement = $requirement;

        $last_stock = Stock::where('camp_id', $camp_id)
            ->where('item_id', $this->id)
            ->last();
        if (!$availability) {
            $stock->availability = $last_stock->availability;
        } else if (!$requirement) {
            $stock->requirement = $last_stock->requirement;
        }

        if ($stock->save()) {
            return true;
        }
        return false;
    }
}
