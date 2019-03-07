<?php

namespace Kairos\DB;

class Postgres implements Db
{
    public function connect() :string
    {
        return 'Nova conexao com postgres';
    }
}