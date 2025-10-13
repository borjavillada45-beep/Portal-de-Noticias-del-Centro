<?php
class Noticia {
    private $id;
    private $titulo;
    private $autor;
    private $fecha;
    private $noticia;
    private $categoria;
    private $imagen;

    public function __construct($id, $titulo, $autor, $fecha, $noticia, $categoria = '', $imagen = '')
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->fecha = $fecha;
        $this->noticia = $noticia;
        $this->categoria = $categoria;
        $this->imagen = $imagen ?: 'https://picsum.photos/400/250?random=' . $id;
    }

    // Getters
    public function get_id() { return $this->id; }
    public function get_titulo() { return $this->titulo; }
    public function get_autor() { return $this->autor; }
    public function get_fecha() { return $this->fecha; }
    public function getNoticia() { return $this->noticia; }
    public function get_categoria() { return $this->categoria; }
    public function get_imagen() { return $this->imagen; }
}
?>