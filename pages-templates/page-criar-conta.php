<?php
    /*
        Template Name: Criar conta
    */
?>
<!DOCTYPE html>
<head>
    <html lang="pt-br">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri() . '/pages-templates/criar-conta/style.css' ?>">
</head>
<body>
    <main class="cc-container">
        <div class="sidebar-criar-conta">
            <button onclick="preview_menu_info_cadastro()">
            <i class="material-icons">arrow_upward</i>
            </button><!-- Botão de voltar menu -->
            <p>
                Criar conta
            </p><!-- Mudança de título pelo JS -->
            <button onclick="next_menu_info_cadastro()">
            <i class="material-icons">arrow_downward</i>
            </button><!-- Botão de próximo menu -->
        </div>
        <div class="container-inputs">
            <div id="user-info-inputs" class="child-main-content">
                <div>
                    <h2>
                        Informações pessoais:
                    </h2>
                </div>
                    <div class="cc-centralizar">
                        <label for="cc-nome">Nome</label>
                        <input type="text" name="input-cc-nome" id="cc-nome"  required>
                        <label for="cc-snome">Sobrenome</label>
                        <input type="text" name="input-cc-snome" id="cc-snome" required >
                        <label for="cc-email">E-mail</label>
                        <input type="email" name="input-cc-email" id="cc-email" required>
                        <label for="cc-pessoa">Pessoa (Física ou Jurídica)</label>
                        <select name="select-cc-pessoa" id="cc-pessoa" required>
                            <option value="juridica">Pessoa Jurídica</option>
                            <option value="fisica">Pessoa Física</option>
                            </select><br>
                        <label for="cc-cpf">CPF/CNPJ:</label>
                        <input type="text" name="input-cc-cpf" id="cc-cpf"  required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                        <label for="cc-senha">Senha</label>
                        <input type="password" name="input-cc-senha" id="cc-senha" required>
                        <label for="cc-confirmarsenha">Confirmar Senha</label>
                        <input type="password" name="input-cc-confirmarsenha" id="cc-confirmarsenha" required >
                    </div>                    
            </div><!-- Container input informações usuários -->
            <div id="endereco-info-user" class="child-main-content">
                <h2>
                    Informações de endereço:
                </h2>
                <label for="cc-cep">CEP</label>
                <input type="text" name="input-cc-cep" id="cc-cep" required>
                <label for="cc-rua">Rua</label>
                <input type="text" name="input-cc-rua" id="cc-rua" required>
                <label for="cc-numero">Número</label>
                <input type="number" name="input-cc-numero" id="cc-numero" required>
                <label for="cc-complemento">Complemento</label>
                <input type="text" name="input-cc-complemento" id="cc-complemento" required>
                <label for="cc-bairro">Bairro</label>
                <input type="text" name="input-cc-bairro" id="cc-bairro" required>
                <label for="cc-cidade">Cidade</label>
                <input type="text" name="input-cc-cidade" id="cc-cidade" required>
                <label for="cc-estado">Estado</label>
                <input type="text" name="input-cc-estado" id="cc-estado" required>
            </div>
            <div class="child-main-content" id="assinatura-info-user">
                <h2>
                    Informações da assinatura
                </h2>
                <div class="info-assinatura">
                    <div class="container-info-assinatura">
                        <label>Tipo de assinatura: </label><br>
                        <form>
                            <select required>
                                <option value="" disabled selected>Selecione uma assinatura...</option>
                                <option value="1">1 Conta</option>
                                <option value="2">2 Contas</option>
                                <option value="3">3 Contas</option>
                            </select>
                        </form>
                        <label>Duração da assinatura: </label><br>
                        <form>
                            <select required>
                                <option value="" disabled selected>Selecione um tempo de duração...</option>
                                <option value="mensal">Anual</option>
                                <option value="trimestral">Trimestral</option>
                                <option value="anual">Anual</option>
                            </select>
                        </form>                                                                
                      
                    </div>
                    <div>
                    <aside>-fotos-</aside>

                       <h2 class="h2-assinatura">Preço: <span>SPAN</span></h2>
                       <h2 class="h2-assinatura">Total: <span>SPAN</span></h2>
                        <h2 class="h2-assinatura">Validade:<span></span>SPAN</span></h2>
                    </div>
                </div>
            </div>
            <div class="child-main-content" id="pagamento-info-user">
                <h2>
                    Pagamento
                </h2>   
                <button onclick="testar_criar_conta()">
                    TESTE criação da conta
                </button>             
            </div>
        </div> <!-- Conteiner inputs -->
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script id="script-criar-conta" type="text/javascript" src="<?php echo  get_theme_file_uri() . '/pages-templates/criar-conta/script.js' ?>"></script>
</body>