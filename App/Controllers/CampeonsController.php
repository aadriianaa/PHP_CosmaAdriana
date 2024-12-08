<?php
namespace App\Controllers;

use App\Models\Campeo;

class CampeonsController {

    public function index() {
        $campeones = Campeo::all();
        require '../resources/views/campeons/index.blade.php';
    }

    public function create() {
        require '../resources/views/campeons/create.blade.php';
    }

    public function store() {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $releaseDate = $_POST['releaseDate'];

        $nuevoCampeo = new Campeo([
            'name' => $name,
            'role' => $role,
            'releaseDate' => $releaseDate,
        ]);
        $nuevoCampeo->save();
        header('Location: /campeons');
    }

    public function edit($id) {
        $campeo = (new Campeo)->find($id);
        if (!$campeo) {
            header('Location: /campeons');
            exit();
        }
        require '../resources/views/campeons/edit.blade.php';
    }

    public function update($id) {
        $campeo = (new Campeo)->find($id);
        if (!$campeo) {
            header('Location: /campeons');
            exit();
        }
        $campeo->name = $_POST['name'];
        $campeo->role = $_POST['role'];
        $campeo->releaseDate = $_POST['releaseDate'];
        $campeo->save();
        header('Location: /campeons');
    }

    public function delete($id) {
        if ($id === null) {
            header('Location: /campeons');
            exit();
        }
        $campeo = (new Campeo)->find($id);
        require '../resources/views/campeons/delete.blade.php';
    }

    public function destroy($id) {
        (new Campeo)->delete($id);
        header('Location: /campeons');
    }

    public function confirmDelete($id) {
        $campeo = (new Campeo)->find($id);
        require '../resources/views/campeons/delete.blade.php';
    }
}
