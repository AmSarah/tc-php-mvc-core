<?php 

namespace thecodeholicsarah\phpmvc;
use thecodeholicsarah\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}