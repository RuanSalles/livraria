<?php


class Livro {

    private $pdo;

	public function __construct() {
		$this->pdo = new PDO("mysql:dbname=livraria;host=localhost", "root", "senha");
	}

    protected $titulo;
    protected $qtpaginas;
    protected $autor;
    protected $editora;
    protected $categoria;
    protected $qtlivros;

    
    public function getAll() {
		$sql = "SELECT * FROM livro";
		$sql = $this->pdo->query($sql);

		if($sql->rowCount() > 0) {
			return $sql->fetchAll();
		} else {
			return array();
		}
	}

   
    public function listarLivro ($id) {
		$sql = 'SELECT * FROM livro WHERE id = :id';
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			return $sql->fetch();
		} else {
			return array ();
		}
	}


	public function excluir($id) {
		
        $sql = "DELETE FROM livro WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

    }



  
    public function editar($titulo, $qtpaginas, $autor, $editora, $categoria, $qtlivros, $id) {
			

			$sql = "UPDATE livro SET titulo = :titulo, qtpaginas =  :qtpaginas, autor = :autor, editora = :editora, categoria = :categoria, qtlivros = :qtlivros WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':titulo', $titulo);
			$sql->bindValue(':qtpaginas', $qtpaginas);
			$sql->bindValue(':autor', $autor);
            $sql->bindValue(':editora', $editora);
            $sql->bindValue(':categoria', $categoria);
            $sql->bindValue(':qtlivros', $qtlivros);
            $sql->bindValue(':id', $id);

			$sql->execute();
    }

        public function getInfo ($id) {
            $sql = 'SELECT * FROM livro WHERE id = :id';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
    
            if ($sql->rowCount() > 0) {
                return $sql->fetch();
            } else {
                return array ();
            }
        }
    
    
    public function adicionarLivro ($titulo, $qtpaginas, $autor, $editora, $categoria, $qtlivros) {
        
        $sql = 'INSERT INTO livro (titulo, qtpaginas, autor, editora, categoria, qtlivros) VALUES (:titulo, :qtpaginas, :autor, :editora, :categoria, :qtlivros)';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':qtpaginas', $qtpaginas);
        $sql->bindValue(':autor', $autor);
        $sql->bindValue(':editora', $editora);
        $sql->bindValue(':categoria', $categoria);
        $sql->bindValue(':qtlivros', $qtlivros);
        $sql->execute();
      
    
    }
        

    


    /**
     * Get the value of titulo
     *
     * @return  mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @param   mixed  $titulo  
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of qtpaginas
     *
     * @return  mixed
     */
    public function getQtpaginas()
    {
        return $this->qtpaginas;
    }

    /**
     * Set the value of qtpaginas
     *
     * @param   mixed  $qtpaginas  
     *
     * @return  self
     */
    public function setQtpaginas($qtpaginas)
    {
        $this->qtpaginas = $qtpaginas;

        return $this;
    }

    /**
     * Get the value of autor
     *
     * @return  mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @param   mixed  $autor  
     *
     * @return  self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of editora
     *
     * @return  mixed
     */
    public function getEditora()
    {
        return $this->editora;
    }

    /**
     * Set the value of editora
     *
     * @param   mixed  $editora  
     *
     * @return  self
     */
    public function setEditora($editora)
    {
        $this->editora = $editora;

        return $this;
    }

    /**
     * Get the value of categoria
     *
     * @return  mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @param   mixed  $categoria  
     *
     * @return  self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }


    /**
     * Get the value of qtlivros
     *
     * @return  mixed
     */
    public function getQtlivros()
    {
        return $this->qtlivros;
    }

    /**
     * Set the value of qtlivros
     *
     * @param   mixed  $qtlivros  
     *
     * @return  self
     */
    public function setQtlivros($qtlivros)
    {
        $this->qtlivros = $qtlivros;

        return $this;
    }

}