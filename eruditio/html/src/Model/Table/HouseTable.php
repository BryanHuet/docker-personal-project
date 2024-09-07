<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * House Model
 *
 * @method \App\Model\Entity\House newEmptyEntity()
 * @method \App\Model\Entity\House newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\House> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\House get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\House findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\House patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\House> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\House|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\House saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\House>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\House>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\House>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\House> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\House>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\House>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\House>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\House> deleteManyOrFail(iterable $entities, array $options = [])
 */
class HouseTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('house');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('title')
            ->maxLength('title', 535)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 535)
            ->requirePresence('photo', 'create')
            ->notEmptyString('photo');

        $validator
            ->scalar('size')
            ->maxLength('size', 535)
            ->requirePresence('size', 'create')
            ->notEmptyString('size');

        $validator
            ->scalar('ground')
            ->maxLength('ground', 535)
            ->requirePresence('ground', 'create')
            ->notEmptyString('ground');

        $validator
            ->scalar('address')
            ->maxLength('address', 535)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('link')
            ->maxLength('link', 535)
            ->requirePresence('link', 'create')
            ->notEmptyString('link');

        $validator
            ->scalar('create_date')
            ->maxLength('create_date', 535)
            ->notEmptyString('create_date');

        return $validator;
    }
}
