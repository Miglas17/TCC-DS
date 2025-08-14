<!-- Form para desmonstração -->
<form method="post" action="processa_solicitacao.php"> 
    <h3>Solicitar colaborador extra</h3>
    Unidade: <input type="text" name="unidade" required><br>
    Tempo necessário: <input type="text" name="tempo" placeholder="Ex: 2 dias" required><br>
    Motivo: <textarea name="motivo" required></textarea><br>
    <input type="hidden" name="id_supervisor" value="123"> <!-- ID do supervisor (viria da sessão) -->
    <button type="submit">Enviar pedido</button>
</form>
