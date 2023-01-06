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
                                Quer <a>vender no Mercado Livre</a> e não sabe por onde <a>começar</a>
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
                                <a>Já vende</a> no Mercado Livre e quer alcançar o tão sonhado <a>Platinum</a>
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
                                Já tem <a>loja física</a> e quer trazer para o <a>online</a>
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
                                Quer entrar para a <a>comunidade e-com</a> e ter todos os <a>benefícios</a>
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
                        01 - Seu futuro começa aqui
                    </h3>
                    <div id="div-acordeon-modulo1">
                        Aqui eu vou te dar uma visão do que é um mercado de vendas online e a grande oportunidade que ele vai trazer para sua vida financeira e profissional
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo2' )">
                    <h3>
                        02 - Contrua um negócio sólido
                    </h3>
                    <div id="div-acordeon-modulo2">
                        Nesse módulo, eu vou te mostrar o que você deve fazer e o que você não deve fazer para não construir um castelo de areia.
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo3' )">
                    <h3>
                        03 - Finanças para E-commerce
                    </h3>
                    <div id="div-acordeon-modulo3">
                        Neste módulo, eu vou te falar sobre quais as melhores formas de você comprar produtos e também sobre o que é o seu dinheiro e o que é o dinheiro da empresa
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo4' )">
                    <h3>
                        04 - Primeiros passos no Mercado Livre
                    </h3>
                    <div id="div-acordeon-modulo4">
                        Nesse módulo eu vou te ensinar como fazer as primeiras configurações de forma correta para você não ter nenhum problema futuro, vou te mostrar como funciona a plataforma do mercado livre, e o que você precisa para começar
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo5' )">
                    <h3>
                        05 - Nichos e produtos
                    </h3>
                    <div id="div-acordeon-modulo5">
                        Nesse módulo, eu vou te ensinar a achar o ouro do negócio, vou quebrar os paradigmas sobre nichos e te ensinar a encontrar os produtos para você faturar alto.
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo6' )">
                    <h3>
                        06 - Fornecedores
                    </h3>
                    <div id="div-acordeon-modulo6">
                        Nesse módulo, vou te ensinar a encontrar qualquer fornecedor do Brasil e também ensinar como fazer a negociar com qualquer forncedor de uma forma que você sempre consiga comprar os produtos nas melhores condições
                    </div>
                </div>
                <div class="div-acordeon" onclick="show_selected_accordeon( 'div-acordeon-modulo7' )">
                    <h3>
                        07 - Precificação de produtos
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, eu vou te ensinar a analisar e precificar os produtos da maneira correta para que você tenha lucro e não prejuízo. T
                    </div>
                    <h3>
                        08 - Fotos para anúncios
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, eu vou te ensinar como fazer seu anúncio vender muito mais com fotos que convertem de maneira simples e rápidas.
                    </div>
                    <h3>
                        09 - Anúncios Spartanos
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, você vai aprender como faz um anúncio muito poderoso que irá aumentar a visibilidade em pelo menos 10x mais. Você vai aprender cada passo, de forma detalhada, para dominar as primeiras páginas.
                    </div>
                    <h3>
                        10 - Modalidades de envios
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, você vai aprender quais as características das modalidades de envio e qual a melhor estratégia para alavancar o posicionamento dos seus anúncios usando a logística de entrega do Mercado Livre.
                    </div>
                    <h3>
                        11 - 10 Primeiras vendas
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, você vai aprender 2 estratégias para quebrar a barreira das 10 primeiras vendas e ativar sua reputação de forma rápida.
                    </div>
                    <h3>
                        12 - Vendi e agora?
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, vou te ensinar o passo a passo para você fazer o envio da sua venda com sucesso.
                    </div>
                    <h3>
                        13 - Validando produtos
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, vou te ensinar sobre o que é um produto validado e a hora que você deve fazer profundidade de estoque para não correr o risco de acabar produto e você ter que pausar o anúncio.
                    </div>
                    <h3>
                        14 - Multiplicando anúncios
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, vou te ensinar a estratégia de milhões,  aqui está o caminho do seu primeiro milhão faturado.
                    </div>
                    <h3>
                        15 - Posicionando anúncios na primeira página
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, vou te ensinar 3 estratégias poderosas para você alcançar o sonho de todos os vendedores no Mercado Livre: <strong>posicionar produtos na primeira página</strong>
                    </div>
                    <h3>
                        16 - Mercado ADS
                    </h3>
                    <div id="div-acordeon-modulo7">
                        Nesse módulo, vou te ensinar as melhores estratégias para você dominar a ferramenta do Mercado ADS e dobrar seu faturamento.
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
                    <h3>Google Trends</h3>
                    <a>Ferramenta Google</a>
                    <p>Aqui você vai aprender como encontrar os termos mais buscados do seu produto pelos clientes na internet</p>
                </div>
                <div>
                    <span>BÔNUS</span>
                    <h3>Ubersuggest</h3>
                    <a>Ferramenta</a>
                    <p>Aqui você vai aprender a encontrar as melhores palavras chaves para você poder usar no título do anúncio</p>
                </div>
                <div>
                    <span>BÔNUS</span>
                    <h3>Meli PRO</h3>
                    <a>Ferramenta</a>
                    <p>Aqui você vai aprender a analisar informações valiosas dos seus concorrentes e também análise de mercado</p>
                </div>
                <div>
                    <span>BÔNUS</span>
                    <h3>Nubmetrics</h3>
                    <a>Ferramenta</a>
                    <p>Aqui você vai aprender a analisar produtos em alta, anúncios em alta, ranqueamento de anúncios e muito mais</p>
                </div>
                <div>
                    <span>BÔNUS</span>
                    <h3>Tiny</h3>
                    <a>ERP</a>
                    <p>Aqui você vai aprender a aintegrar os seus anúncios nos principais marketplaces de maneira automática, gerenciando de forma simples e muito lucrativa</p>
                </div>
                <div>
                    <span>BÔNUS</span>
                    <h3>Contabilidade para E-commerce</h3>
                    <a>com especialista</a>
                    <p>Aqui você vai aprender os princípios de contabilidade fiscal e terá acesso a uma contabilidade especial para E-commerce com benefícios exclusivos</p>
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
                <span>DE <a>R$ 997,00</a> POR APENAS</span><br>
                <div>
                    <span>11x de R$ <a>45,18</a></span>
                    <p>
                        À vista por R$ 497,00
                    </p>
                </div>
                <button onclick="ir_para_hotmart()">QUERO VENDER ONLINE</button>
                <img decoding="async" width="90%" height="32" src="https://wpfast.com.br/wp-content/uploads/2022/08/fda-pagamentos.svg" style="margin: 2% 5%">
            </div>
            <div class="sobre-mim">
                    
            </div>
        </main>
        <script id="script-lp" type="text/javascript" src="<?php echo get_theme_file_uri() . '/pages-templates/treinamento/script.js' ?>"></script>
    </body>
</html>