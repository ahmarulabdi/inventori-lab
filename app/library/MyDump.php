<?php
use Phalcon\Debug\Dump as Dump;

class MyDump extends Dump{
    public function variable($variable, $name = null)
    {
        $format = strtr("<pre style=':style'>:output</pre>", [
            ":style"=> $this->getStyle("pre"),
            ":output"=> $this->output($variable, $name)
        ]);;
        return $format ;
    }
    public function dd($variable){
        dd($variable);
    }
    public function get($variable, $name){
        echo $this->variable($variable, $name);
        $this->dd($variable);
    }

}

?>
