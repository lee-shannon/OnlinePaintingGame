<?php
namespace Model;
use \DB;

class ColorsDBModel extends \Model {

    public static function add_colors($name) {
        $colorID = ColorsDBModel::largest_id()[0]['colorID'];
        if ($colorID == NULL) {
            $colorID = 1;
        } else {
            $colorID = $colorID + 1;
        }
	DB::insert('colors')->set(array(
             'colorID' => $colorID,
             'name' => $name,
                 //'hex' => $hex
         ))->execute();
    }

    public static function delete_colors($color_ids) {
    DB::delete('colors')->where('colorID', 'in', $color_ids)->execute();
    }

    public static function update_colors() {
        return false;
    }

    public static function read_colors() {
        return DB::query('SELECT colorID, name as text FROM `colors`', DB::SELECT)->execute()->as_array();
    }

    public static function colors_count() {
        return DB::count_records('colors') ;
    }

    private static function largest_id() {
        return DB::query('SELECT MAX(colorID) as colorID FROM `colors`')->execute()->as_array();
    }
}
?>


