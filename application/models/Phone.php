<?php

/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 26/08/2016
 * Time: 11:50
 */
class Phone extends Activerecord\Model {
    static $table_name = 'phone';
    static $has_many = array(
        array(
            'phone_to_person',
            'foreign_key' => 'phoneid'
        )
    );
}