<?php

class conta
{
  public $numero;
  public static $contador = 0; //atributo de classe

  //funcao que é chamada sempre que um aluno é criada (construtor)

  //se coloca um parametro dentro de um construtor esse parametro se torna 'obrigatorio', ele nao deixa de criar, ele apenas da um aviso
// so da erro se pedir o tipo, p pedir o tipo tem que add o declare la em cima

//private bloqueia a criacao de new conta fora da classe,p isso tem que criar ometodo
  private function __construct()
  {
    $contador = ++self::$contador;
    $this->numero = $contador;
    //echo "Conta $numero / Contador:" . conta::$contador . PHP_EOL;
  }

  //metodo tem que ser da classe (static) e nao do objeto
  static public function criaConta()
  {
    return new conta();
  }

}
