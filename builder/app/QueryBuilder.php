<?php

namespace App;

interface QueryBuilder {
    public function select(string $fields): QueryBuilder;
    public function from(string $table): QueryBuilder;
    public function where(string $condition): QueryBuilder;
    public function getQuery(): string;
}