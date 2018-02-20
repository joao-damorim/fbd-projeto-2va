<div class="container theme-showcase" role="main">

    <div class="page-header">
        <h1>Cadastrar Funcionário</h1>
    </div>
  
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="processa/proc_cad_funcionario.php">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">CPF</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="CPF" placeholder="Ex: 12345678912">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Nome" placeholder="Nome do Funcionário">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Telefone" placeholder="Ex: 81988884444">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Salario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Salario" placeholder="Ex: 10000">
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Tipo" placeholder="Ex: 2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">CodDept</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="CodDept" placeholder="Código do Departamento">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
