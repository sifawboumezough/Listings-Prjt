<?php

namespace App\Models;



class Listing {
    public static function all() {
        return[
            [
                'id' => 1,
                'title' => 'Listing one',
                'Description' => '
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum l
                uctus nisi, vel iaculis risus ullamcorper a. Aliquam condimentum blandit scelerisque.
                Etiam mollis justo imperdiet tortor fringilla sagittis. Quisque placerat bibendum pulvinar. Proin porttitor, erat vel lacinia blandit, nibh ligula pharetra enim, at placerat ligula nisl quis enim. Donec turpis eros, facilisis non mauris eget, auctor mattis metus. Phasellus mattis sapien accumsan
                '
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'Description' => '
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum l
                uctus nisi, vel iaculis risus ullamcorper a. Aliquam condimentum blandit scelerisque.
                Etiam mollis justo imperdiet tortor fringilla sagittis. Quisque placerat bibendum pulvinar. Proin porttitor, erat vel lacinia blandit, nibh ligula pharetra enim, at placerat ligula nisl quis enim. Donec turpis eros, facilisis non mauris eget, auctor mattis metus. Phasellus mattis sapien accumsan
                '
            ]
     ];
 }

    public static function find($id) {
        $listings = self::all();
        foreach ($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
}
}
