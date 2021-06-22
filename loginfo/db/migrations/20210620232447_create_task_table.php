<?php

use Phinx\Migration\AbstractMigration;

class CreateTaskTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(){

        $comprador = $this->table('comprador');
        $comprador->addColumn('Nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('Endereço', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('Fone', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('E-mail', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('Cpf', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $itens = $this->table('itens');
        $itens->addColumn('Nome do Iten', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('Unidade de Medida', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Quantidade', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Preço', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Tipo', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('Data de Validade', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Data de Fabricação', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $vendas = $this->table('vendas');
        $vendas->addColumn('Nome do Iten', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('Quantidade', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Vendedor', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('Data da Venda', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $vendedor = $this->table('vendedor');
        $vendedor->addColumn('Nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('Matricula', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('Email', 'string',[
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->create();
    }   

    public function down()
    {
    $this->table('comprador')->drop()->save();
    $this->table('itens')->drop()->save();
    $this->table('vendas')->drop()->save();
    $this->table('vendedor')->drop()->save();
    }   
}
