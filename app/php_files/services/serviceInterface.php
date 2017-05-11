<?php

/**
 * Created by IntelliJ IDEA.
 * User: Iwona
 * Date: 29.04.17
 * Time: 15:31
 */
interface serviceInterface
{
    public function getById($id);

    public function getAll();

    public function insert($obj);

    public function update($obj);

    public function remove($obj);

    public function __construct();
}