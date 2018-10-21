<?php
/**
 * Created by PhpStorm.
 * User: default
 * Date: 21.10.18
 * Time: 16:07
 */

namespace yii\behaviors;

use yii\db\BaseActiveRecord;
use yii\base\InvalidCallException;
use Yii;


class LengthTitleBehavior extends AttributeBehavior
{
    public $lengthTitleAttribute = 'length_title';

    public $value;

    public function init()
    {
        parent::init();

        if (empty($this->attributes)) {
            $this->attributes = [
                BaseActiveRecord::EVENT_BEFORE_INSERT => $this->lengthTitleAttribute,
                BaseActiveRecord::EVENT_BEFORE_UPDATE => $this->lengthTitleAttribute,
            ];
        }
    }

    protected function getValue($event)
    {
        $post = Yii::$app->request->post();
        $title = $post['Films']['title'];
        $length = strlen($title);
        return $length;
    }

    /**
     * Updates a timestamp attribute to the current timestamp.
     *
     * ```php
     * $model->touch('lastVisit');
     * ```
     * @param string $attribute the name of the attribute to update.
     * @throws InvalidCallException if owner is a new record (since version 2.0.6).
     */
    public function touch($attribute)
    {
        /* @var $owner BaseActiveRecord */
        $owner = $this->owner;
        if ($owner->getIsNewRecord()) {
            throw new InvalidCallException('Updating the timestamp is not possible on a new record.');
        }
        $owner->updateAttributes(array_fill_keys((array) $attribute, $this->getValue(null)));
    }
}