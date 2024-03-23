<?php

class Carro {
    private $nome;
    private $modelo;
    private $ano;
    private $velocidade;

    public function __construct($nome, $modelo, $ano) {
        $this->nome = $nome;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidade = 0;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }

    public function getAno(): int {
        return $this->ano;
    }

    public function setAno(int $ano): void {
        $this->ano = $ano;
    }

    public function getVelocidade(): int {
        return $this->velocidade;
    }

    public function setVelocidade(int $velocidade): void {
        $this->velocidade = $velocidade;
    }

    public function acelerar(): void {
        $this->velocidade += 10;
    }

    public function frear(): void {
        $this->velocidade -= 10;
    }
}

class Livro {
    private $titulo;
    private $autor;
    private $paginas;
    private $emprestado;

    public function __construct($titulo, $autor, $paginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->emprestado = false;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    public function getPaginas(): int {
        return $this->paginas;
    }

    public function setPaginas(int $paginas): void {
        $this->paginas = $paginas;
    }

    public function isEmprestado(): bool {
        return $this->emprestado;
    }

    public function emprestar(): void {
        $this->emprestado = true;
    }

    public function devolver(): void {
        $this->emprestado = false;
    }
}

// Testing

$carro = new Carro("Toyota", "SW4", 2024);
echo "Carro: {$carro->getNome()} {$carro->getModelo()} ({$carro->getAno()})\n";
echo "Acelerando o carro...\n";
$carro->acelerar();
echo "Velocidade atual: {$carro->getVelocidade()} km/h\n";
echo "Freando o carro...\n";
$carro->frear();
echo "Velocidade atual após frear: {$carro->getVelocidade()} km/h\n\n";



$livro = new Livro("A República", "Platão", 344);
echo "Livro: {$livro->getTitulo()} - {$livro->getAutor()} ({$livro->getPaginas()} páginas)\n";
echo "Emprestando o livro...\n";
$livro->emprestar();
echo "O livro está emprestado? " . ($livro->isEmprestado() ? "Sim" : "Não") . "\n";
echo "Devolvendo o livro...\n";
$livro->devolver();
echo "O livro está emprestado? " . ($livro->isEmprestado() ? "Sim" : "Não") . "\n";
