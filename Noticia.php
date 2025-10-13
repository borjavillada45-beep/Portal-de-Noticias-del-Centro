<?php
class Noticia {
private $id;
private $titulo;
private $autor;
private $fecha;
private $noticia;


public function __construct($id, $titulo, $autor, $fecha, $noticia) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->fecha = $fecha;
    $this->noticia = $noticia;
}   

function get_id() { return $this->id; }
function get_titulo() { return $this->titulo; }
function get_autor() { return $this->autor; }
function get_fecha() { return $this->fecha; }
function getNoticia() { return $this->noticia; }
}

?>