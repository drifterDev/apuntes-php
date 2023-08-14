<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

class Usuario
{
  protected $nombre;

  public function __construct($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getNombre()
  {
    return $this->nombre;
  }
}

class Autor extends Usuario
{
  public function crearArticulo($titulo, $contenido, $categoria)
  {
    return new Articulo($this, $titulo, $contenido, $categoria);
  }
}


class Articulo
{
  protected $autor;
  protected $titulo;
  protected $contenido;
  protected $categoria;

  public function __construct($autor, $titulo, $contenido, $categoria)
  {
    $this->autor = $autor;
    $this->titulo = $titulo;
    $this->contenido = $contenido;
    $this->categoria = $categoria;
  }

  public function getAutor()
  {
    return $this->autor;
  }

  public function getTitulo()
  {
    return $this->titulo;
  }

  public function getContenido()
  {
    return $this->contenido;
  }

  public function getCategoria()
  {
    return $this->categoria;
  }
}


class Categoria
{
  protected $nombre;

  public function __construct($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getNombre()
  {
    return $this->nombre;
  }
}
