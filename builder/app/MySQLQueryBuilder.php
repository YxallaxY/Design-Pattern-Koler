<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilder {
    private string $query = '';
    private string $select = '';
    private string $from = '';
    private string $where = '';

    public function select(string $fields): QueryBuilder {
        $this->select = "SELECT $fields";
        return $this;
    }

    public function from(string $table): QueryBuilder {
        $this->from = "FROM $table";
        return $this;
    }

    public function where(string $condition): QueryBuilder {
        $this->where = "WHERE $condition";
        return $this;
    }

    public function getQuery(): string {
        $this->query = "$this->select $this->from $this->where";
        return $this->query;
    }
}