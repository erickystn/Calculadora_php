<div class="base-somar">
    <h1>Divisão</h1>
    <form action="<?= URL_BASE ?>home/calcularDivisao" method="post">
        <div class="calculo">
            <div class="caixa1">
                <label>
                    <span>VALOR 1</span>
                    <input type="text" value="<?= $a ?? "" ?>" name="a" placeholder="0">
                </label>
                <h2>÷</h2>
                </label>
                <span>VALOR 2</span>
                <input type="text" value="<?= $b ?? "" ?>" name="b" placeholder="0">
                </label>
            </div>
            <div class="caixa2">
                <input type="submit" value=" = " class="btn dividir">
            </div>
        </div>
        <label>
            <span>resultado:</span>
            <h1 class="resultado"><?= $resultado ?? "00" ?></h1>
        </label>
    </form>
</div>