<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Checklist</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Checklist</h2>
        <form action="save_checklist.php" method="post">
            
        <!-- ////////////////////////////////////////////////////////////////////////// -->
            <div class="row">
                
                <div class="col-4">
                    <label for="POSTO" class="form-label">POSTO:</label>
                    <input type="text" name="POSTO" class="form-control" >
                </div>
                <div class="col-4">
                    <label for="RE" class="form-label">RE:</label>
                    <input type="text" name="RE" class="form-control" >
                </div>
                <div class="col-4">
                    <label for="EMAIL_GEO" class="form-label">EMAIL GEO:</label>
                    <input type="text" name="EMAIL_GEO" class="form-control" >
                </div>
        
            </div>
        <!-- ////////////////////////////////////////////////////////////////////////// -->

        <!-- ////////////////////////////////////////////////////////////////////////// -->

        <div class="row">
            <div class="col-4">
                <label for="EMAIL_GEO" class="form-label">EMAIL GEO:</label>
                <input type="text" name="EMAIL_GEO" class="form-control" >
            </div>

            <div class="col-4">
                <label for="GEO_ENVIADAS" class="form-label">GEO ENVIADAS:</label>
                <input type="text" name="GEO_ENVIADAS" class="form-control" >
            </div>

            <div class="col-4">
                <label for="FAMILY_LINK" class="form-label">FAMILY LINK:</label>
                <input type="text" name="FAMILY_LINK" class="form-control" >
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////// -->
        
        <!-- ////////////////////////////////////////////////////////////////////////// -->

            
        <div class="row">
            <div class="col-4">
                <label for="TESTE_FAMILY_LINK" class="form-label">TESTE FAMILY LINK:</label>
                <input type="text" name="TESTE_FAMILY_LINK" class="form-control" >
            </div>

            <div class="col-4">
                <label for="BASTAO" class="form-label">BASTÃO:</label>
                <input type="text" name="BASTAO" class="form-control" >
            </div>

            <div class="col-4">
                <label for="RETIRADO_CHIP" class="form-label">RETIRADO CHIP:</label>
                <input type="text" name="RETIRADO_CHIP" class="form-control" >
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////// -->

        <!-- ////////////////////////////////////////////////////////////////////////// -->

        <div class="row">
            <div class="col-4">
                <label for="EMAIL_CASSIA" class="form-label">EMAIL CASSIA:</label>
                <input type="text" name="EMAIL_CASSIA" class="form-control" >
            </div>

            <div class="col-4">
                <label for="EMAIL_EBS" class="form-label">EMAIL EBS:</label>
                <input type="text" name="EMAIL_EBS" class="form-control" >
            </div>

            <div class="col-4">
                <label for="DESATIVACAO_EBS" class="form-label">DESATIVAÇÃO EBS:</label>
                <input type="text" name="DESATIVACAO_EBS" class="form-control" >
            </div>

        </div>
        <!-- ////////////////////////////////////////////////////////////////////////// -->

        <!-- ////////////////////////////////////////////////////////////////////////// -->
        <div class="row">
            <div class="col-4">
                <label for="ALTERACAO_SEGWARE" class="form-label">ALTERAÇÃO SEGWARE:</label>
                <input type="text" name="ALTERACAO_SEGWARE" class="form-control" >
            </div>

            <div class="col-4">
                <label for="CLIENTE_FINDME" class="form-label">CLIENTE FINDME:</label>
                <input type="text" name="CLIENTE_FINDME" class="form-control" >
            </div>

            <div class="col-4">
                <label for="LOCAL_FINDME" class="form-label">LOCAL FINDME:</label>
                <input type="text" name="LOCAL_FINDME" class="form-control" >
            </div>
        </div>

        <!-- ////////////////////////////////////////////////////////////////////////// -->

        <!-- ////////////////////////////////////////////////////////////////////////// -->

    <div class="row">
        <div class="col-4">
                <label for="ALTERACAO_SEGWARE" class="form-label">ALTERAÇÃO SEGWARE:</label>
                <input type="text" name="ALTERACAO_SEGWARE" class="form-control" >
            </div>

            <div class="col-4">
                <label for="CLIENTE_FINDME" class="form-label">CLIENTE FINDME:</label>
                <input type="text" name="CLIENTE_FINDME" class="form-control" >
            </div>

            <div class="col-4">
                <label for="LOCAL_FINDME" class="form-label">LOCAL FINDME:</label>
                <input type="text" name="LOCAL_FINDME" class="form-control" >
            </div>
    </div>
        <!-- ////////////////////////////////////////////////////////////////////////// -->

        <!-- ////////////////////////////////////////////////////////////////////////// -->
        <div class="row">
        <div class="col-4">
                <label for="USUARIO_FINDME" class="form-label">USUARIO FINDME:</label>
                <input type="text" name="USUARIO_FINDME" class="form-control" >
            </div>

            <div class="col-4">
                <label for="LOCALIZADOR_FINDME" class="form-label">LOCALIZADOR FINDME:</label>
                <input type="text" name="LOCALIZADOR_FINDME" class="form-control" >
            </div>

            <div class="col-4">
                <label for="TESTE_LOGIN" class="form-label">TESTE LOGIN:</label>
                <input type="text" name="TESTE_LOGIN" class="form-control" >
            </div>
        </div>    
        
        <div class="row">
            <div class="col-4">
                <label for="VERIFICAR_PONTOS_SIGMA" class="form-label">VERIFICAR PONTOS SIGMA:</label>
                <input type="text" name="VERIFICAR_PONTOS_SIGMA" class="form-control" >
            </div>

            <div class="col-4">
                <label for="PONTOS_CARREGARA" class="form-label">PONTOS CARREGARA:</label>
                <input type="text" name="PONTOS_CARREGARA" class="form-control" >
            </div>

            <div class="col-4">
                <label for="INT_POSTO_SIGMA" class="form-label">INT. POSTO SIGMA:</label>
                <input type="text" name="INT_POSTO_SIGMA" class="form-control" >
            </div>
        </div>

            
        <div class="row">
        <div class="col-4">
                <label for="INT_PONTO_SIGMA" class="form-label">INT. PONTO SIGMA:</label>
                <input type="text" name="INT_PONTO_SIGMA" class="form-control" >
            </div>

            <div class="col-4">
                <label for="TESTE_PANICO" class="form-label">TESTE PANICO:</label>
                <input type="text" name="TESTE_PANICO" class="form-control" >
            </div>

            <div class="col-4">
                <label for="SISTEMA" class="form-label">SISTEMA:</label>
                <input type="text" name="SISTEMA" class="form-control" >
            </div>
        </div>
            

            

            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
