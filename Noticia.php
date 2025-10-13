<?php
class Noticia {
private $id;
private $titulo;
private $autor;
private $fecha;
private $noticia;
private $categoria;
private $imagen;


public function __construct($id, $titulo, $autor, $fecha, $noticia, $categoria, $imagen) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->fecha = $fecha;
    $this->noticia = $noticia;
    $this->categoria = $categoria;
    $this->imagen = $imagen;
}   

function get_id() { return $this->id; }
function get_titulo() { return $this->titulo; }
function get_autor() { return $this->autor; }
function get_fecha() { return $this->fecha; }
function getNoticia() { return $this->noticia; }
function get_categoria() { return $this->categoria; }

function get_imagen() { return $this->imagen;}

}

?>