<?php
<input type="hidden" name="action" value="create">
<div class="grid">
<label>
<span>Nome*</span>
<input type="text" name="nome" required>
</label>
<label>
<span>E-mail*</span>
<input type="email" name="email" required>
</label>
<label>
<span>Telefone</span>
<input type="text" name="telefone" placeholder="(00) 90000-0000">
</label>
</div>
<button type="submit">Salvar</button>
</form>
</section>


<section class="card">
<h2>Clientes (<?= count($clientes) ?>)</h2>
<div class="table-wrapper">
<table>
<thead>
<tr>
<th>#</th>
<th>Nome</th>
<th>E-mail</th>
<th>Telefone</th>
<th>Cadastro</th>
<th>Ações</th>
</tr>
</thead>
<tbody>
<?php foreach ($clientes as $c): ?>
<tr>
<td><?= $c['id'] ?></td>
<td><?= htmlspecialchars($c['nome']) ?></td>
<td><?= htmlspecialchars($c['email']) ?></td>
<td><?= htmlspecialchars($c['telefone'] ?? '') ?></td>
<td><?= date('d/m/Y H:i', strtotime($c['created_at'])) ?></td>
<td class="actions">
<a href="edit.php?id=<?= $c['id'] ?>">Editar</a>
<form action="delete.php" method="post" onsubmit="return confirm('Excluir este cliente?');">
<input type="hidden" name="id" value="<?= $c['id'] ?>">
<button type="submit">Excluir</button>
</form>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</section>
</div>
</body>
</html>