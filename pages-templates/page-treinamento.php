<?php
    /*
        Template Name: Treinamento
    */
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "canonical" href = "<?php echo get_option( 'siteurl' ) . '/treinamento' ?>" /> 
        <meta name = "description" content = "Treinamento para vender no mercado livre Shopee e marketplaces">
        <title>Comunidade Ecom</title>
        <meta name = "robôs" content = "Index, Follow">

        <link rel="stylesheet" href="<?php echo get_theme_file_uri() . '/pages-templates/treinamento/style.css' ?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <main>
            <div class="container-apresentacao">
                <h1>Comunidade Ecom</h1>
                <h2> mercado livre </h2>
                <h3>
                    O passo a passo para alcançar vendas diárias no Mercado Livre
                </h3>
                <h4>
                    e se tornar Mercado Platinum                
                </h4>
                <p>Comunidade Ecom - Aprenda a encontrar produtos de sucesso, como negociar com fornecedores, criar anúncios de alta conversão e faça vendas diárias</p>
                <button onclick="ir_para_hotmart()">QUERO VENDER ONLINE</button>
                <img decoding="async" width="90%" height="32" src="https://wpfast.com.br/wp-content/uploads/2022/08/fda-pagamentos.svg" style="margin: 2% 5%">                                
            </div>
            <div class='video-treinamento'>
                <div>
                    <h2>
                        Você se sente perdido sobre o mercado de vendas online?
                    </h2>
                    <p>
                        Assista essa pequena aula introdutória sobre a comunidade Ecom e veja como você pode começar a fazer vendas diárias com o método MV30
                    </p>
                    <iframe width="100%" height="200" style="margin:5% 0%" src="https://www.youtube.com/embed/GpG0qDSUDfI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5>Venha fazer parte dessa comunidade e viva do mercado digital <br> | <a>As vagas estão acabando!</a> | <br></h5>
                    <button onclick="ir_para_hotmart()">QUERO VENDER ONLINE</button>
                    <img decoding="async" width="90%" height="32" src="https://wpfast.com.br/wp-content/uploads/2022/08/fda-pagamentos.svg" style="margin: 2% 5%">
                </div>     
                <img src="<?php echo get_theme_file_uri() . '/pages-templates/treinamento/imgs/background.png' ?>" class="img-background">
            </div>
            <div class="treinamento-pessoa">
                <h2>
                    <span>
                        Comunidade Ecom é
                    </span>
                </h2>
                <h4>para todo mundo</h4>
                <aux style="display: flex;">
                    <div class="div-etapas-pessoa">
                        <div>
                            <h3>
                                01
                            </h3>
                            <p>
                                Quer <a>vender online</a> e ter um <a>negócio digital</a>
                            </p>
                        </div>
                        <img>                                        
                    </div>
                    <div class="div-etapas-pessoa">
                        <div>
                            <h3>
                                02
                            </h3>
                            <p>
                                <a>Já vende</a> no Mercado Livre e quer <a>acelerar seus resultados</a>
                            </p>
                        </div>   
                        <img>                     
                    </div>
                </aux>
                <aux style="display: flex;">
                    <div class="div-etapas-pessoa">
                        <div>
                            <h3>
                                03
                            </h3>
                            <p>
                                Já <a>conhece o mercado digital</a> e quer aprender a <a>vender mais</a>
                            </p>
                        </div>                        
                        <img> 
                    </div>
                    <div class="div-etapas-pessoa">
                        <div>
                            <h3>
                                04
                            </h3>
                            <p>
                                Quer conhecer o método <a>MV30</a> e fazer vendas diárias no ML
                            </p>
                        </div>                        
                        <img> 
                    </div>                
                </aux>  
                <button>QUERO VENDER ONLINE</button>
                <img decoding="async" width="90%" height="32" src="https://wpfast.com.br/wp-content/uploads/2022/08/fda-pagamentos.svg" style="margin: 2% 5%">                            
            </div>
            <div class="modulos-curso-accordeon">
                <h2>
                    <span>
                        Sobre o treinamento
                    </span>
                </h2>
                <h4>
                    Módulos
                </h4>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo1' )">
                    <h3>
                        01 - Primeiros passos
                    </h3>
                    <div id="div-acordeon-modulo1">
                        Esse módulo será dado os primeiros passos sobre criação de conta e boas vindas aos novos alunos
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo2' )">
                    <h3>
                        02 - Conhecendo a plataforma
                    </h3>
                    <div id="div-acordeon-modulo2">
                        Neste módulo você conhecerá a plataforma do Mercado Livre na visualização de vendedor. Aprenderá a emitir notas, verificar pedidos, gerenciar anúncios e muito mais
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo3' )">
                    <h3>
                        03 - Anúncios
                    </h3>
                    <div id="div-acordeon-modulo3">
                        Neste módulo você aprenderá a fazer um anúncio de primeira página com alta qualidade, boas imagens, boa descrição visando ao máximo as conversões.<br><br>Aprenda a produzir imagens de qualidade para os anúncios e como alcançar mais pessoas
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo4' )">
                    <h3>
                        04 - Fornecedores
                    </h3>
                    <div id="div-acordeon-modulo4">
                        Você aprenderá como encontrar bons fornecedores para os produtos que deseja e também a encontrar produtos quentes para fazer suas vendas
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo5' )">
                    <h3>
                        05 - Reputação
                    </h3>
                    <div id="div-acordeon-modulo5">
                        Você aprenderá a entender como funciona a reputação da sua conta e como manter bons números para ser recomendado a mais usuários
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo6' )">
                    <h3>
                        06 - Shopee
                    </h3>
                    <div id="div-acordeon-modulo6">
                        Nesse módulo bônus você aprenderá um pouco sobre o ecossistema da plataforma Shopee e como pode montar um negócio de sucesso nesta plataforma também
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo7' )">
                    <h3>
                        07 - Tiny
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Neste módulo bônus você aprenderá a usar um sistema de ERP muito útil para gerenciar seu negócio e conseguir faturar mais
                    </div>
                </div>
                <button onclick="ir_para_hotmart()">QUERO VENDER ONLINE</button>
                <img decoding="async" width="90%" height="32" src="https://wpfast.com.br/wp-content/uploads/2022/08/fda-pagamentos.svg" style="margin: 2% 5%">
            </div>
            <div class="vantagens-treinamento">
                <h2>
                    <span>
                        Comunidade Ecom
                    </span>
                </h2>
                <h4>Benefícios</h4>
                <div>
                    <div>
                        <h3>
                            <a>+80</a><br>Aulas
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a>+15</a><br>Módulos
                        </h3>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>
                            <a>+4</a><br>Grupos
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a>+200</a><br>Alunos
                        </h3>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>
                            <a>Novos</a><br>Conteúdos semanais
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a>+50</a><br>Fornecedores
                        </h3>
                    </div>
                </div>
                <button onclick="ir_para_hotmart()">QUERO VENDER ONLINE</button>
                <img decoding="async" width="90%" height="32" src="https://wpfast.com.br/wp-content/uploads/2022/08/fda-pagamentos.svg" style="margin: 2% 5%">
            </div>
            <div class="depoimentos-alunos">
                <h2>
                    <a>Nossos alunos</a> já estão vendo os resultados da nossa metodologia!
                </h2>
                <div>
                    [ prints ]
                </div>
            </div>
            <div class="bonus-treinamento">
                <h2>
                    <span>
                        E não para por aí
                    </span>
                </h2>
                <h4>Bônus</h4>
                <div>
                    <span>BÔNUS</span>
                    <h3>ERP</h3>
                    <a>Com Tiny</a>
                    <p>Integração com o ERP da Olist que gerencia seus produtos, anúncios, finanças e muito mais</p>
                </div>
                <div>
                    <span>BÔNUS</span>
                    <h3>Impostos</h3>
                    <a>com especialista</a>
                    <p>Com a ajuda de um especialista em tributação, fizemos uma aula especial para ensinar a vocês sobre impostos e sistema fiscal</p>
                </div>
                <div>
                    <span>BÔNUS</span>
                    <h3>FORNECEDORES</h3>
                    <a>verificados</a>
                    <p>Lista com fornecedores verificados e que vão fornecer os produtos que for vender</p>
                </div>
            </div>
            <div class="precos-treinamento">
                <h2>
                    <span>Quanto vale a sua</span>
                </h2>
                <h3>Liberdade Financeira?</h3>
                <p>
                    Ter a liberdade de escolher o que quer fazer e trabalhar para construir algo de valor para você mesmo é impagável! Vendendo nas plataformas digitais você pode trabalhar de qualquer lugar e viver apenas com a venda dos seus produtos
                </p>
                <span>DE <a>R$ 497,00</a> POR APENAS</span><br>
                <div>
                    <span>10x de R$ <a>24,75</a></span>
                    <p>
                        À vista por R$ 297,00
                    </p>
                </div>
                <button onclick="ir_para_hotmart()">QUERO VENDER ONLINE</button>
                <img decoding="async" width="90%" height="32" src="https://wpfast.com.br/wp-content/uploads/2022/08/fda-pagamentos.svg" style="margin: 2% 5%">
            </div>
        </main>
        <script id="script-lp" type="text/javascript" src="<?php echo get_theme_file_uri() . '/pages-templates/treinamento/script.js' ?>"></script>
    </body>
</html>