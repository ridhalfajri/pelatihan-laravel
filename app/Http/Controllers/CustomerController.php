<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function insert()
    {
        $result = DB::insert('INSERT INTO customer (name,created_at,updated_at) VALUES (?,?,?)', [fake()->name(), date('Y-m-d H:i:s'), date('Y-m-d H:i:s')]);
        return $result;
    }
    public function select_all()
    {
        $result = DB::select('SELECT * FROM customer');
        return $result;
    }
    public function select_by_id($id)
    {
        $result = DB::select('SELECT * FROM customer WHERE id = ?',[$id]);
        return $result;
    }
    public function update($id)
    {
        $result = DB::update('UPDATE customer SET name = ?, updated_at = ? WHERE id = ?',[fake()->name(),date('Y-m-d H:i:s'),$id]);
        return $result;
    }
    public function delete($id)
    {
        $result = DB::delete('DELETE FROM customer WHERE id=?',[$id]);
        return $result;
    }
}
