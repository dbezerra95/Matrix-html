<form>
    <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
    <fieldset>
        <legend><?php echo ($tarefa['id'] > 0) ? '&#9989 Atualizar Cadastro' : '&#128526 Cadastrar Armamaneto Bélico' ?></legend>
        <label>
            Armamento:
            <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>">
        </label>
        <label>
            Descrição (Opcional):
            <textarea name="descricao"><?php echo $tarefa['descricao']; ?></textarea>
        </label>
        <label>
            Prazo (Opcional):
            <input type="text" name="prazo" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>">
        </label>
        <fieldset>
            <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?>>Baixa
                <input type="radio" name="prioridade" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?>>Média
                <input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?>>Alta
            </label>
        </fieldset>
        <label>
            Armamento Registrado:
            <input type="checkbox" name="concluida" value="1" <?php echo ($tarefa['concluida'] == 1) ? 'checked' : ''; ?>>
        </label>
        <input type="submit" value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar' ?>">
    </fieldset>
</form>
