<div id="dvCadastro">
    <h1>Cadastre-se grátis</h1>
    <br />
    <div id="dvFormCadastro" class="formcontroles">
        <!--1º row-->
        <div class="linha">
            <div class="grid-50 mobile-grid-100 coluna">
                <label for="txtNome">Nome</label>
                <input type="text" id="txtNome" name="txtNome" placeholder="Nome completo" />
            </div>

            <div class="grid-50 mobile-grid-100 coluna">
                <label for="txtEmail">E-mail  <span class="spValidaEmail"></span></label>
                <input type="text" id="txtEmail" name="txtEmail" placeholder="email@dominio.com" />
            </div>
        </div>
        <div class="clear"></div>

        <!--2º row-->
        <div class="linha">
            <div class="grid-50 mobile-grid-100 coluna">
                <label for="txtUsuario">Usuário  <span id="spValidaUsuario"></span></label>
                <input type="text" id="txtUsuario" name="txtUsuario" placeholder="usuario" />
            </div>

            <div class="grid-50 mobile-grid-100 coluna">
                <label for="txtCpf">CPF <span id="spValidaCpf">&nbsp;</span></label>
                <input type="text" id="txtCpf" name="txtCpf" placeholder="000.000.000-90" />
            </div>
        </div>
        <div class="clear"></div>

        <!--3º row-->
        <div class="linha">
            <div class="grid-50 mobile-grid-100 coluna">
                <label for="txtSenha">Senha <span class="spValidaSenha"></span></label>
                <input type="password" id="txtSenha" name="txtSenha" placeholder="*********" />
            </div>

            <div class="grid-50 mobile-grid-100 coluna">
                <label for="txtSenha2">Confirmar senha <span class="spValidaSenha"></span></label>
                <input type="password" id="txtSenha2" name="txtSenha2" placeholder="*********" />
            </div>
        </div>
        <div class="clear"></div>

        <!--4º row-->
        <div class="linha">
            <div class="grid-50 mobile-grid-100 coluna">
                <label for="txtData">Data nascimento</label>
                <input type="text" id="txtData" name="txtData" placeholder="19/02/1997" />
            </div>

            <div class="grid-50 mobile-grid-100 coluna">
                <label for="txtSexo">Sexo</label>
                <select name="slSexo" id="slSexo">
                    <option value="m">Masculino</option>
                    <option value="f">Feminino</option>
                </select>
            </div>
        </div>
        <div class="clear"></div>

        <!--5º row-->
        <div class="linha">
            <div class="grid-100 coluna">
                <input type="submit" name="txtCadastrar" id="txtCadastrar" value="Cadastrar" class="btn-padrao" />
            </div>
        </div>
        <div class="clear"></div>

        <!--6º row-->
        <div class="linha">
            <div class="grid-100 coluna">
                <span id="spResultado"></span>
            </div>
        </div>
        <div class="clear"></div>

        <!--7º row-->
        <div class="linha">
            <div class="grid-100 coluna">
                <ul id="ulErros"></ul>
            </div>
        </div>
        <div class="clear"></div>

        <br />
    </div>
</div>
<script src="js/mask.js" type="text/javascript"></script>
<script>
    $('#txtCpf').mask('000.000.000-00'); //CPF
    $('#txtData').mask('00/00/0000');

    $("#txtSenha, #txtSenha2").keyup(function () {
        var resultadoValidacao = ValidarSenha(7);
        ExibeMensagens(resultadoValidacao);
    });

    $("#txtUsuario").keyup(function () {
        ValidaUsuario();
    });

    $("#txtCpf").keyup(function () {
        if (ValidaCPF($("#txtCpf").val())) {
            $("#spValidaCpf").css("color", "#39C462");
            $("#spValidaCpf").text("CPF válido");
        } else {
            $("#spValidaCpf").css("color", "#FF3730");
            $("#spValidaCpf").text("CPF inválido");
        }
    });
    function ValidarSenha(minLenght) {
        var senha1 = document.getElementById("txtSenha").value;
        var senha2 = document.getElementById("txtSenha2").value;
        var valido = false;
        if (senha1.length >= minLenght && senha2.length >= minLenght) {
            if (senha1 === senha2) {
                valido = true;
            }
        }

        return valido;
    }

    function ExibeMensagens(valido) {
        var spValidaSenha = document.getElementsByClassName("spValidaSenha");
        if (valido) {
            for (var i = 0; i < spValidaSenha.length; i++) {
                spValidaSenha[i].style.color = "#39C462";
                spValidaSenha[i].innerText = "Senhas corretas";
            }
        } else {
            for (var i = 0; i < spValidaSenha.length; i++) {
                spValidaSenha[i].style.color = "#FF3730";
                spValidaSenha[i].innerText = "Senhas inválidas";
            }
        }
    }
</script>