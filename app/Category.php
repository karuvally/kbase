<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    /**
     *
     * Find level of category from parent
     *
     * @param int $level
     * @return int 
     *
     */
    public function levelFromParent($level = 0)
    {
        if ($this->parent_id == null) {
            return $level;
        } else {
            $category = Category::find($this->parent_id);
            return $category->levelFromParent($level + 1);
        }
    }

    /**
     *
     * Fetch all sub category id's
     *
     * @param int $category_id
     * @return array 
     *
     */
    protected function getAllSubCategories($category_id)
    {
        $return = array();
        $sub_category_ids = Category::where('parent_id', '=', $category_id)->pluck('id');
        if (count($sub_category_ids)) {
            foreach ($sub_category_ids as $sub_category) {
                $return_sub_category = $this->getAllSubCategories($sub_category);
                $return = array_merge($return, $return_sub_category);
            }
        }
        $return = array_merge($return, array((int) $category_id));
        return $return;
    }

    /**
     *
     * Fetch categories under given category in hierarchical order
     * 
     * Returns all sub categories in hierarchical order, with levels separaed by "--"
     *
     * @param int $category_id
     * @param int $level
     * @return array
     *
     */
    protected function getOrderedCategories($category_id, $level = 0)
    {
        $return = array();
        $parent_category = Category::find($category_id);
        if ($parent_category) {
            $group_category_array = array('id' => $parent_category->id, 'name' => str_repeat("-- ", $level) . $parent_category->name);
            array_push($return, $group_category_array);
            $sub_category_ids = Category::where('parent_id', '=', $category_id)->pluck('id');
            if (count($sub_category_ids)) {
                foreach ($sub_category_ids as $sub_category) {
                    $return_sub_category = $this->getOrderedCategories($sub_category, $level + 1);
                    $return = array_merge($return, $return_sub_category);
                }
            }
            return $return;
        }
    }

    /**
     *
     * Fetch all categories in hierarchical order
     *
     * @param int $category_id
     * @param int $level
     * @return array
     *
     */
    protected function getAllCategoriesOrdered()
    {
        $parent_category_ids = Category::whereNull('parent_id')->pluck('id');
        $return = array();
        foreach ($parent_category_ids as $category) {
            $return_category = $this->getOrderedCategories($category);
            $return = array_merge($return, $return_category);
        }
        return $return;
    }
}
