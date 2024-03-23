<?php

class Carro {
    public $nome;
    protected $modelo;
    public $ano;
    private $velocidade;
    public $cor;

    public function __construct($nome, $modelo, $ano, $cor) {
        $this->nome = $nome;
        $this->setModelo($modelo);
        $this->ano = $ano;
        $this->setCor($cor);
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

    public function getCor(): string {
        return $this->cor;
    }

    public function setCor(string $cor): void {
        $this->cor = $cor;
    }

    private function gerarCorAleatoria(): string {
        $cores = array("Preto", "Branco", "Vermelho", "Azul", "Verde", "Amarelo");
        return $cores[array_rand($cores)];
    }
}

class Livro {
    public $titulo;
    protected $autor;
    public $paginas;
    private $emprestado;
    public $genero;

    public function __construct($titulo, $autor, $paginas, $genero) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->setGenero($genero);
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

    public function getPaginas(): int {
        return $this->paginas;
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

    public function getGenero(): string {
        return $this->genero;
    }

    public function setGenero(string $genero): void {
        $this->genero = $genero;
    }
}

// Testing
echo "Iniciando teste dos métodos do carro... \n";

$carro = new Carro("Fusca", "Fusca 1300", 1972, "Azul");
echo "Nome: {$carro->getNome()} \n";
echo "Modelo: {$carro->getModelo()} \n";
echo "Ano: {$carro->getAno()} \n";
echo "Cor: {$carro->getCor()} \n";
echo "Velocidade: {$carro->getVelocidade()} \n";
echo "Acelerando... \n";
$carro->acelerar();
echo "Velocidade: {$carro->getVelocidade()} \n";
$carro->frear();
echo "Freando... \n";
echo "Velocidade: {$carro->getVelocidade()} \n\n";


echo "Iniciando teste dos métodos do livro... \n";

$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1200, "Fantasia");
echo "Título: {$livro->getTitulo()} \n";
echo "Autor: {$livro->getAutor()} \n";
echo "Páginas: {$livro->getPaginas()} \n";
echo "Gênero: {$livro->getGenero()} \n";
echo "Emprestado: " . ($livro->isEmprestado() ? "Sim" : "Não") . "\n";
echo "Emprestando... \n";
$livro->emprestar();
echo "Emprestado: " . ($livro->isEmprestado() ? "Sim" : "Não") . "\n";
echo "Devolvendo... \n";
$livro->devolver();
echo "Emprestado: " . ($livro->isEmprestado() ? "Sim" : "Não") . "\n\n";
