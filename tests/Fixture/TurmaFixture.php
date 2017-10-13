<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TurmaFixture
 *
 */
class TurmaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'turma';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_turma' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'semeste' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'professor_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'disciplina_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_turma_professor' => ['type' => 'index', 'columns' => ['professor_id'], 'length' => []],
            'fk_turma_disciplina' => ['type' => 'index', 'columns' => ['disciplina_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_turma'], 'length' => []],
            'fk_turma_disciplina' => ['type' => 'foreign', 'columns' => ['disciplina_id'], 'references' => ['disciplina', 'id_disciplina'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_turma_professor' => ['type' => 'foreign', 'columns' => ['professor_id'], 'references' => ['professor', 'id_professor'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_turma' => 1,
            'semeste' => 'Lorem ip',
            'professor_id' => 1,
            'disciplina_id' => 1
        ],
    ];
}
