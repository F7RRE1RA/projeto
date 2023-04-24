<div class="container">
            <h2>criar nova enquete <a href="index.php" class="btn btn-secondary">voltar</a></h2>
            <?php 
            if (isset($_GET['qt-opcoes'])) {
                include "form-nova-enquete.php";
        
            } elseif (isset($GET['nome-enquete'])) {
                include "gravar-enquete.php";

            } else {
                include "form-pre-nova-enquete.php";
            }

            ?>
            </div>
        </body>
        </html>
         
        <form action="criar-enquete.php" method="get">
            <label for="qt-opcoes" class="form-label">qunatas opções de resposta sua enquete terá?</label>
            <input type="number" class="form-control" id="qt-opcoes" name="qt-opcoes" values="4">
            <br>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>

        <form action="criar-enquete.php" method="get">
            <label for="nome-enquete" class="form-label">qual o nome da enquete?</label>
            <input type="text" class="form-control" id="nome-enquete" name="nome-enquete" value="nova enquete">
            <label for="nome-enquete" class="form-label">quais as opçoes da enquete?</label>
            <?php 
            $qtOpcoes = $_GET['qt-opcoes'];
            for ($i=0; $i < $qtOpcoes; $i++){
                echo "<input type='text' class='form-control' name=opcao[]' values='Opção $i'><br>";

            }
                
            ?>
            <br>
            <button type="submit" class="btn btn-primary">submit</button>

        </form>