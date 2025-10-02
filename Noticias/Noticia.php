<?php

     class Noticia {
        private $id;
        private $titulo;
        private $autor;
        private $fecha;
        private $texto;

        public function __construct($id, $titulo, $autor, $fecha, $texto) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->fecha = $fecha;
            $this->texto = $texto;
        }

        public function getId() {
            return $this->id;
        }
        public function getTitulo() {
            return $this->titulo;
        }
        public function getAutor() {
            return $this->autor;
        }
        public function getFecha() {
            return $this->fecha;
        }
        public function gettexto() {
            return $this->texto;
        }

    }

?>