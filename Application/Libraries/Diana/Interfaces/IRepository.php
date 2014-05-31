<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 5/22/14
 * Time: 10:28 AM
 */

namespace Dandelion\Diana\Interfaces;


interface IRepository {
    public function GetAll();
    public function Get($predicate);
    public function Add($entity);
    public function Update($entity);
    public function Delete($entity);
}
