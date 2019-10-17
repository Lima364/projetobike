<?php

// function listarServicos(){ foi movida pra baixo
    $servicos = [
        [
            "nome"=>"Desenvolvimento Web",
            "imagem"=>"Image/undraw_Ride_a_bicycle_2yok.svg",
            "descricao"=>"Sites dinamicos, otimizados para motores de busca"
        ],
        [
            "nome"=>"Marketing Digital",
            "imagem"=>"Image/undraw_activity_tracker_1l9o.svg",
            "descricao"=>"Sites dinamicos, otimizados para motores de busca"
        ],
        [
            "nome"=>"Consultoria UX",
            "imagem"=>"Image/undraw_biking_kc4f.svg",
            "descricao"=>"Sites dinamicos, otimizados para motores de busca"
        ],
        [
            "nome" => "Consultoria Agil",
            "imagem" => "imagens/undraw_report.svg",
            "descricao" => "Torne seu time de dev em pastelaria"
        ],
        [
            "nome" => "Consultoria Agil",
            "imagem" => "imagens/undraw_report.svg",
            "descricao" => "Torne seu time de dev em pastelaria"
        ],
        [
            "nome" => "Consultoria Agil",
            "imagem" => "imagens/undraw_report.svg",
            "descricao" => "Torne seu time de dev em pastelaria"
        ]
    ];

    function listarServicos()
    {
        global $servicos;
    
        foreach ($servicos as $index => $servico) {
            echo "<div class='col-md-4 mt-4'>
                <div class='card'>
                    <img class='card-img-top p-4' src='$servico[imagem]' alt='Imagem de capa do card'>
                    <div class='card-body'>
                        <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
                    </div>
                </div>
            </div>";
        }
    }
    
    function getNome($id)
{
    global $servicos;
    return $servicos[$id]["nome"];
}









        
    // ];
// foreach ($servicos as $index => $servico) {
    // echo "<h1>$servico[nome]</h1>";
    // echo "<img src='$servico[imagem]'>";
    // echo "<p>$servico[descricao]<p>";
    // echo "<div class='card'>
                // <img class='card-img-top' src='".$servico['imagem']."' alt='Desfrutando de tranquilidade em cima de uma bike'>
                
                            // <div class='card-body'>
                                // <p class='card-text text-center'>$servico['nome']</p>  
                                // <p class='card-text text-center'>$servico['descricao']</p>                  
                            // </div>
                        // </div>";   
    // }
    // var_dump($servico);

// }
// listarServicos();


?>