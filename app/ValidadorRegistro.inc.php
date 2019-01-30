<?php

class ValidadorRegistro {

    private $nombre;
    private $email;
    private $error_nombre;
    private $error_email;
    private $error_clave1;
    private $error_clave2;

    public function __construct($nombre, $email, $clave1, $clave2) {
        $this->nombre = "";
        $this->email = "";

        $this->error_nombre = $this->validar_nombre($nombre);
        $this->error_email = $this->validar_email($email);
        $this->error_clave1 = $this->validar_clave1($clave1);
        $this->error_clave2 = $this->validar_clave2($clave2);
    }

    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

    private function validar_nombre($nombre) {
        if (!$this->variable_inciada($nombre)) {
            return "Debes de escribir un nombre de Usuario.";
        } else {
            $this->nombre = $nombre;
        }
        if (strlen($nombre) < 6) {
            return"El nombre debe de tener al menos 6 caracteres.";
        }
        if (strlen($nombre) > 24) {
            return"El nombre no puede ocupar mas de 24 caracteres.";
        }
        return"";
    }

    private function validar_email($email) {
        if (!$this->variable_iniciada($email)) {
            return "Debe de escribir un Email";
        } else {
            $this->email = $email;
        }
        return "";
    }

    private function validar_clave1($clave1) {
        if (!$this->variable_iniciada($clave1)) {
            return "Debes escribir una contraseña";
        } else {
            $this->clave1 = $clave1;
        }
        return "";
    }

    private function validar_clave2($clave1, $clave2) {
        if (!$this->variable_iniciada($clave1)) {
            return "Debes de rellenar el campo contraseña";
        }
        if (!$this->variable_iniciada($clave2)) {
            return "Debes repetir tu contraseña";
        } else {
            $this->clave2 = $clave2;
        }
        if ($clave1 !== $clave2) {
            return"Ambas contraseñas debe de coincidir";
        }
        return "";
    }

    public function obtener_nombre() {
        return $this->nombre;
    }

    public function obtener_email() {
        return $this->email;
    }

    public function obtener_error_nombre() {
        return $this->error_nombre;
    }

    public function obtener_error_email() {
        return $this->error_email;
    }

    public function obtener_error_clave1() {
        return $this->error_clave1;
    }

    public function obtener_error_clave2() {
        return $this->error_clave2;
    }

}
