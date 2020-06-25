<?php
    $hierarquia = array(
        array(
            'nome_cargo'=>'CEO',
            'subordinados'=>array(
                //Inicio: Diretor Comercial
                array(
                    'nome_cargo'=>'Diretor Comercial',
                     //Inicio: Diretor Comercial
                    'subordinados'=>array(
                        //Inicio: Gerente de Vendas
                        array('nome_cargo'=>'Gerente de vendas')
                    )
                    //Termino: Gerente de Vendas
                ),
                //Termino: Diretor Comercial
                //Inicio: Diretor Financeiro
                array(
                    'nome_cargo'=>'Diretor Financeiro',
                    'subordinados'=>array(
                        //Inicio: Gerente de Contas a Pagar
                        array(
                            'nome_cargo'=>'Gerente de Contas a Pagar',
                            'subordinados'=>array(
                                //Inicio: Supervisor de pagametnos
                                'nome_cargo'=>'Supervisor de Pagamentos'
                                //termino: Supervisor de pagamentos
                            )
                            ),
                        //Termino: Gerente de Contas a Pagar
                        //Inicio: Gerente de Compras
                        array(
                            'nome_cargo'=>'Gerente de Compras',
                            'subordinados'=>array(
                                //Inicio: Supervisor de suprimentos
                                array(
                                    'nome_cargo'=>'Supervisor de suprimentos'
                                )
                                //Termino: Supervisor de suprimentos
                            )
                        )
                        //Termino: Gerente de Compras
                    )
                )
                //Termino: Diretor Comercial
            )
        )
                                );
    
    function exibe($cargos){
        $html = '<ul>';
            foreach ($cargos as $cargo){
                $html.="<li>";
                $html.=$cargo['nome_cargo'];
                if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                    $html.= exibe($cargo['subordinados']);
                }
                $html."</li>";
            }
        $html .='</ul>';

        return $html;
    }
    echo exibe($hierarquia);

?>