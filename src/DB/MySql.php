<?php

namespace Kairos\DB;

class MySql implements Db
{
    public function connect() :string
    {
        return 'Nova conexao com banco de dados';
    }
}