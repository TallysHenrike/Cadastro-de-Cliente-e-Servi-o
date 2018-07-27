UPDATE `cadastroCliente`
SET `servico` = IF(
    (SELECT Count(`nome`) FROM `cadastroServico` WHERE `nome` = (SELECT `nome` FROM `cadastroServico` WHERE `id` = '1')) >= 5,
    'Serviço gratis',
    Concat('faltam ', 5 - (SELECT Count(`nome`) FROM `cadastroServico` WHERE `nome` = (SELECT `nome` FROM `cadastroServico` WHERE `id` = '1')), ' serviços')
) WHERE `nome` = (SELECT `nome` FROM `cadastroServico` WHERE `id` = '1');