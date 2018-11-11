    <form action="valida-login.php" method="post">
    <fieldset>
    <legend>Dados de Login</legend>
    <label for="txUsuario">Usuário</label>
    <input type="text" name="usuario" id="txUsuario" maxlength="25"/>
    <label for="txSenha">Senha</label>
    <input type="password" name="senha" id="txSenha"/>
    <input type="submit" value="Entrar"/>
    </fieldset>
    </form>

    <form action="valida-login.php" method="post">
            <div class="form-group">
            <label for="txUsuario">E-mail</label>
            <input type="email" name = "usuario" class="form-control" id="txUsuario" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
            
        </div>
        <div class="form-group">
            <label for="txSenha">Senha</label>
            <input type="password" name="senha" class="form-control" id="txSenha" placeholder="Digite sua senha">
        </div>
        <hr>
        <button type="submit" class="btn btn-outline-dark" value="Entrar">Login</button>
        
    </form>
