<div class="container theme-showcase" role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="page-header">
        <h1>Cadastrar Funcionário</h1>
    </div>
    <div class="row espaco">
        <div class="pull-right">
            <a href='administrativo.php?link=2&id=<?php echo $resultado[' id ']; ?>'><button type='button' class='btn btn-sm btn-primary'>Listar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="processa/proc_cad_funcionario.php">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">CPF</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="CPF" placeholder="CPF">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Nome" placeholder="Nome">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Telefone" placeholder="Telefone">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Salario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Salario" placeholder="Salario">
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Tipo" placeholder="Tipo">
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
<!-- /container -->